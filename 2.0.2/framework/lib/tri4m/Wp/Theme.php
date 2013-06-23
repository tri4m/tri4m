<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Theme;
	USE tri4m\Wp\Application;
	USE tri4m\Wp\Error;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE tri4m\Wp\Trap;
	USE ILLI\Core\Std\Exec\__type_Call;
	USE ILLI\Core\Std\Spl\FsbCollection;
	USE ILLI\Core\Std\Throwable\Log;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE ILLI\Core\Util\Set;
	USE Exception;
	
	CLASS Theme
	{
		protected static $__Setup		= NULL;
		protected static $__Application		= NULL;
		protected static $__uri			= [];
		
		static function __boot()
		{
			static::$__uri =
			[
				'root'		=> '{:root}',
				'core'		=> '{:root}/core',
				'coreLib'	=> '{:root}/core/lib',
				'coreJs'	=> '{:root}/core/lib/js',
				'coreCss'	=> '{:root}/core/lib/css',
				'coreImg'	=> '{:root}/core/lib/img',
				'coreIetf'	=> '{:root}/core/lib/ietf',
				'corePie'	=> '{:root}/core/lib/pie',
				'std'		=> '{:root}/core/std',
				'stdLib'	=> '{:root}/core/std/lib',
				'stdImg'	=> '{:root}/core/std/lib/img',
				'wp'		=> '{:wp}',
				'wpJs'		=> '{:wp}/js',
				'wpCss'		=> '{:wp}/css'
			];
			
			FsbCollection::fromArray([
				new __type_Call([__type_Call::arguments	=> [__const_Action::AFTER_SETUP_THEME, 'run']]),
				new __type_Call([__type_Call::arguments	=> [__const_Action::SHUTDOWN, 'shutdown']]),
				new __type_Call([__type_Call::arguments	=> [__const_Action::AFTER_SWITCH_THEME, 'install']]),
				new __type_Call([__type_Call::arguments	=> [__const_Action::SWITCH_THEME, 'uninstall']])
			])
			->each(function(__type_Call $T)
			{
				$T->get()[__type_Call::handle] = function($__event, $__method)
				{
					Inv::addAction($__event, function() use (&$__method)
					{
						try
						{
							static::$__Application->$__method();
							Hook::dequeue();
						}
						catch(\Exception $E)
						{
							throw $E;
						}
					}, 1, 0);
				};
				
				return $T;
			})
			->invoke('emit');
		}
		
		function __destruct()
		{
			
		}
		
		function __construct(__type_Theme $__Setup)
		{
			Trap::config([
				'code' => TRUE === $__Setup->get()[__type_Theme::trap] ? $__Setup->get()[__type_Theme::trapErrorCode] : 0,
				'fire' => function(array $i){ Error::add($i['Exception']->toTrack()->asText()); }
			]);
			
			Trap::handle(['shutdown' => function()
			{
				#! trapped 2 Error::$__log: see parser setup
				// (new \ILLI\Core\Std\Def\ADVArray())->set(Set::flatten(Log::get()))->each(function($v, $k)
				//	{ Error::add(2, '['.$k.']'.str_replace(PHP_EOL, PHP_EOL."\t", $v)); return $v; });
				
				print Trace::html();
				print Error::html();
				
			}]);
			
			Trap::parser(function($i){
				extract($i);
				
				#! not enough: return !strpos($file, 'wp-includes');
				#~ see https://gist.github.com/icro/5842541 for /wp-admin/edit-comments.php
				
				return strpos($file, 'tri4m') || strpos($file, 'ILLI');
			});
			
			Trap::run();
			
			Trace::enabled($__Setup->get()[__type_Theme::debug]);
			Error::enabled($__Setup->get()[__type_Theme::trap]);
			
			static::$__Setup	= $__Setup;
			static::$__Application	= new Application;
			static::$__Application->boot();
		}
		
		static function __callStatic($__name, $__parameters)
		{
			$r = explode('_', $n = Inflector::underscore($__name));
			switch($prefix = $r[0]):
				case 'slug':
					#+s Theme::slug({:sub}, {:sep}) => {:slug}{:sep}{:sub}
					$__parameters += [NULL, '_'];
					list($__value, $__delimeter) = $__parameters;
					
					$slug = static::$__Setup->get()[__type_Theme::slug];
					
					if(NULL === $__value)
						return $slug;
					
					if(is_array($__value))
						return $slug.$__delimeter.implode($__delimeter, array_filter($__value));
					
					return $slug.$__delimeter.$__value;
				case 'path':
				case 'uri':
					#+s Theme::{:case}{:pathScheme}() -> Theme::pathCoreLib() => {:casePath}Theme::$__pathScheme['coreLib']
					array_shift($r);
					$__parameters += [[]];
					list($__args) = $__parameters;
					
					if(FALSE === isset(static::$__uri[$r = lcfirst(Inflector::camelize(implode('_', $r)))]))
						return NULL;
					
					$p = [];
					
					foreach([
						'root'	=> 'theme',
						'wp'	=> 'wpInc'
					] as $t => $f)
						$p[$t] = static::$__Setup->{$f.ucfirst($prefix)};
					
					$s = String::insert(static::$__uri[$r], $p);
					
					if(NULL !== $__args && [] !== $__args)
					{
						$s .= '/';
						$s .= is_array($__args)
							? implode('/', array_map(function(&$n){ return trim($n, '/'); }, array_filter($__args)))
							: trim($__args, '/');
					}
					
					return $s;
			endswitch;
			
			$n = '__'.Inflector::camelize($__name);
			
			if($n === '__Setup')
			{
				return static::$$n->get();
			}
			
			return static::$$n;
		}
	}