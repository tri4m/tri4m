<?PHP
	NAMESPACE tri4m\Wp\Wtf\Taxonomy;
	USE tri4m\Wp\Wtf\Taxonomy\__type_Labels;
	USE tri4m\Wp\Wtf\Taxonomy\__type_Rewrite;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Args EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST label			= 0x00;
		CONST labels			= 0x01;
		CONST rewrite			= 0x02;
		CONST isPublic			= 0x03;
		CONST showUi			= 0x04;
		CONST showInNavMenus		= 0x05;
		CONST showTagCloud		= 0x06;
		CONST showAdminColumn		= 0x07;
		CONST hierarchical		= 0x08;
		CONST updateCountCallback	= 0x09;
		CONST queryVar			= 0x0A;
		CONST sort			= 0x0B;
		CONST builtin			= 0x0C;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::label			=> [__const_Type::SPL_STRING],
					self::labels			=> ['tri4m\Wp\Wtf\Taxonomy\__type_Labels'],
					self::rewrite			=> ['tri4m\Wp\Wtf\Taxonomy\__type_Rewrite'],
					self::isPublic			=> [__const_Type::SPL_BOOLEAN],
					self::showUi			=> [__const_Type::SPL_BOOLEAN],
					self::showInNavMenus		=> [__const_Type::SPL_BOOLEAN],
					self::showTagCloud		=> [__const_Type::SPL_BOOLEAN],
					self::showAdminColumn		=> [__const_Type::SPL_BOOLEAN],
					self::hierarchical		=> [__const_Type::SPL_BOOLEAN],
					self::updateCountCallback	=> [__const_Type::SPL_STRING],
					self::queryVar			=> [__const_Type::SPL_BOOLEAN, __const_Type::SPL_STRING],
					self::sort			=> [__const_Type::SPL_BOOLEAN],
					self::builtin			=> [__const_Type::SPL_BOOLEAN]
				],
				parent::mergeOffsetValues($__setup, [
					self::labels		=> new __type_Labels,
					self::rewrite		=> new __type_Rewrite,
					self::isPublic		=> TRUE,
					self::showUi		=> TRUE,
					self::showInNavMenus	=> TRUE,
					self::showTagCloud	=> FALSE,
					self::showAdminColumn	=> TRUE,
					self::hierarchical	=> FALSE,
					self::queryVar		=> TRUE,
					self::builtin		=> FALSE
				])
			);
		}
	}