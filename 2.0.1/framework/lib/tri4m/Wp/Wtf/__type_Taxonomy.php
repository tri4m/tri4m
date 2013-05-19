<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\Wtf\Taxonomy\__type_Args;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Taxonomy EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST name		= 0x00;
		CONST type		= 0x01;
		CONST args		= 0x02;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::name		=> ['tri4m\Wp\Wtf\__type_Name'],
					self::type		=> ['tri4m\Wp\Wtf\PostType', __const_Type::SPL_ARRAY, __const_Type::SPL_STRING],
					self::args		=> ['tri4m\Wp\Wtf\Taxonomy\__type_Args']
				],
				parent::mergeOffsetValues($__setup, [
					self::args		=> new __type_Args
				])
			);
		}
	}