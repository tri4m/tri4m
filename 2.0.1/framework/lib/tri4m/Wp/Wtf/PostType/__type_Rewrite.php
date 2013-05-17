<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostType;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Rewrite EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST slug		= 0x00;
		CONST withFront		= 0x01;
		CONST feeds		= 0x02;
		CONST pages		= 0x03;
		CONST epMask		= 0x04;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::slug		=> [__const_Type::SPL_STRING],
					self::withFront		=> [__const_Type::SPL_BOOLEAN],
					self::feeds		=> [__const_Type::SPL_BOOLEAN],
					self::pages		=> [__const_Type::SPL_BOOLEAN],
					self::epMask		=> [__const_Type::SPL_LONG]
				],
				parent::mergeOffsetValues($__setup, [
					self::slug		=> '{:slug_singular}',
					self::withFront		=> FALSE,
					self::feeds		=> FALSE,
					self::pages		=> TRUE,
					self::epMask		=> 0
				])
			);
		}
	}