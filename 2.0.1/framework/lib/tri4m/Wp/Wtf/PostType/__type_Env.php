<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostType;
	USE tri4m\Wp\Wtf\PostType\__flag_Support;
	USE tri4m\Wp\Wtf\PostType\__type_Labels;
	USE tri4m\Wp\Wtf\PostType\__type_Rewrite;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Env EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST supports			= 0x00;
		CONST labels			= 0x01;
		CONST rewrite			= 0x02;
		CONST desc			= 0x03;
		CONST isPublic			= 0x04;
		CONST excludeFromSearch		= 0x05;
		CONST publiclyQueryable		= 0x06;
		CONST showUi			= 0x07;
		CONST showInNavMenu		= 0x08;
		CONST showInMenu		= 0x09;
		CONST showInAdminBar		= 0x0A;
		CONST menuPosition		= 0x0B;
		CONST menuIcon			= 0x0C;
		CONST hierarchical		= 0x0D;
		CONST metaBoxFn			= 0x0E;
		CONST taxonomies		= 0x0F;
		CONST hasArchive		= 0x10;
		CONST permalinkEpMask		= 0x11;
		CONST queryVar			= 0x12;
		CONST canExport			= 0x13;
		CONST builtin			= 0x14;
		CONST editLink			= 0x15;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::supports		=> [__const_Type::SPL_LONG, __const_Type::SPL_ARRAY],
					self::labels		=> ['tri4m\Wp\Wtf\PostType\__type_Labels'],
					self::rewrite		=> ['tri4m\Wp\Wtf\PostType\__type_Rewrite'],
					self::desc		=> [__const_Type::SPL_STRING],
					self::isPublic		=> [__const_Type::SPL_BOOLEAN],
					self::excludeFromSearch	=> [__const_Type::SPL_BOOLEAN],
					self::publiclyQueryable	=> [__const_Type::SPL_BOOLEAN],
					self::showUi		=> [__const_Type::SPL_BOOLEAN],
					self::showInNavMenu	=> [__const_Type::SPL_BOOLEAN],
					self::showInMenu	=> [__const_Type::SPL_BOOLEAN],
					self::showInAdminBar	=> [__const_Type::SPL_BOOLEAN],
					self::menuPosition	=> [__const_Type::SPL_LONG],
					self::menuIcon		=> [__const_Type::SPL_STRING],
					self::hierarchical	=> [__const_Type::SPL_BOOLEAN],
					self::metaBoxFn		=> [__const_Type::SPL_CLOSURE, __const_Type::SPL_FUNCTION, __const_Type::SPL_METHOD],
					self::taxonomies	=> [__const_Type::SPL_ARRAY],
					self::hasArchive	=> [__const_Type::SPL_BOOLEAN],
					self::permalinkEpMask	=> [__const_Type::SPL_LONG],
					self::queryVar		=> [__const_Type::SPL_BOOLEAN, __const_Type::SPL_STRING],
					self::canExport		=> [__const_Type::SPL_BOOLEAN],
					self::builtin		=> [__const_Type::SPL_BOOLEAN],
					self::editLink		=> [__const_Type::SPL_STRING]
				],
				parent::mergeOffsetValues($__setup, [
					self::supports		=> __flag_Support::TITLE | __flag_Support::EDITOR | __flag_Support::THUMBNAIL,
					self::labels		=> new __type_Labels,
					self::rewrite		=> new __type_Rewrite,
					self::desc		=> 'Holds your {:plural} and {:singular} specific data.',
					self::isPublic		=> TRUE,
					self::excludeFromSearch	=> FALSE,
					self::publiclyQueryable	=> TRUE,
					self::showUi		=> TRUE,
					self::showInNavMenu	=> TRUE,
					self::showInMenu	=> TRUE,
					self::showInAdminBar	=> TRUE,
					self::menuPosition	=> 20,
					self::menuIcon		=> NULL,
					self::hierarchical	=> FALSE,
					self::metaBoxFn		=> NULL,
					//self::taxonomies	=> ['category', 'post_tag', 'page-category'],
					self::hasArchive	=> TRUE,
					self::permalinkEpMask	=> 0,
					self::queryVar		=> TRUE,
					self::canExport		=> TRUE,
					self::builtin		=> FALSE,
					self::editLink		=> 'post.php?post=%d'
				])
			);
		}
	}