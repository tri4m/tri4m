<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Application;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Trap;
	
	CLASS Theme
	{
		protected static $__config		= [];
		protected static $__themePath		= NULL;
		protected static $__themeUri		= NULL;
		protected static $__wpIncPath		= NULL;
		protected static $__wpIncUri		= NULL;
		protected static $__slug		= NULL;
		protected static $__dataSlug		= NULL;
		protected static $__name		= NULL;
		protected static $__fullName		= NULL;
		protected static $__themeName		= NULL;
		protected static $__version		= NULL;
		protected static $__versionId		= NULL;
		protected static $__debug		= NULL;
		protected static $__Hook		= NULL;
		protected static $__Application		= NULL;
		protected static $__pathMap		=
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
			'stdImg'	=> '{:root}/core/std/lib/mg',
			'wp'		=> '{:wp}',
			'wpJs'		=> '{:wp}/js',
			'wpCss'		=> '{:wp}/css',
		];
		
		function __construct(array $__config = [])
		{
			foreach(['themePath', 'themeUri', 'wpIncPath', 'wpIncUri', 'slug', 'name', 'fullName', 'themeName', 'version', 'versionId', 'debug'] as $p)
			{
				$v = &$__config[$p];
				
				FALSE === isset($__config[$p]) ?: static::${'__'.$p} = $__config[$p];
				
				unset($__config[$p]);
			}
			
			static::$__config	= $__config;
			static::$__Application	= new Application;
			
			static::$__Application->boot();
			
			/*
			Inv::addAction(__const_Action::AFTER_SETUP_THEME, function()
			{
				static::$__Application->run();
				
				Inv::addAction(__const_Action::SHUTDOWN, function()
				{
					static::$__Application->shutdown();
				}, 1 );
				
			}, 1 );
			
			Inv::addAction(__const_Action::SHUTDOWN, function()
			{
				// show trace
			}, 999 );
			*/
			
		}
		
		static function test()
		{
			var_dump('Hi');
		}
		
		
	}