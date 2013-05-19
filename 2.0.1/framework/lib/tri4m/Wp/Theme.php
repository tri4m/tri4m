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
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE Exception;
	
	CLASS Theme
	{
		protected static $__Setup		= NULL;
		protected static $__Application		= NULL;
		protected static $__pathScheme		=
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
			'wpCss'		=> '{:wp}/css',
		];
		
		function __construct(__type_Theme $__Setup)
		{
			if(Trap::isRunning())
				Trap::stop();
				
			Trap::config(
			[
				'code' => TRUE === $__Setup->trap ? $__Setup->trapErrorCode : 0,
				'fire' => function($i = NULL)
				{
					Error::add($i['Exception']->toTrack()->asText());
				}
			]);
			
			FALSE === $__Setup->trap ?: Trap::run();
			
			static::$__Setup	= $__Setup;
			static::$__Application	= new Application;
			static::$__Application->boot();
			
			foreach([
				__const_Action::AFTER_SETUP_THEME	=> 'run',
				__const_Action::SHUTDOWN		=> 'shutdown',
				__const_Action::AFTER_SWITCH_THEME	=> 'install',
				__const_Action::SWITCH_THEME		=> 'uninstall'
			] as $c => $m)
				Inv::addAction($c, function() use ($m)
				{
					try
					{
						static::$__Application->$m();
					}
					catch(\Exception $E)
					{
						Error::add($E->toTrack()->asText());
					}
				});
		}
		
		static function __callStatic($__name, $__parameters)
		{
			$r = explode('_', $n = Inflector::underscore($__name));
			switch($prefix = $r[0]):
				case 'slug':
					$__parameters += [NULL, '_'];
					list($__value, $__delimeter) = $__parameters;
					
					return NULL !== $__value
						? is_array($__value)
							? static::$__Setup->slug.$__delimeter.implode($__delimeter, $__value)
							: static::$__Setup->slug.$__delimeter.$__value
						: static::$__Setup->slug;
					break;
				case 'path':
				case 'uri':
					array_shift($r);
					$__parameters += [[]];
					list($__args) = $__parameters;
					
					return TRUE === isset(static::$__pathScheme[$r = lcfirst(Inflector::camelize(implode('_', $r)))])
						? String::insert(static::$__pathScheme[$r], [
							'root'  => static::$__Setup->{'theme'.('uri' === $prefix ? 'Uri' : 'Path')},
							'wp'    => static::$__Setup->{'wpInc'.('uri' === $prefix ? 'Uri' : 'Path')}
							]).(NULL !== $__args && [] !== $__args
							? '/'.(TRUE === is_array($__args)
								? implode('/', array_map(function(&$n) { $n = trim($n, '/'); return $n; }, $__args))
								: trim($__args, '/'))
							: NULL)
						: NULL;
					break;
			endswitch;
			
			return FALSE === ('__Setup' === ($n = '__'.$__name))
				&& (TRUE === isset(static::$$n) || TRUE === property_exists(__CLASS__, $n))
					? static::$$n
					: static::$__Setup->$__name;
		}
	}