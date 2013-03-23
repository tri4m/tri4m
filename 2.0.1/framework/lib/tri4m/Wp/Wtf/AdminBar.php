<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
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
		
		function __construct(array $__config)
		{
			$__config += ['id' => $__config['title']] + static::$__defaults;
			
			if(is_array($__config['meta']))
				$__config['meta'] += static::$__meta;
				
			if(is_string($__config['id']))
				$__config['id'] = Inflector::underscore(Inflector::camelize($__config['id']));
				
			$this->__config = $__config;
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
			Hook::action(__const_Action::ADMIN_BAR_MENU, function(WP_Admin_Bar $__AdminBar)
			{
				Trace::add(4, __METHOD__.': {:setup}', ['setup' => $this->__config]);
				$__AdminBar->add_menu($this->tuple());
			}, 500);
			
			foreach($this->__sub as $sub)
				$sub->install();
		}
	}