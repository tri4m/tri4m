<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\Wtf\Settings\Sections;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Settings EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST name		= 0x01;
		CONST capability	= 0x02;
		CONST sections		= 0x03;
		CONST fn		= 0x04;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::name		=> [__const_Type::SPL_STRING],
					self::capability	=> [__const_Type::SPL_STRING],
					self::sections		=> ['tri4m\Wp\Wtf\Settings\Sections'],
					self::fn		=> [__const_Type::SPL_CLOSURE, __const_Type::SPL_FUNCTION, __const_Type::SPL_METHOD]
				],
				parent::mergeOffsetValues($__setup, [
					self::capability	=> 'administrator',
					self::sections		=> new Sections
				])
			);
		}
	}