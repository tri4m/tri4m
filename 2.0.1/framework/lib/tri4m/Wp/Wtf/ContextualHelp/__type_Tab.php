<?PHP
	NAMESPACE tri4m\Wp\Wtf\ContextualHelp;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Tab EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST label		= 0x01;
		CONST content		= 0x02;
		CONST callback		= 0x03;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::label		=> [__const_Type::SPL_STRING],
					self::content		=>
					[
						'tri4m\Wp\__type_Call',
						__const_Type::SPL_STRING,
						__const_Type::SPL_ARRAY
					],
					self::callback		=> [__const_Type::SPL_CLOSURE, __const_Type::SPL_FUNCTION, __const_Type::SPL_METHOD]
				],
				$__setup
			);
		}
	}