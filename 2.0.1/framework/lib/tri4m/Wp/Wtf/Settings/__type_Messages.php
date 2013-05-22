<?PHP
	NAMESPACE tri4m\Wp\Wtf\Settings;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Messages EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST importComplete	= 0x00;
		CONST importError	= 0x01;
		CONST resetComplete	= 0x02;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::importComplete	=> [__const_Type::SPL_STRING],
					self::importError	=> [__const_Type::SPL_STRING],
					self::resetComplete	=> [__const_Type::SPL_STRING]
				],
				parent::mergeOffsetValues($__setup, [
					self::importComplete	=> 'Options imported.',
					self::importError	=> 'Invalid data for import.',
					self::resetComplete	=> 'Default options restored.'
				])
			);
		}
	}