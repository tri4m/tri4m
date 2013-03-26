<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\__type_Hook;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Std\Def\ADVTuple;
	USE ILLI\Core\Std\Invoke;
	USE Closure;
	
	CLASS Hook
	{
		CONST ACTION 	= 'tri4m\Wp\Hook::ACTION';
		CONST CALL	= 'tri4m\Wp\Hook::CALL';
		CONST FILTER	= 'tri4m\Wp\Hook::FILTER';
		
		protected static $__hooked = [];
		
		static function dequeue()
		{
			foreach(static::$__hooked as $case => $hook)
			{
				Trace::add(1, __METHOD__.'[{:case}]', ['case' => $case]);
				switch($case):
					case self::CALL:
						foreach($hook as $hash => $fn)
							$fn();
						break;
					case self::ACTION:
						foreach($hook as $event => $do)
							foreach($do as $hash => $fn)
								$fn();
						break;
				endswitch;
			}
		}
		
		static function enqueue(ADVTuple $__T)
		{
			$hash = spl_object_hash($__T);
			
			switch(TRUE):
				case $__T instanceOf __type_Filter:
					break;
				case $__T instanceOf __type_Action:
					static::$__hooked[self::ACTION][$__T->event][$hash] = new __type_Hook([
						__type_Hook::handle => function() use (&$__T)
						{
							Trace::add(2, 'register {:event}@{:prio} {:exec}',
							[
								'event'	=> $__T->event,
								'prio'	=> $__T->priority,
								'exec'	=> $__T->fn
							]);
							
							Inv::addAction
							(
								$__T->event,
								function() use (&$__T)
								{
									Trace::add(2, 'call {:fn}@{:args}',
									[
										'fn'	=> $__T->event,
										'args'	=> func_get_args()
									]);
									
									if($__T->isVal(__type_Action::fn, __const_Type::SPL_CLOSURE))
										return Invoke::emitCallable($__T->fn, func_get_args());
									
									if($__T->isVal(__type_Action::fn, __const_Type::SPL_FUNCTION))
										return Invoke::emitFunction($__T->fn, func_get_args());
									
									if($__T->isVal(__type_Action::fn, __const_Type::SPL_METHOD))
										return Invoke::emit($__T->fn[0], $__T->fn[1], func_get_args());
								},
								$__T->priority,
								$__T->argsNum
							);
						}
					]);
					break;
				case $__T instanceOf __type_Call:
					static::$__hooked[self::CALL][$hash] = new __type_Hook([
						__type_Hook::handle => function() use (&$__T)
						{
							Trace::add(2, 'call {:fn}@{:args}',
							[
								'fn'	=> $__T->fn,
								'args'	=> $__T->arguments
							]);
							
							if($__T->isVal(__type_Call::fn, __const_Type::SPL_CLOSURE))
								return Invoke::emitCallable($__T->fn, $__T->arguments);
								
							if($__T->isVal(__type_Call::fn, __const_Type::SPL_FUNCTION))
								return Invoke::emitFunction($__T->fn, $__T->arguments);
								
							if($__T->isVal(__type_Call::fn, __const_Type::SPL_METHOD))
								return Invoke::emit($__T->fn[0], $__T->fn[1], $__T->arguments);
						}
					]);
					break;
			endswitch;
		}
	}