<?PHP
	NAMESPACE tri4m\Wp\Wtf\Taxonomy;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Rewrite EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST slug		= 0x00;
		CONST withFront		= 0x01;
		CONST hierarchical	= 0x02;
		CONST epMask		= 0x03;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::slug		=> [__const_Type::SPL_STRING],
					self::withFront		=> [__const_Type::SPL_BOOLEAN],
					self::hierarchical	=> [__const_Type::SPL_BOOLEAN],
					self::epMask		=> [__const_Type::SPL_LONG]
				],
				parent::mergeOffsetValues($__setup, [
					self::slug		=> '{:slug_singular}',
					self::withFront		=> FALSE,
					self::hierarchical	=> TRUE,
					self::epMask		=> 0
				])
			);
		}
	}