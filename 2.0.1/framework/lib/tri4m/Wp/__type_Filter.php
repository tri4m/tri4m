<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Filter EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST event		= 0x00;
		CONST fn		= 0x01;
		CONST priority		= 0x02;
		CONST argsNum		= 0x03;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::event		=> __const_Type::SPL_STRING,
					self::fn		=>
					[
						__const_Type::SPL_CLOSURE,
						__const_Type::SPL_FUNCTION,
						__const_Type::SPL_METHOD
					],
					self::priority		=> __const_Type::SPL_LONG,
					self::argsNum		=> __const_Type::SPL_LONG,
				],
				parent::mergeOffsetValues($__setup, [
					self::priority		=> 10,
					self::argsNum		=> 1
				])
			);
		}
	}