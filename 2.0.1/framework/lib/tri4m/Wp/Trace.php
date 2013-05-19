<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__trait_Log;
	USE tri4m\Wp\Theme;
	
	CLASS Trace
	{
		USE __trait_Log;
		
		static function __boot()
		{
			static::reset();
			static::$__logging[get_called_class()] = Theme::debug();
		}
	}