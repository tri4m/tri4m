<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\Wtf\Settings\__type_Messages;
	USE tri4m\Wp\Wtf\Settings\__type_Page;
	USE tri4m\Wp\Wtf\Settings\Sections;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Settings EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST sections		= 0x01;
		CONST fn		= 0x02;
		CONST messages		= 0x03;
		CONST deep		= 0x04;
		CONST page		= 0x05;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::sections		=> ['tri4m\Wp\Wtf\Settings\Sections'],
					self::fn		=> [__const_Type::SPL_CLOSURE, __const_Type::SPL_FUNCTION, __const_Type::SPL_METHOD],
					self::messages		=> ['tri4m\Wp\Wtf\Settings\__type_Messages'],
					self::deep		=> [__const_Type::SPL_BOOLEAN],
					self::page		=> ['tri4m\Wp\Wtf\Settings\__type_Page'],
				],
				parent::mergeOffsetValues($__setup, [
					self::sections		=> new Sections,
					self::messages		=> new __type_Messages,
					self::deep		=> TRUE,
				])
			);
		}
	}