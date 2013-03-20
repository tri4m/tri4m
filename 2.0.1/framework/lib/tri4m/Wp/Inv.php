<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Util\Inflector;
	
	CLASS Inv
	{
		static function __callStatic($__name, array $__parameters = [])
		{
			return static::call($__name, $__parameters);
		}
		
		static function call($__name, array $__parameters = [])
		{
			return function_exists($__name)
				? Invoke::emitFunction($__name, $__parameters)
				: function_exists($__name = Inflector::underscore(Inflector::camelize($__name)))
					? Invoke::emitFunction($__name, $__parameters)
					: NULL;
		}
		
		static function glob($__name)
		{
			global $$__name;
			return $$__name;
		}
	}