<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\Wtf\__type_ContextualHelp;
	USE tri4m\Wp\Wtf\ContextualHelp\__type_Tab;
	USE tri4m\Wp\Wtf\ContextualHelp\Tabs;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE WP_Screen;
	
	CLASS ContextualHelp EXTENDS \tri4m\Wp\Wtf
	{
		protected $__actions	=
		[
			__const_Action::CONTEXTUAL_HELP	=> NULL
		];
		
		function __construct(__type_ContextualHelp $__Setup)
		{
			$this->__Setup = $__Setup;
			
			$this->__Setup->name->slugSingular	= Inflector::underscore($this->__Setup->name->slugSingular);
			$this->__Setup->name->slugPlural	= Inflector::underscore($this->__Setup->name->slugPlural);
			
			$__name = [];
			foreach([
				__type_Name::singular		=> 'singular',
				__type_Name::plural		=> 'plural',
				__type_Name::slugSingular	=> 'slug_singular',
				__type_Name::slugPlural		=> 'slug_plural'
			] as $i => $k)
				$__name[$k] = $this->__Setup->name->get()->toArray()[$i];
			
			$this->__actions[__const_Action::CONTEXTUAL_HELP] = new __type_Action([
				__type_Action::argsNum	=> 3,
				__type_Action::fn	=> function($__contextualHelp, $__screenId, WP_Screen $__WpScreen) use (&$__name)
				{
					switch(TRUE):
						case $this->__Setup->id !== $__WpScreen->id:
							return $__contextualHelp;
						
						case is_string($this->__Setup->content):
							return String::insert($this->__Setup->content, $__name);
						
						case is_array($this->__Setup->content):
							return String::insert(implode(PHP_EOL, $this->__Setup->content), $__name);
						
						case $this->__Setup->content instanceOf Tabs:
							foreach($this->__Setup->content->get() as $t)
								$__WpScreen->add_help_tab(
								[
									'id'		=> Inflector::underscore($t->id),
									'title'		=> String::insert($t->label, $__name),
									'content'	=> String::insert(is_array($t->content) ? implode(PHP_EOL, $t->content) : $t->content, $__name),
									'callback'	=> $t->callback
								]);
					endswitch;
				}
			]);
		}
	}