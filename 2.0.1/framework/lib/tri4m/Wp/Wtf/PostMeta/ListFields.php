<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostMeta;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS ListFields EXTENDS \ILLI\Core\Std\Def\ADVArrayStrict
	{
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[__const_Type::SPL_LONG],
				['tri4m\Wp\Wtf\PostMeta\__type_FieldListField'],
				$__setup
			);
		}
	}