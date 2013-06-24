<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\Module\__type_ManageColumns;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__const_Global;
	USE tri4m\Wp\Inv;
	USE ILLI\Core\Std\Exec\__type_Action;
	USE ILLI\Core\Std\Exec\__type_Filter;
	USE ILLI\Core\Std\Exec\__type_Call;
	USE ILLI\Core\Util\String;
	USE WP_Post;
	
	CLASS ManageColumns EXTENDS \tri4m\Wp\Module
	{
		function __construct(__type_ManageColumns $__Setup)
		{
			$this->__Setup = $__Setup;
			
			if(FALSE === (bool) $this->__Setup->get()[__type_ManageColumns::filterEvent])
				return;
			
			foreach((array) $this->__Setup->get()[__type_ManageColumns::filterEvent] as $event)
				$this->__filters[] = new __type_Filter([
					__type_Filter::event	=> $event,
					__type_Filter::argsNum	=> 1,
					__type_Filter::priority	=> 400,
					__type_Filter::handle	=> [$this, '__manageColumnsFilter']
				]);
				
			if(FALSE === $this->__Setup->get()[__type_ManageColumns::action] instanceOf __type_Call
			|| FALSE === (bool) $this->__Setup->get()[__type_ManageColumns::actionEvent])
				return;
			
			foreach((array) $this->__Setup->get()[__type_ManageColumns::actionEvent] as $event)
				$this->__actions[] = new __type_Action([
					__type_Action::event	=> $event,
					__type_Action::argsNum	=> 1,
					__type_Action::priority	=> 400,
					__type_Action::handle	=> [$this, '__manageColumnsAction'],
					__type_Action::runOnce	=> FALSE #! multiple exec in loop
				]);
		}
		
		function __manageColumnsFilter($__columns)
		{
			return TRUE === $this->__Setup->get()[__type_ManageColumns::filter] instanceOf __type_Call
				? $this->__Setup->get()[__type_ManageColumns::filter]->emit($__columns)
				: array_slice($__columns, 0, $this->__Setup->get()[__type_ManageColumns::index] + 1, TRUE)
						+ [$this->__Setup->get()[__type_ManageColumns::id] => $this->__Setup->get()[__type_ManageColumns::title]]
						+ array_slice($__columns, $this->__Setup->get()[__type_ManageColumns::index] + 1, NULL, TRUE);
		}
		
		function __manageColumnsAction($__columnId)
		{
			if(FALSE === ($__columnId === $this->__Setup->get()[__type_ManageColumns::id])
			|| FALSE === (($WpPost = Inv::glob(__const_Global::LOOP_POST)) instanceOf WP_Post)
			|| FALSE === $this->__Setup->get()[__type_ManageColumns::action] instanceOf __type_Call)
				return;
			
			$this->__Setup->get()[__type_ManageColumns::action]->emit($__columnId, $WpPost);
		}
	}