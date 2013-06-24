<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\Module\__type_Name;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Std\Exec\__type_Call;
	
	CLASS __type_ContextualHelp EXTENDS \ILLI\Core\Std\Def\ADVTuple IMPLEMENTS \tri4m\Wp\IModuleSetup
	{
		CONST name		= 0x00;
		CONST id		= 0x01;
		CONST content		= 0x02;
		CONST callback		= 0x03;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::name		=> ['tri4m\Wp\Module\__type_Name'],
					self::id		=> [__const_Type::SPL_STRING],
					self::content		=> ['ILLI\Core\Std\Exec\__type_Call', __const_Type::SPL_STRING, __const_Type::SPL_ARRAY, 'tri4m\Wp\Module\ContextualHelp\Tab'],
					self::callback		=> ['ILLI\Core\Std\Exec\__type_Call'],
				],
				parent::mergeOffsetValues($__setup, [
					self::name		=> new __type_Name
				])
			);
		}
	}