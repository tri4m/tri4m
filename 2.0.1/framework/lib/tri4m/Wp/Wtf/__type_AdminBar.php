<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\Wtf\__type_Name;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_AdminBar EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST title		= 0x00;
		CONST id		= 0x01;
		CONST href		= 0x02;
		CONST parentId		= 0x03;
		CONST sub		= 0x04;
		CONST meta		= 0x05;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::title		=> [__const_Type::SPL_STRING],
					self::id		=> [__const_Type::SPL_STRING],
					self::href		=> [__const_Type::SPL_STRING],
					self::parentId		=> [__const_Type::SPL_STRING],
					self::sub		=> ['tri4m\Wp\Wtf\AdminBar\Child'],
					self::meta		=> ['tri4m\Wp\Wtf\AdminBar\__type_Meta']
				],
				$__setup
			);
		}
	}