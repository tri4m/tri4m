<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostMeta;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Field EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST title		= 0x01;
		CONST std		= 0x02;
		CONST type		= 0x03;
		CONST desc		= 0x04;
		CONST choices		= 0x05;
		CONST cssClass		= 0x06;
		CONST fn		= 0x07;
		CONST content		= 0x08;
		CONST beforeContent	= 0x09;
		CONST afterContent	= 0x0A;
		CONST label		= 0x0B;
		CONST beforeLabel	= 0x0C;
		CONST afterLabel	= 0x0D;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING],
					self::std		=>
					[
						__const_Type::SPL_STRING,
						__const_Type::SPL_LONG,
						__const_Type::SPL_DOUBLE,
						__const_Type::SPL_BOOLEAN
					],
					self::type		=> [__const_Type::SPL_STRING],
					self::desc		=> [__const_Type::SPL_STRING],
					self::choices		=> [__const_Type::SPL_ARRAY],
					self::cssClass		=> [__const_Type::SPL_STRING],
					self::fn		=>
					[
						__const_Type::SPL_CLOSURE,
						__const_Type::SPL_FUNCTION,
						__const_Type::SPL_METHOD
					],
					self::content		=>
					[
						'tri4m\Wp\__type_Call',
						__const_Type::SPL_STRING,
						__const_Type::SPL_ARRAY
					],
					self::beforeContent	=> [__const_Type::SPL_STRING],
					self::afterContent	=> [__const_Type::SPL_STRING],
					self::label		=> [__const_Type::SPL_STRING],
					self::beforeLabel	=> [__const_Type::SPL_STRING],
					self::afterLabel	=> [__const_Type::SPL_STRING],
				],
				parent::mergeOffsetValues($__setup, [
					self::beforeLabel	=> '<th scope="row">',
					self::label		=> '<label for="{:id}">{:title}</label>',
					self::afterLabel	=> '</th>',
					self::beforeContent	=> '<td>',
					self::content		=> '<input {:attr} />',
					self::afterContent	=> '</td>',
				])
			);
		}
	}