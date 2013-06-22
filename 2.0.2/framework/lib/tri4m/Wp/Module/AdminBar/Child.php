<?PHP
	NAMESPACE tri4m\Wp\Module\AdminBar;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS Child EXTENDS \ILLI\Core\Std\Def\ADVArrayStrict
	{
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[__const_Type::SPL_LONG],
				[__NAMESPACE__],
				$__setup
			);
		}
	}