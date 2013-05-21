<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Hook;
	
	CLASS Wtf
	{
		static protected $__defaults	= [];
		protected $__Setup		= NULL;
		protected $__actions		= [];
		protected $__filters		= [];
		protected $__callables		= [];
		protected $__css		= NULL;
		protected $__js			= NULL;
		
		function install()
		{
			foreach(['__actions', '__filters'] as $p)
				foreach($this->$p as $e => $T)
				{
					if($T === NULL)
						continue;
						
					$T->event = $e;
					Hook::enqueue($T);
				}
				
			foreach($this->__callables as $T)
			{
				if($T === NULL)
					continue;
				
				Hook::enqueue($T);
			}
				
			return $this;
		}
	}