<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostType;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Labels EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST singular		= 0x00;
		CONST plural		= 0x01;
		CONST addNew		= 0x02;
		CONST addNewItem	= 0x03;
		CONST editItem		= 0x04;
		CONST newItem		= 0x05;
		CONST allItems		= 0x06;
		CONST viewItem		= 0x07;
		CONST searchItems	= 0x08;
		CONST notFound		= 0x09;
		CONST notFoundInTrash	= 0x0A;
		CONST parentItemColon	= 0x0B;
		CONST menuName		= 0x0C;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::singular		=> [__const_Type::SPL_STRING],
					self::plural		=> [__const_Type::SPL_STRING],
					self::addNew		=> [__const_Type::SPL_STRING],
					self::addNewItem	=> [__const_Type::SPL_STRING],
					self::editItem		=> [__const_Type::SPL_STRING],
					self::newItem		=> [__const_Type::SPL_STRING],
					self::allItems		=> [__const_Type::SPL_STRING],
					self::viewItem		=> [__const_Type::SPL_STRING],
					self::searchItems	=> [__const_Type::SPL_STRING],
					self::notFound		=> [__const_Type::SPL_STRING],
					self::notFoundInTrash	=> [__const_Type::SPL_STRING],
					self::parentItemColon	=> [__const_Type::SPL_STRING],
					self::menuName		=> [__const_Type::SPL_STRING]
				],
				parent::mergeOffsetValues($__setup, [
					self::singular		=> '{:singular}',
					self::plural		=> '{:plural}',
					self::addNew		=> 'Add New',
					self::addNewItem	=> 'Add New {:singular}',
					self::editItem		=> 'Edit {:singular}',
					self::newItem		=> 'New {:singular}',
					self::allItems		=> 'All {:plural}',
					self::viewItem		=> 'View {:singular}',
					self::searchItems	=> 'Search {:plural}',
					self::notFound		=> 'No {:plural} found.',
					self::notFoundInTrash	=> 'No {:plural} found in the trash.',
					self::parentItemColon	=> 'Parent {:singular}:',
					self::menuName		=> '{:plural}'
				])
			);
		}
	}