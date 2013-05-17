<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostType;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Name EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST singular		= 0x00;
		CONST plural		= 0x01;
		CONST slugSingular	= 0x02;
		CONST slugPlural	= 0x03;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::singular		=> [__const_Type::SPL_STRING],
					self::plural		=> [__const_Type::SPL_STRING],
					self::slugSingular	=> [__const_Type::SPL_STRING],
					self::slugPlural	=> [__const_Type::SPL_STRING]
				],
				$__setup
			);
		}
	}