<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Util\String;
	
	CLASS Log EXTENDS \ILLI\Core\Std\Throwable
	{
		protected static $__log = [];
		
		static function add()
		{
			static::$__log[] = Invoke::emitStatic('ILLI\Core\Util\String', 'format', func_get_args());
		}
		
		static function show()
		{
			return implode(PHP_EOL, static::$__log);
		}
	}