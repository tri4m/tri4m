<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Module\__type_AdminBar;
	USE tri4m\Wp\Module\AdminBar\__type_Meta;
	USE tri4m\Wp\Module\AdminBar\Child;
	USE ILLI\Core\Std\Exec\__type_Action;
	USE ILLI\Core\Util\Inflector;
	USE WP_Admin_Bar;
	
	CLASS AdminBar EXTENDS \tri4m\Wp\Module
	{
		function __construct(__type_AdminBar $__Setup)
		{
			$this->__Setup				= $__Setup;
			$this->__Setup[__type_AdminBar::id]	= Inflector::underscore($this->__Setup[__type_AdminBar::id]);
			
			$this->__actions[] = new __type_Action([
				__type_Action::event	=> __const_Action::ADMIN_BAR_MENU,
				__type_Action::argsNum	=> 1,
				__type_Action::priority	=> 500,
				__type_Action::handle	=> [$this, '__menu']
			]);
		}
		
		function addChild(__type_AdminBar $__Setup)
		{
			$this->__Setup[__type_AdminBar::child][] = new self($__Setup);
			return $this;
		}
		
		function install()
		{
			parent::install()->__Setup[__type_AdminBar::child]->each(function(AdminBar $Child)
				{
					$Child->__Setup[__type_AdminBar::parentId] = $this->__Setup[__type_AdminBar::id];
					return $Child;
				})
				->invoke('install');
			
			return $this;
		}
		
		function __menu(WP_Admin_Bar $__AdminBar)
		{
			$config = [];
				
			foreach([
				__type_AdminBar::parentId	=> 'parent',
				__type_AdminBar::text		=> 'title',
				__type_AdminBar::id		=> 'id',
				__type_AdminBar::href		=> 'href'
			] as $i => $k)
				$config[$k] = $this->__Setup[$i];
			
			foreach([
				__type_Meta::html		=> 'html',
				__type_Meta::cssClass		=> 'class',
				__type_Meta::onClick		=> 'onclick',
				__type_Meta::target		=> 'target',
				__type_Meta::title		=> 'title'
			] as $i => $k)
				$config['meta'][$k] = $this->__Setup[__type_AdminBar::meta][$i];
			
			$__AdminBar->add_menu($config);
		}
	}