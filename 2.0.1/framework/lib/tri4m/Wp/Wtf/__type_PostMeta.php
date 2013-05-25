<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\Wtf\PostMeta\__type_Box;
	USE tri4m\Wp\Wtf\PostMeta\Sections;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_PostMeta EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST sections		= 0x01;
		CONST fn		= 0x02;
		CONST deep		= 0x03;
		CONST box		= 0x04;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::sections		=> ['tri4m\Wp\Wtf\PostMeta\Sections'],
					self::fn		=> [__const_Type::SPL_CLOSURE, __const_Type::SPL_FUNCTION, __const_Type::SPL_METHOD],
					self::deep		=> [__const_Type::SPL_BOOLEAN],
					self::box		=> ['tri4m\Wp\Wtf\PostMeta\__type_Box']
				],
				parent::mergeOffsetValues($__setup, [
					self::sections		=> new Sections,
					self::deep		=> TRUE
				])
			);
		}
	}