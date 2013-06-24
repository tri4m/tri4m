<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__trait_Log;
	USE tri4m\Wp\__type_Theme;
	USE tri4m\Wp\Theme;
	
	CLASS Error
	{
		USE __trait_Log;
		
		static function __boot()
		{
			if(__CLASS__ !== get_called_class())
				return;
			
			static::reset();
		}
	}