<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Util\Inflector;
	
	CLASS Wtf
	{
		static protected $__defaults	= [];
		protected $__actions		= [];
		protected $__filters		= [];
		protected $__callables		= [];
		protected $__config		= [];
		protected $__css		= NULL;
		protected $__js			= NULL;
		
		function config(array $__config = [])
		{
			return $this->__config = array_merge($this->__config, $__config);
		}
		
		function install()
		{
			foreach(['__actions', '__filters'] as $p)
				foreach($this->$p as $e => $T)
				{
					$T->event = $e;
					Hook::enqueue($T);
				}
				
			foreach($this->__callables as $T)
				Hook::enqueue($T);
				
			return $this;
		}
	}