<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\Module\ContextualHelp\__type_Tab;
	USE tri4m\Wp\Module\ContextualHelp\Tab;
	USE tri4m\Wp\Module\__type_Name;
	USE tri4m\Wp\Module\__type_ContextualHelp;
	USE tri4m\Wp\__const_Action;
	USE ILLI\Core\Std\Exec\__type_Action;
	USE ILLI\Core\Util\String;
	USE WP_Screen;
	
	CLASS ContextualHelp EXTENDS \tri4m\Wp\Module
	{
		function __construct(__type_ContextualHelp $__Setup)
		{
			$this->__Setup = $__Setup;
			
			$this->__actions[] = new __type_Action([
				__type_Action::event	=> __const_Action::CONTEXTUAL_HELP,
				__type_Action::argsNum	=> 3,
				__type_Action::priority	=> 500,
				__type_Action::handle	=> [$this, '__contextualHelp']
			]);
		}
		
		function addTab(__type_Tab $__Setup)
		{
			if(FALSE === $this->__Setup->get()[__type_ContextualHelp::content] instanceOf Tab)
				$this->__Setup->get()[__type_ContextualHelp::content] = new Tab;
			
			$this->__Setup->get()[__type_ContextualHelp::content][] = $__Setup;
			return $this;
		}
				
		function __contextualHelp($__contextualHelp, $__screenId, WP_Screen $__WpScreen)
		{
			$id		= $this->__Setup->get()[__type_ContextualHelp::id];
			$content	= $this->__Setup->get()[__type_ContextualHelp::content];
			$callback	= $this->__Setup->get()[__type_ContextualHelp::callback];
			$name		= $this->__Setup->get()[__type_ContextualHelp::name];
			
			$names = $this->__Setup->get()[__type_ContextualHelp::name]->toArray([
				'singular'	=> __type_Name::singular,
				'plural'	=> __type_Name::plural,
				'slug_singular'	=> __type_Name::slugSingular,
				'slug_plural'	=> __type_Name::slugPlural
			]);
			
			switch(TRUE):
				case $id !== $__WpScreen->id:
					return $__contextualHelp;
				
				case is_string($content):
					return String::insert($content, $names);
				
				case is_array($content):
					return String::insert(implode(PHP_EOL, $content), $names);
				
				case $content instanceOf __type_Call:
					
					$__WpScreen->add_help_tab([
						'id'		=> $id,
						'title'		=> String::insert($name->get()[__type_Name::singular], $names),
						'content'	=> String::insert
						(
							is_array($c = $content->emit())
								? implode(PHP_EOL, $c)
								: $c, $names
						),
						'callback'	=> $callback
					]);
					
					break;
				
				case $content instanceOf Tab:
					
					$content->each(function(__type_Tab $v) use (&$__WpScreen, &$names)
					{
						$id		= $v->get()[__type_Tab::id];
						$content	= $v->get()[__type_Tab::content];
						$callback	= $v->get()[__type_Tab::callback];
						$label		= $v->get()[__type_Tab::label];
						
						$__WpScreen->add_help_tab([
							'id'		=> $id,
							'title'		=> String::insert($label, $names),
							'content'	=> String::insert
							(
								is_array($c = $content instanceOf __type_Call ? $content->emit() : $content)
									? implode(PHP_EOL, $c)
									: $c, $names
							),
							'callback'	=> $callback
						]);
						
						return $v;
					});
					
					break;
			endswitch;
		}
	}