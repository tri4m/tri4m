<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_ManageColumns EXTENDS \ILLI\Core\Std\Def\ADVTuple IMPLEMENTS \tri4m\Wp\IModuleSetup
	{
		CONST title		= 0x00;
		CONST id		= 0x01;
		CONST index		= 0x02;
		CONST filterEvent	= 0x03;
		CONST filter		= 0x04;
		CONST actionEvent	= 0x05;
		CONST action		= 0x06;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::title		=> [__const_Type::SPL_STRING],
					self::id		=> [__const_Type::SPL_STRING],
					self::index		=> [__const_Type::SPL_LONG],
					self::filterEvent	=> [__const_Type::SPL_STRING, __const_Type::SPL_ARRAY],
					self::filter		=> ['ILLI\Core\Std\Exec\__type_Call'],
					self::actionEvent	=> [__const_Type::SPL_STRING, __const_Type::SPL_ARRAY],
					self::action		=> ['ILLI\Core\Std\Exec\__type_Call']
				],
				parent::mergeOffsetValues($__setup, [
					self::index		=> 0
				])
			);
		}
	}