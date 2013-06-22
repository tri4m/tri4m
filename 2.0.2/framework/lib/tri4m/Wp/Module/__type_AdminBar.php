<?PHP
	NAMESPACE tri4m\Wp\Module;
	USE tri4m\Wp\Module\AdminBar\__type_Meta;
	USE tri4m\Wp\Module\AdminBar\Child;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_AdminBar EXTENDS \tri4m\Wp\__type_Module
	{
		CONST text		= 0x00;
		CONST id		= 0x01;
		CONST href		= 0x02;
		CONST parentId		= 0x03;
		CONST child		= 0x04;
		CONST meta		= 0x05;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::text		=> [__const_Type::SPL_STRING],
					self::id		=> [__const_Type::SPL_STRING],
					self::href		=> [__const_Type::SPL_STRING],
					self::parentId		=> [__const_Type::SPL_STRING],
					self::child		=> ['tri4m\Wp\Module\AdminBar\Child'],
					self::meta		=> ['tri4m\Wp\Module\AdminBar\__type_Meta']
				],
				parent::mergeOffsetValues($__setup, [
					self::child		=> new Child,
					self::meta		=> new __type_Meta
				])
			);
		}
	}