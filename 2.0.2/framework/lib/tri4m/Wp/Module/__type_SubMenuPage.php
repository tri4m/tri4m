<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\__const_AdminLink;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Std\Exec\__type_Call;
	
	CLASS __type_SubMenuPage EXTENDS \ILLI\Core\Std\Def\ADVTuple IMPLEMENTS \tri4m\Wp\IModuleSetup
	{
		CONST id			= 0x00;
		CONST parentId			= 0x01;
		CONST title			= 0x02;
		CONST menuTitle			= 0x03;
		CONST cssClass			= 0x04;
		CONST capability		= 0x05;
		CONST content			= 0x06;
		CONST icon			= 0x07;
		CONST beforeContent		= 0x08;
		CONST afterContent		= 0x09;
		CONST template			= 0x0A;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id			=> [__const_Type::SPL_STRING],
					self::parentId			=> [__const_Type::SPL_STRING],
					self::title			=> [__const_Type::SPL_STRING],
					self::menuTitle			=> [__const_Type::SPL_STRING],
					self::cssClass			=> [__const_Type::SPL_STRING],
					self::capability		=> [__const_Type::SPL_STRING],
					self::content			=> ['ILLI\Core\Std\Exec\__type_Call', __const_Type::SPL_STRING, __const_Type::SPL_ARRAY],
					self::icon			=> [__const_Type::SPL_STRING],
					self::beforeContent		=> [__const_Type::SPL_STRING],
					self::afterContent		=> [__const_Type::SPL_STRING],
					self::template			=> ['ILLI\Core\Std\Exec\__type_Call'],
				],
				parent::mergeOffsetValues($__setup, [
					self::capability		=> 'administrator',
					self::parentId			=> __const_AdminLink::THEMES,
					self::icon			=> 'options-general',
					self::beforeContent		=> '<div class="wrap {:class}" id="{:id}">{:icon}<h2>{:title}</h2>',
					self::afterContent		=> '</div>'
				])
			);
		}
	}