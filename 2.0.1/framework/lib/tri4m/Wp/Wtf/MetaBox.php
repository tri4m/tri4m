<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Wtf\__type_MetaBox;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE WP_Post;
	
	CLASS MetaBox EXTENDS \tri4m\Wp\Wtf
	{
		protected $__actions	=
		[
			__const_Action::ADD_META_BOXES	=> NULL
		];
		
		function __construct(__type_MetaBox $__Setup)
		{
			static $__STATIC_fnC, $__STATIC_fnI;
			
			isset($__STATIC_fnI) ?: $__STATIC_fnI = function(__type_Call $T)
			{
				switch(TRUE):
					case $T->isVal($T::fn, __const_Type::SPL_CLOSURE):	return Invoke::emitCallable($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_FUNCTION):	return Invoke::emitFunction($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_METHOD):	return Invoke::emit($T->fn[0], $T->fn[1], $T->arguments);
				endswitch;
			};
			
			isset($__STATIC_fnC) ?: $__STATIC_fnC = function(__type_MetaBox $__Setup) use (&$__STATIC_fnI)
			{
				foreach((array) $__Setup->type as $t)
					return Inv::addMetaBox
					(
						$__Setup->id,
						$__Setup->title,
						function(WP_Post $__WpPost, array $__config) use (&$__Setup, &$__STATIC_fnI)
						{
							print $__Setup->beforeContent;
							
							switch(TRUE):
								case is_string($c = $__Setup->content):
									print $c;
									break;
								
								case is_array($c = $__Setup->content):
									print implode(PHP_EOL, $c);
									break;
								
								case ($c = $__Setup->content) instanceOf __type_Call:
									$c->arguments = [$__WpPost, $__config] + $c->arguments;
									print is_array($c = $__STATIC_fnI($c)) ? implode(PHP_EOL, $c) : $c;
									break;
							endswitch;
							
							print $__Setup->afterContent;
						},
						$t,
						$__Setup->context,
						$__Setup->priority
					);
			};
			
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Theme::slug(Inflector::variablize(Inflector::underscore($this->__Setup->id)));
			
			NULL !== $this->__Setup->title ?: $this->__Setup->title = $this->__Setup->id;
			
			$this->__actions[__const_Action::ADD_META_BOXES] = new __type_Action([
				__type_Action::argsNum	=> 0,
				__type_Action::priority	=> 100,
				__type_Action::fn	=> function() use (&$__STATIC_fnC)
				{
					$__STATIC_fnC($this->__Setup);
				}
			]);
		}
	}