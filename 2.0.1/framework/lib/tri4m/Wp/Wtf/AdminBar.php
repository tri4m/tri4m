<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Util\Inflector;
	USE WP_Admin_Bar;
	
	CLASS AdminBar
	{
		static protected $__meta =
		[
			'html'		=> '',
			'class'		=> '',
			'onclick'	=> '',
			'target'	=> '',
			'title'		=> '',
		];
		
		static protected $__defaults =
		[
			'title'		=> '',
			'parent'	=> FALSE,
			'href'		=> FALSE,
			'id'		=> FALSE,
			'meta'		=> FALSE
		];
		
		protected $__config	= [];
		protected $__sub	= [];
		protected $__actions	=
		[
			__const_Action::ADMIN_BAR_MENU => NULL
		];
		
		function __construct(array $__config)
		{
			$__config += ['id' => $__config['title']] + static::$__defaults;
			
			if(is_array($__config['meta']))
				$__config['meta'] += static::$__meta;
				
			if(is_string($__config['id']))
				$__config['id'] = Inflector::underscore(Inflector::camelize($__config['id']));
				
			$this->__config = $__config;
			
			$this->__actions[__const_Action::ADMIN_BAR_MENU] = new __type_Action([
				__type_Action::argsNum	=> 1,
				__type_Action::priority	=> 500,
				__type_Action::fn	=> function(WP_Admin_Bar $__AdminBar)
				{
					$__AdminBar->add_menu($this->__config);
				}
			]);
		}
		
		function add($__config)
		{
			$t = NULL;
			
			switch(TRUE):
				case is_array($__config):
					$t = $__config;
					break;
				case $__config instanceOf ThemeOptionsPage:
					$t = $__Page->tuple();
					break;
				case $__config instanceOf AdminBar:
					$t = $__config->tuple();
					break;
			endswitch;
			
			if(NULL === $t)
				return $this;
			
			$t['parent'] = $this->__config['id'];
			$t += ['id' => $t['title']];
			$t['id'] = $this->__config['id'].'_'.$t['id'];
			
			$c = get_called_class();
			
			$this->__sub[] = new $c($t);
			
			return $this;
		}
		
		function tuple()
		{
			return $this->__config;
		}
		
		function install()
		{
			foreach($this->__actions as $event => $Action)
			{
				$Action->event = $event;
				Hook::action($Action);
			}
			
			foreach($this->__sub as $sub)
				$sub->install();
		}
	}