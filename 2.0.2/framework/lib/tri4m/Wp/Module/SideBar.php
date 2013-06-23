<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\Module\__type_SideBar;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Inv;
	USE ILLI\Core\Std\Exec\__type_Action;
	USE ILLI\Core\Util\String;
	
	CLASS SideBar EXTENDS \tri4m\Wp\Module
	{
		function __construct(__type_SideBar $__Setup)
		{
			$this->__Setup = $__Setup;
			
			$this->__actions[] = new __type_Action([
				__type_Action::event	=> __const_Action::WIDGETS_INIT,
				__type_Action::argsNum	=> 0,
				__type_Action::priority	=> 20,
				__type_Action::handle	=> [$this, '__sideBar']
			]);
		}
				
		function __sideBar()
		{
			$names = [];
			foreach([
				__type_SideBar::slug		=> 'slug',
				__type_SideBar::cssClass	=> 'class',
				__type_SideBar::id		=> 'id',
				__type_SideBar::name		=> 'name'
			] as $i => $k)
				$names[$k] = $this->__Setup->get()->toArray()[$i];
				
			$config = [];
			foreach([
				__type_SideBar::name		=> 'name',
				__type_SideBar::desc		=> 'description',
				__type_SideBar::id		=> 'id',
				__type_SideBar::cssClass	=> 'class',
				__type_SideBar::beforeWidget	=> 'before_widget',
				__type_SideBar::afterWidget	=> 'after_widget',
				__type_SideBar::beforeTitle	=> 'before_title',
				__type_SideBar::afterTitle	=> 'after_title'
			] as $i => $k)
				$config[$k] = String::insert(is_array($d = $this->__Setup->get()->toArray()[$i]) ? implode(PHP_EOL, $d) : $d, $names);
			
			Inv::registerSidebar($config);
		}
	}