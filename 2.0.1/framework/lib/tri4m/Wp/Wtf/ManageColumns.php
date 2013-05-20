<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Wtf\__type_ManageColumns;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Util\Inflector;
	USE WP_Post;
	
	CLASS ManageColumns EXTENDS \tri4m\Wp\Wtf
	{	
		/**
		 * @see __const_Action::MANAGE_
		 * @note	use __const_Action::MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__ for specific postType
		 * @note	use __const_Filter::MANAGE_POSTS_CUSTOM_COLUMN for all inserts of type 'post'
		 */
		protected $__actions	=
		[
		];
		
		/**
		 * @see __const_FILTER::MANAGE_
		 * @note	use __const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__ for specific postType
		 * @note	use __const_Filter::MANAGE_POSTS_COLUMNS for all inserts of type 'post'
		 */
		protected $__filters	=
		[
		];
		
		function __construct(__type_ManageColumns $__Setup)
		{
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Inflector::underscore($this->__Setup->id);
			
			static $__STATIC_fnI;
			
			isset($__STATIC_fnI) ?: $__STATIC_fnI = function(__type_Call $T)
			{
				switch(TRUE):
					case $T->isVal($T::fn, __const_Type::SPL_CLOSURE):	return Invoke::emitCallable($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_FUNCTION):	return Invoke::emitFunction($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_METHOD):	return Invoke::emit($T->fn[0], $T->fn[1], $T->arguments);
				endswitch;
			};
			
			if(FALSE === (bool) $__Setup->filterEvent)
				return;
			
			foreach((array) $this->__Setup->filterEvent as $event)
				$this->__filters[$event] = new __type_Filter([
					__type_Filter::argsNum	=> 1,
					__type_Filter::priority	=> 400,
					__type_Filter::fn	=> $this->__Setup->filter instanceOf __type_Call
						? function(array $__columns) use (&$__STATIC_fnI)
						{
							$this->__Setup->filter->arguments = [$__columns] + $this->__Setup->filter->arguments;
							return $__STATIC_fnI($this->__Setup->filter);
						}
						: function(array $__columns)
						{
							$__columns = array_slice($__columns, 0, $this->__Setup->index + 1, TRUE)
									+ [$this->__Setup->id => $this->__Setup->title]
									+ array_slice($__columns, $this->__Setup->index + 1, NULL, TRUE);
									
							return $__columns;
						}
				]);
			
			if(FALSE === ($this->__Setup->action instanceOf __type_Call)
			|| FALSE === (bool) $this->__Setup->actionEvent)
				return;
			
			foreach((array) $this->__Setup->actionEvent as $event)
				$this->__actions[$event] = new __type_Action([
					__type_Action::argsNum	=> 1,
					__type_Action::priority	=> 400,
					__type_Action::fn	=> function($__columnId) use (&$__STATIC_fnI)
					{
						if(FALSE === ($__columnId === $this->__Setup->id))
							return;
						
						$WpPost = Inv::glob('post');
						
						if(FALSE === ($WpPost instanceOf WP_Post))
							return;
						
						$this->__Setup->action->arguments = [$__columnId, $WpPost] + $this->__Setup->action->arguments;
						
						$__STATIC_fnI($this->__Setup->action);
					}
				]);
		}
	}