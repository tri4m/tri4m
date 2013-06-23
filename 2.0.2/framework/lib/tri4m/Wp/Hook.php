<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Inv;
	USE ILLI\Core\Std\IEmitable;
	USE ILLI\Core\Std\Exec\__type_Action;
	USE ILLI\Core\Std\Exec\__type_Filter;
	USE ILLI\Core\Std\Exec\__type_Call;
	USE ILLI\Core\Std\Spl\FsbCollection;
	
	CLASS Hook
	{
		protected static $__FSB = NULL;
		
		static function __boot()
		{
			static::$__FSB = new FsbCollection(0);
		}
		
		static function dequeue()
		{
			static::$__FSB->invoke('__invoke');
			static::__boot();
		}
		
		static function enqueue(IEmitable $__T)
		{
			switch(TRUE):
				case $__T instanceOf __type_Action:
					static::$__FSB->add(function() use (&$__T)
					{
						Inv::addAction
						(
							$__T->get()[__type_Action::event],
							[$__T, 'emit'],
							$__T->get()[__type_Action::priority],
							$__T->get()[__type_Action::argsNum]
						);
					});
					break;
				case $__T instanceOf __type_Filter:
					static::$__FSB->add(function() use (&$__T)
					{
						Inv::addFilter
						(
							$__T->get()[__type_Filter::event],
							[$__T, 'emit'],
							$__T->get()[__type_Filter::priority],
							$__T->get()[__type_Filter::argsNum]
						);
					});
					break;
				case $__T instanceOf __type_Call:
					static::$__FSB->add(function() use (&$__T)
					{
						$__T->emit();
					});
					break;
			endswitch;
			
			return $__T;
		}
	}