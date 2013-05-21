<?PHP
	NAMESPACE tri4m\Wp\Wtf\Settings;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Field EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST title		= 0x01;
		CONST content		= 0x02;
		CONST std		= 0x03;
		CONST type		= 0x04;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING],
					self::content		=>
					[
						'tri4m\Wp\__type_Call',
						__const_Type::SPL_STRING,
						__const_Type::SPL_ARRAY
					],
					self::std		=> [__const_Type::SPL_STRING, __const_Type::SPL_LONG, __const_Type::SPL_DOUBLE],
					self::type		=> [__const_Type::SPL_STRING]
				],
				$__setup
			);
		}
	}