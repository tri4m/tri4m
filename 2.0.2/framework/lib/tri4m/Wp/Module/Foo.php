<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Module\__type_Foo;
	USE ILLI\Core\Std\Exec\__type_Action;
	
	CLASS Foo EXTENDS \tri4m\Wp\Module
	{
		public function __construct(__type_Foo $__Setup = NULL)
		{
			$this->__actions[] = new __type_Action([
				__type_Action::event	=> __const_Action::WIDGETS_INIT,
				__type_Action::handle	=> function()
				{
					// nothing
				}
			]);
		}
	}