<?PHP
	NAMESPACE tri4m\Wp\Module\AdminBar;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Meta EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST html		= 0x00;
		CONST cssClass		= 0x01;
		CONST onClick		= 0x02;
		CONST target		= 0x03;
		CONST title		= 0x04;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::html		=> [__const_Type::SPL_STRING, __const_Type::SPL_ARRAY],
					self::cssClass		=> [__const_Type::SPL_STRING],
					self::onClick		=> [__const_Type::SPL_STRING],
					self::target		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING]
				],
				$__setup
			);
		}
	}