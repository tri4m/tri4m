<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Invoke;
	
	CLASS Hook
	{
		CONST	ACTION_AFTER_SETUP_THEME	= 'after_setup_theme';
		
		static function install(array $__config = [])
		{
			parent::install($__config);
		}
		
		protected static $__hooked = [];
		
		static function action($__event, $__callable, $__priority = 10)
		{
			static::$__hooked[get_called_class()][__FUNCTION__][$__event][$__priority][] = function() use ($__callable)
			{
				$args = func_get_args();
				
				if(is_string($__callable) && function_exists($__callable))
					return Invoke::emitFunction($__callable, $args);
				
				return Invoke::emit(Invoke::normalize($__callable), $args);
			};
		}
		
		static function filter($__event, $__callable, $__priority = 10)
		{
			static::$__hooked[get_called_class()][__FUNCTION__][$__event][$__priority][] = function() use ($__callable)
			{
				$args = func_get_args();
				
				if(is_string($__callable) && function_exists($__callable))
					return Invoke::emitFunction($__callable, $args);
				
				return Invoke::emit(Invoke::normalize($__callable), $args);
			};
		}
		
		static function call($__callable, $__arguments = [], $__priority = 10)
		{
			static::$__hooked[get_called_class()][__FUNCTION__][$__priority][] = function() use ($__callable, $__arguments)
			{
				if(is_string($__function) && function_exists($__callable))
					return Invoke::emitFunction($__callable, $__arguments);
				
				return Invoke::emit(Invoke::normalize($__callable), $__arguments);
			};
		}
	}