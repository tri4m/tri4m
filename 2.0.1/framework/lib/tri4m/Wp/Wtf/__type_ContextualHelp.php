<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\Wtf\__type_Name;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_ContextualHelp EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST name		= 0x00;
		CONST id		= 0x01;
		CONST content		= 0x02;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::name		=> ['tri4m\Wp\Wtf\__type_Name'],
					self::id		=> [__const_Type::SPL_STRING],
					self::content		=> [__const_Type::SPL_STRING, __const_Type::SPL_ARRAY, 'tri4m\Wp\Wtf\ContextualHelp\Tabs'],
				],
				parent::mergeOffsetValues($__setup, [
					self::name		=> new __type_Name
				])
			);
		}
	}