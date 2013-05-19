<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Wtf\__type_SideBar;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	
	CLASS SideBar EXTENDS \tri4m\Wp\Wtf
	{
		protected $__actions	=
		[
			__const_Action::WIDGETS_INIT => NULL
		];
		
		function __construct(__type_SideBar $__Setup)
		{
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Inflector::underscore($this->__Setup->id);
			
			$__name = [];
			foreach([
				__type_Sidebar::slug		=> 'slug',
				__type_Sidebar::cssClass	=> 'class',
				__type_Sidebar::id		=> 'id',
				__type_Sidebar::name		=> 'name'
			] as $i => $k)
				$__name[$k] = $this->__Setup->get()->toArray()[$i];
			
			$this->__actions[__const_Action::WIDGETS_INIT] = new __type_Action([
				__type_Action::argsNum	=> 1,
				__type_Action::priority	=> 20,
				__type_Action::fn	=> function() use (&$__name)
				{
					$config = [];
					
					foreach([
						__type_Sidebar::name		=> 'name',
						__type_Sidebar::desc		=> 'description',
						__type_Sidebar::id		=> 'id',
						__type_Sidebar::cssClass	=> 'class',
						__type_Sidebar::beforeWidget	=> 'before_widget',
						__type_Sidebar::afterWidget	=> 'after_widget',
						__type_Sidebar::beforeTitle	=> 'before_title',
						__type_Sidebar::afterTitle	=> 'after_title'
					] as $i => $k)
						$config[$k] = String::insert(is_array($d = $this->__Setup->get()->toArray()[$i]) ? implode(PHP_EOL, $d) : $d, $__name);
					
					Inv::registerSidebar($config);
				}
			]);
		}
	}