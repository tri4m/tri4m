<?PHP
	NAMESPACE tri4m\Wp\Wtf\Settings;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS Sections EXTENDS \ILLI\Core\Std\Def\ADVArrayStrict
	{
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[__const_Type::SPL_LONG],
				['tri4m\Wp\Wtf\Settings\__type_Section'],
				$__setup
			);
		}
	}