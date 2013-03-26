<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Call EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST fn		= 0x00;
		CONST arguments		= 0x01;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::fn		=>
					[
						__const_Type::SPL_CLOSURE,
						__const_Type::SPL_FUNCTION,
						__const_Type::SPL_METHOD
					],
					self::arguments		=> __const_Type::SPL_ARRAY
				],
				parent::mergeOffsetValues($__setup, [
					self::arguments		=> []
				])
			);
		}
	}