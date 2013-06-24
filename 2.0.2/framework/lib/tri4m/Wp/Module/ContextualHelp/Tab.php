<?PHP
	NAMESPACE tri4m\Wp\Module\ContextualHelp;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS Tab EXTENDS \ILLI\Core\Std\Def\ADVArrayStrict
	{
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[__const_Type::SPL_LONG],
				['tri4m\Wp\Module\ContextualHelp\__type_Tab'],
				$__setup
			);
		}
	}