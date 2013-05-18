<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Std\Spl\FsbCollection;
	USE WP_Admin_Bar;
	
	CLASS AdminBar EXTENDS \tri4m\Wp\Wtf
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
		
		protected $__actions	=
		[
			__const_Action::ADMIN_BAR_MENU => NULL
		];
		
		protected $__Sub	= NULL;
		
		function __construct(array $__config)
		{
			$__config += ['id' => $__config['title']] + static::$__defaults;
			
			if(is_array($__config['meta']))
				$__config['meta'] += static::$__meta;
				
			if(is_string($__config['id']))
				$__config['id'] = Inflector::underscore(Inflector::camelize($__config['id']));
				
			$this->__config	= $__config;
			$this->__Sub	= new FsbCollection(0);
			
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
				case $__config instanceOf AdminBar:
					$t = $__config->__config;
					break;
			endswitch;
			
			if(NULL === $t)
				return $this;
			
			$t['parent'] = $this->__config['id'];
			$t += ['id' => $t['title']];
			$t['id'] = $this->__config['id'].'_'.$t['id'];
			
			$c = get_called_class();
			
			$this->__Sub->add(new $c($t));
			
			return $this;
		}
		
		function install()
		{
			parent::install()->__Sub->invoke('install');
			return $this;
		}
	}