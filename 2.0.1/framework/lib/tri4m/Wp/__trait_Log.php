<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Util\String;
	
	TRAIT __trait_Log
	{
		protected static $__log	= [];
		
		static function add()
		{
			static::$__log[get_called_class()][] = Invoke::emitStatic('ILLI\Core\Util\String', 'format', func_get_args());
		}
		
		static function show()
		{
			return implode(PHP_EOL, isset(static::$__log[get_called_class()]) ? static::$__log[get_called_class()] : []);
		}
		
		static function html()
		{
			return String::insert('<pre class="tri4m-log">{:code}</pre>', ['code' => htmlspecialchars(static::show())]);
		}
		
		static function frame()
		{
			return String::insert('<iframe class="tri4m-log" src="data:text/plain;base64,{:code}" style="width: 100%; height: 100%; display: block;" />', ['code' => base64_encode(static::show())]);
		}
	}