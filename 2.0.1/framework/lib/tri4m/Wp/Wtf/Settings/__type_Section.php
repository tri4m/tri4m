<?PHP
	NAMESPACE tri4m\Wp\Wtf\Settings;
	USE tri4m\Wp\Wtf\Settings\Fields;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Section EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST title		= 0x01;
		CONST content		= 0x02;
		CONST page		= 0x03;
		CONST fields		= 0x03;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING],
					self::content		=>
					[
						'tri4m\Wp\__type_Call',
						__const_Type::SPL_STRING,
						__const_Type::SPL_ARRAY
					],
					self::page		=> [__const_Type::SPL_STRING],
					self::fields		=> ['tri4m\Wp\Wtf\Settings\Fields']
				],
				parent::mergeOffsetValues($__setup, [
					self::fields		=> new Fields
				])
			);
		}
	}