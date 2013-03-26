<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\__type_Hook;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Std\Invoke;
	USE Closure;
	
	CLASS Hook
	{
		protected static $__hooked = [];
		
		static function dequeue()
		{
			foreach(static::$__hooked as $case => $hook)
			{
				Trace::add(1, __METHOD__.'[{:case}]', ['case' => $case]);
				switch($case):
					case 'call':
						foreach($hook as $hash => $fn)
							$fn();
						break;
					case 'action':
						foreach($hook as $event => $do)
							foreach($do as $hash => $fn)
								$fn();
						break;
				endswitch;
			}
		}
		
		static function action(__type_Action $__Action)
		{
			$hash = spl_object_hash($__Action);
			
			static::$__hooked[__FUNCTION__][$__Action->event][$hash] = new __type_Hook([
				__type_Hook::handle => function() use (&$__Action)
				{
					Trace::add(2, 'register {:event}@{:prio} {:exec}',
					[
						'event'	=> $__Action->event,
						'prio'	=> $__Action->priority,
						'exec'	=> $__Action->fn
					]);
					
					Inv::addAction
					(
						$__Action->event,
						function() use (&$__Action)
						{
							Trace::add(2, 'call {:fn}@{:args}',
							[
								'fn'	=> $__Action->event,
								'args'	=> func_get_args()
							]);
							
							if($__Action->isVal(__type_Action::fn, __const_Type::SPL_CLOSURE))
								return Invoke::emitCallable($__Action->fn, func_get_args());
							
							if($__Action->isVal(__type_Action::fn, __const_Type::SPL_FUNCTION))
								return Invoke::emitFunction($__Action->fn, func_get_args());
							
							if($__Action->isVal(__type_Action::fn, __const_Type::SPL_METHOD))
								return Invoke::emit($__Action->fn[0], $__Action->fn[1], func_get_args());
						},
						$__Action->priority,
						$__Action->argsNum
					);
				}
			]);
		}
		
		static function filter($__event, $__callable, $__priority = 10)
		{
		}
		
		static function call(__type_Call $__Call)
		{
			$hash = spl_object_hash($__Call);
			
			static::$__hooked[__FUNCTION__][$hash] = new __type_Hook([
				__type_Hook::handle => function() use (&$__Call)
				{
					Trace::add(2, 'call {:fn}@{:args}',
					[
						'fn'	=> $__Call->fn,
						'args'	=> $__Call->arguments
					]);
					
					if($__Call->isVal(__type_Call::fn, __const_Type::SPL_CLOSURE))
						return Invoke::emitCallable($__Call->fn, $__Call->arguments);
						
					if($__Call->isVal(__type_Call::fn, __const_Type::SPL_FUNCTION))
						return Invoke::emitFunction($__Call->fn, $__Call->arguments);
						
					if($__Call->isVal(__type_Call::fn, __const_Type::SPL_METHOD))
						return Invoke::emit($__Call->fn[0], $__Call->fn[1], $__Call->arguments);
				}
			]);
		}
	}