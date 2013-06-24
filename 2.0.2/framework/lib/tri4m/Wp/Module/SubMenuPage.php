<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\Module\__type_SubMenuPage;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Inv;
	USE ILLI\Core\Std\Exec\__type_Action;
	USE ILLI\Core\Std\Exec\__type_Call;
	USE ILLI\Core\Util\String;
	USE ILLI\Core\Std\Invoke;
	
	CLASS SubMenuPage EXTENDS \tri4m\Wp\Module
	{
		protected $__pageHook	= NULL;
		
		function __construct(__type_SubMenuPage $__Setup)
		{
			$this->__Setup = $__Setup;
			
			$this->__actions[] = new __type_Action([
				__type_Action::event	=> __const_Action::ADMIN_MENU,
				__type_Action::argsNum	=> 0,
				__type_Action::priority	=> 100,
				__type_Action::handle	=> [$this, '__subMenuPage']
			]);
		}
		
		/**
		 * @todo the 1st arg in add_submenu_page is an undocumented empty string?
		 */
		function __subMenuPage()
		{
			if(NULL === $this->__Setup->get()[__type_SubMenuPage::template])
			{
				$this->__Setup->get()[__type_SubMenuPage::template] = new __type_Call([
					__type_Call::handle		=> ['tri4m\Wp\__print_Module', 'subMenuPage'],
					__type_Call::arguments		=> [$this->__Setup],
					__type_Call::lockArguments	=> TRUE
				]);
			}
			else
			#! custom template renderer
			{
				#! 1st recieved argument in callback is an undocumented empty string
				#~ force args and set __type_SubMenuPage as 1st param
				#~ toggle to false: [NULL, $this->__Setup]
				#+ http://codex.wordpress.org/Function_Reference/add_submenu_page @ $function
				#+ http://core.trac.wordpress.org/browser/tags/3.5.2/wp-admin/includes/plugin.php#L998
				$this->__Setup->get()[__type_SubMenuPage::template]->get()[__type_Call::arguments]
					= TRUE === $this->__Setup->get()[__type_SubMenuPage::template]->get()[__type_Call::lockArguments]
						? [$this->__Setup]
						: [NULL, $this->__Setup];
			}
			
			$config = $this->__Setup->toArray([
				__type_SubMenuPage::parentId,
				__type_SubMenuPage::title,
				__type_SubMenuPage::menuTitle,
				__type_SubMenuPage::capability,
				__type_SubMenuPage::id
			]);
			
			$config[] = [$this->__Setup->get()[__type_SubMenuPage::template], 'emit'];
			
			$this->__pageHook = Invoke::emitStatic('tri4m\Wp\Inv', 'addSubmenuPage', $config);
		}
	}