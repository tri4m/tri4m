<?PHP
	NAMESPACE tri4m\Wp\Wtf\Taxonomy;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Labels EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST singular			= 0x00;
		CONST plural			= 0x01;
		CONST addNewItem		= 0x02;
		CONST addOrRemoveItems		= 0x03;
		CONST newItemName		= 0x04;
		CONST editItem			= 0x05;
		CONST allItems			= 0x06;
		CONST viewItem			= 0x07;
		CONST updateItem		= 0x08;
		CONST searchItems		= 0x09;
		CONST popularItems		= 0x0A;
		CONST separateItems		= 0x0B;
		CONST chooseFromMostUsed	= 0x0C;
		CONST notFound			= 0x0D;
		CONST parentItem		= 0x0E;
		CONST parentItemColon		= 0x0F;
		CONST menuName			= 0x10;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::singular			=> [__const_Type::SPL_STRING],
					self::plural			=> [__const_Type::SPL_STRING],
					self::addNewItem		=> [__const_Type::SPL_STRING],
					self::addOrRemoveItems		=> [__const_Type::SPL_STRING],
					self::newItemName		=> [__const_Type::SPL_STRING],
					self::editItem			=> [__const_Type::SPL_STRING],
					self::allItems			=> [__const_Type::SPL_STRING],
					self::viewItem			=> [__const_Type::SPL_STRING],
					self::updateItem		=> [__const_Type::SPL_STRING],
					self::searchItems		=> [__const_Type::SPL_STRING],
					self::popularItems		=> [__const_Type::SPL_STRING],
					self::separateItems		=> [__const_Type::SPL_STRING],
					self::chooseFromMostUsed	=> [__const_Type::SPL_STRING],
					self::notFound			=> [__const_Type::SPL_STRING],
					self::parentItem		=> [__const_Type::SPL_STRING],
					self::parentItemColon		=> [__const_Type::SPL_STRING],
					self::menuName			=> [__const_Type::SPL_STRING]
				],
				parent::mergeOffsetValues($__setup, [
					self::singular			=> '{:singular}',
					self::plural			=> '{:plural}',
					self::addNewItem		=> 'Add New {:singular}',
					self::addOrRemoveItems		=> 'Add or remove {:plural}',
					self::newItemName		=> 'New {:singular} Name',
					self::editItem			=> 'Edit {:singular}',
					self::allItems			=> 'All {:plural}',
					self::viewItem			=> 'View {:singular}',
					self::updateItem		=> 'Update {:singular}',
					self::searchItems		=> 'Search {:plural}',
					self::popularItems		=> 'Popular {:plural}',
					self::separateItems		=> 'Separate {:plural} with commas',
					self::chooseFromMostUsed	=> 'Choose from the most used {:plural}',
					self::notFound			=> 'No {:plural} found.',
					self::parentItem		=> 'Parent {:singular}:',
					self::parentItemColon		=> 'Parent {:singular}:',
					self::menuName			=> '{:plural}'
				])
			);
		}
	}