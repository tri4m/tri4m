<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Trace;
	USE tri4m\Wp\Error;
	USE tri4m\Wp\Theme;
	
	CLASS Trap EXTENDS \ILLI\Core\Std\Throwable
	{
		CONST TRAP	= TRUE;
		CONST SHUTDOWN	= TRUE;
		
		public static function run()
		{
			static::$__parser = function($i)
			{
				extract($i);
				
				return !strpos($file, 'wp-includes');
			};
			
			static::$__handle['shutdown'] = function()
			{
				print Trace::html();
				print Error::html();
			};
			
			parent::run();
		}
	}