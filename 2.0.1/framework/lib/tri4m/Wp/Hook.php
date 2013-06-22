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
	
	CLASS Hook
	{
		CONST ACTION 	= 'tri4m\Wp\Hook::ACTION';
		CONST CALL	= 'tri4m\Wp\Hook::CALL';
		CONST FILTER	= 'tri4m\Wp\Hook::FILTER';
		
		protected static $__hooked = [];
		
		static function dequeue()
		{
			foreach([self::CALL, self::FILTER, self::ACTION] as $case)
			{
				Trace::add(1, __METHOD__.'[{:case}]', ['case' => $case]);
				
				if(FALSE === isset(static::$__hooked[$case]))
					continue;
				
				switch($case):
					case self::CALL:
						foreach(static::$__hooked[$case] as $hash => $fn)
							$fn();
						break;
					case self::ACTION:
					case self::FILTER:
						foreach(static::$__hooked[$case] as $event => $do)
							foreach($do as $hash => $fn)
								$fn();
						break;
				endswitch;
			}
		}
		
		static function enqueue(ADVTuple $__T)
		{
			static $__STATIC_fnR, $__STATIC_fnI;
			
			isset($__STATIC_fnI) ?: $__STATIC_fnI = function($T, $a)
			{
				Trace::add(2, 'call {:fn}@{:args}', ['fn' => $T->fn, 'args' => $a]);
				switch(TRUE):
					case $T->isVal($T::fn, __const_Type::SPL_CLOSURE):	return Invoke::emitCallable($T->fn, $a);
					case $T->isVal($T::fn, __const_Type::SPL_METHOD):	return Invoke::emit($T->fn[0], $T->fn[1], $a);
					case $T->isVal($T::fn, __const_Type::SPL_FUNCTION):	return Invoke::emitFunction($T->fn, $a);
				endswitch;
			};
			
			isset($__STATIC_fnR) ?: $__STATIC_fnR = function($h)
			{
				return new __type_Hook([__type_Hook::handle => $h]);
			};
			
			switch(TRUE):
				case $__T instanceOf __type_Action:
					static::$__hooked[self::ACTION][$__T->event][spl_object_hash($__T)] = $__STATIC_fnR(function() use (&$__T, &$__STATIC_fnI)
					{
						Trace::add(2, 'register {:event}@{:prio} {:exec}', ['event' => $__T->event, 'prio' => $__T->priority, 'exec' => $__T->fn]);
						
						Inv::addAction
						(
							$__T->event,
							function() use (&$__T, &$__STATIC_fnI)
							{
								return $__STATIC_fnI($__T, func_get_args());
							},
							$__T->priority,
							$__T->argsNum
						);
					});
					break;
				case $__T instanceOf __type_Filter:
					static::$__hooked[self::FILTER][$__T->event][spl_object_hash($__T)] = $__STATIC_fnR(function() use (&$__T, &$__STATIC_fnI)
					{
						Trace::add(2, 'register {:event}@{:prio} {:exec}', ['event' => $__T->event, 'prio' => $__T->priority, 'exec' => $__T->fn]);
						
						Inv::addFilter
						(
							$__T->event,
							function() use (&$__T, &$__STATIC_fnI)
							{
								return $__STATIC_fnI($__T, func_get_args());
							},
							$__T->priority,
							$__T->argsNum
						);
					});
					break;
				case $__T instanceOf __type_Call:
					static::$__hooked[self::CALL][spl_object_hash($__T)] = $__STATIC_fnR(function() use (&$__T, &$__STATIC_fnI)
					{
						return $__STATIC_fnI($__T, $__T->arguments);
					});
					break;
			endswitch;
		}
	}