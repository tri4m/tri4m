<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\Module\__type_SideBar;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Inv;
	USE ILLI\Core\Std\Def\ADVArray;
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
			$names = $this->__Setup->toArray([
				'slug'	=> __type_SideBar::slug,
				'class'	=> __type_SideBar::cssClass,
				'id'	=> __type_SideBar::id,
				'name'	=> __type_SideBar::name,
			]);
			
			Inv::registerSidebar
			(
				ADVArray::fromArray($this->__Setup->toArray([
					'name'		=> __type_SideBar::name,
					'description'	=> __type_SideBar::desc,
					'id'		=> __type_SideBar::id,
					'class'		=> __type_SideBar::cssClass,
					'before_widget'	=> __type_SideBar::beforeWidget,
					'after_widget'	=> __type_SideBar::afterWidget,
					'before_title'	=> __type_SideBar::beforeTitle,
					'after_title'	=> __type_SideBar::afterTitle,
				]))
				->each(function($v) use ($names)
				{
					return String::insert(is_array($v) ? implode(PHP_EOL, $v) : $v, $names);
				})
				->get()
			);
		}
	}