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
		CONST desc		= 0x05;
		CONST choices		= 0x06;
		CONST cssClass		= 0x07;
		CONST fn		= 0x08;
		
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
					self::type		=> [__const_Type::SPL_STRING],
					self::desc		=> [__const_Type::SPL_STRING],
					self::choices		=> [__const_Type::SPL_ARRAY],
					self::cssClass		=> [__const_Type::SPL_STRING],
					self::fn		=> [__const_Type::SPL_CLOSURE, __const_Type::SPL_FUNCTION, __const_Type::SPL_METHOD]
				],
				$__setup
			);
		}
	}