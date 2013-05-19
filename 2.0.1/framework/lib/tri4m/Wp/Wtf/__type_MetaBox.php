<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_MetaBox EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST title		= 0x01;
		CONST type		= 0x02;
		CONST context		= 0x03;
		CONST priority		= 0x04;
		CONST fn		= 0x05;
		CONST arguments		= 0x06;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING],
					self::type		=> [__const_Type::SPL_STRING],
					self::context		=> [__const_Type::SPL_STRING],
					self::priority		=> [__const_Type::SPL_STRING],
					self::fn		=> [__const_Type::SPL_CLOSURE, __const_Type::SPL_FUNCTION, __const_Type::SPL_METHOD],
					self::argments		=> [__const_Type::SPL_ARRAY]
				],
				parent::mergeOffsetValues($__setup, [
					self::args		=> new __type_Args
				])
			);
		}
	}