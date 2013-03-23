<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Std\Invoke;
	USE Closure;
	
	CLASS Hook
	{
		protected static $__hooked = [];
		
		static function dequeue()
		{
			foreach(static::$__hooked as $class => $__hook)
				foreach($__hook as $case => $hook)
				{
					Trace::add(1, __METHOD__.'[{:case}]', ['case' => $case]);
					switch($case):
						case 'call':
							foreach($hook as $fn)
								$fn();
							break;
						case 'action':
							foreach($hook as $name => $event)
								foreach($event as $slot => $stack)
									foreach($stack as $fn)
										Inv::addAction($name, $fn, $slot);
							break;
					endswitch;
				}
		}
		
		static function action($__event, $__callable, $__priority = 10)
		{
			static::$__hooked[get_called_class()][__FUNCTION__][$__event][$__priority][] = function() use ($__event, $__callable, $__priority)
			{
				Trace::add(2, 'run {:event}@{:prio} {:exec}', ['event' => $__event, 'prio' => $__priority, 'exec' => $__callable]);
				$args = func_get_args();
				if(is_string($__callable))
				{
					return Inv::emitFunction($__callable, $args);
				}
				
				
				return $__callable instanceOf Closure
					? Invoke::emitCallable($__callable, $args)
					: Invoke::emitMethod($__callable[0], $__callable[1], $args);
			};
		}
		
		static function filter($__event, $__callable, $__priority = 10)
		{
			static::$__hooked[get_called_class()][__FUNCTION__][$__event][$__priority][] = function() use ($__callable)
			{
				$args = func_get_args();
				
				if(is_string($__callable) && function_exists($__callable))
					return Invoke::emitFunction($__callable, $args);
				
				return Invoke::emitMethod($__callable[0], $__callable[1], $args);
			};
		}
		
		static function call($__callable, $__arguments = [], $__priority = 10)
		{
			static::$__hooked[get_called_class()][__FUNCTION__][] = function() use ($__callable, $__arguments)
			{
				Trace::add(2, 'run {:exec} {:args}', ['exec' => $__callable, 'args' => $__arguments]);
				if(is_string($__callable))
				{
					return Inv::emitFunction($__callable, $__arguments);
				}
				
				return Invoke::emitMethod($__callable[0], $__callable[1], $args);
			};
		}
	}