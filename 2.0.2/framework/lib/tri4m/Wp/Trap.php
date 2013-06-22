<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__type_Theme;
	USE tri4m\Wp\Error;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Trace;
	
	CLASS Trap EXTENDS \ILLI\Core\Std\Throwable
	{
		CONST TRAP	= TRUE;
		CONST SHUTDOWN	= TRUE;
		CONST DISPLAY	= TRUE;
		
		static function __boot()
		{
			parent::__boot();
			
			if(static::isRunning())
				static::stop();
		}
	}