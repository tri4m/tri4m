<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\__type_Theme;
	USE tri4m\Wp\Theme;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_SideBar EXTENDS \ILLI\Core\Std\Def\ADVTuple IMPLEMENTS \tri4m\Wp\IModuleSetup
	{
		CONST name		= 0x00;
		CONST desc		= 0x01;
		CONST slug		= 0x02;
		CONST id		= 0x03;
		CONST cssClass		= 0x04;
		CONST beforeWidget	= 0x05;
		CONST afterWidget	= 0x06;
		CONST beforeTitle	= 0x07;
		CONST afterTitle	= 0x08;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::name		=> [__const_Type::SPL_STRING],
					self::desc		=> [__const_Type::SPL_STRING, __const_Type::SPL_ARRAY],
					self::slug		=> [__const_Type::SPL_STRING],
					self::id		=> [__const_Type::SPL_STRING],
					self::cssClass		=> [__const_Type::SPL_STRING],
					self::beforeWidget	=> [__const_Type::SPL_STRING],
					self::afterWidget	=> [__const_Type::SPL_STRING],
					self::beforeTitle	=> [__const_Type::SPL_STRING],
					self::afterTitle	=> [__const_Type::SPL_STRING],
				],
				parent::mergeOffsetValues($__setup, [
					self::slug		=> Theme::setup()[__type_Theme::slug],
					self::beforeWidget	=> '<li id="%1$s" class="widget %2$s">',
					self::afterWidget	=> '</li>',
					self::beforeTitle	=> '<h2 class="widgettitle">',
					self::afterTitle	=> '</h2>',
				])
			);
		}
	}