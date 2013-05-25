<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostMeta;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Box EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST title		= 0x01;
		CONST type		= 0x02;
		CONST context		= 0x03;
		CONST priority		= 0x04;
		CONST content		= 0x05;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING],
					self::type		=> [__const_Type::SPL_STRING, __const_Type::SPL_ARRAY],
					self::context		=> [__const_Type::SPL_STRING],
					self::priority		=> [__const_Type::SPL_STRING],
					self::content		=>
					[
						'tri4m\Wp\__type_Call',
						__const_Type::SPL_STRING,
						__const_Type::SPL_ARRAY
					]
				],
				$__setup
			);
		}
	}