<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\Wtf\__type_Name;
	USE tri4m\Wp\Wtf\__type_ContextualHelp;
	USE tri4m\Wp\Wtf\ContextualHelp\__type_Tab;
	USE tri4m\Wp\Wtf\ContextualHelp\Tabs;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Std\Invoke;
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
			static $__STATIC_fnI, $__STATIC_fnC;
			
			isset($__STATIC_fnI) ?: $__STATIC_fnI = function(__type_Call $T)
			{
				switch(TRUE):
					case $T->isVal($T::fn, __const_Type::SPL_CLOSURE):	return Invoke::emitCallable($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_FUNCTION):	return Invoke::emitFunction($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_METHOD):	return Invoke::emit($T->fn[0], $T->fn[1], $T->arguments);
				endswitch;
			};
			
			isset($__STATIC_fnC) ?: $__STATIC_fnC = function(__type_ContextualHelp $__Setup, WP_Screen $__WpScreen, $__contextualHelp, $__name) use (&$__STATIC_fnI)
			{
				switch(TRUE):
					case $__Setup->id !== $__WpScreen->id:
						return $__contextualHelp;
					
					case is_string($c = $__Setup->content):
						return String::insert($c, $__name);
					
					case is_array($c = $__Setup->content):
						return String::insert(implode(PHP_EOL, $c), $__name);
					
					case ($c = $__Setup->content) instanceOf __type_Call:
						
						$__WpScreen->add_help_tab([
							'id'		=> Inflector::underscore($__Setup->id),
							'title'		=> String::insert($__Setup->name->singular, $__name),
							'content'	=> String::insert(is_array($c = $__STATIC_fnI($c)) ? implode(PHP_EOL, $c) : $c, $__name),
							'callback'	=> $__Setup->callback
						]);
						
						break;
					
					case ($c = $__Setup->content) instanceOf Tabs:
						
						foreach($c->get() as $Tab)
						{
							if($Tab instanceOf __type_Tab)
								$__WpScreen->add_help_tab([
									'id'		=> Inflector::underscore($Tab->id),
									'title'		=> String::insert($Tab->label, $__name),
									'content'	=> String::insert(is_array($c = $Tab->content instanceOf __type_Call ? $__STATIC_fnI($Tab->content) : $Tab->content) ? implode(PHP_EOL, $c) : $c, $__name),
									'callback'	=> $Tab->callback
								]);
						}
						break;
				endswitch;
			};
			
			$this->__Setup				= $__Setup;
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
				__type_Action::fn	=> function($__contextualHelp, $__screenId, WP_Screen $__WpScreen) use (&$__STATIC_fnC, &$__name)
				{
					return $__STATIC_fnC($this->__Setup, $__WpScreen, $__contextualHelp, $__name);
				}
			]);
		}
	}