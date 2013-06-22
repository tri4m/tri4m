<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostMeta;
	USE tri4m\Wp\Wtf\PostMeta\Fields;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Section EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST title		= 0x01;
		CONST fields		= 0x02;
		CONST content		= 0x03;
		CONST beforeContent	= 0x04;
		CONST afterContent	= 0x05;
		CONST beforeFields	= 0x06;
		CONST afterFields	= 0x07;
		CONST beforeField	= 0x08;
		CONST afterField	= 0x09;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING],
					self::fields		=> ['tri4m\Wp\Wtf\PostMeta\Fields'],
					self::content		=>
					[
						'tri4m\Wp\__type_Call',
						__const_Type::SPL_STRING,
						__const_Type::SPL_ARRAY
					],
					self::beforeContent	=> [__const_Type::SPL_STRING],
					self::afterContent	=> [__const_Type::SPL_STRING],
					self::beforeFields	=> [__const_Type::SPL_STRING],
					self::afterFields	=> [__const_Type::SPL_STRING],
					self::beforeField	=> [__const_Type::SPL_STRING],
					self::afterField	=> [__const_Type::SPL_STRING],
				],
				parent::mergeOffsetValues($__setup, [
					self::fields		=> new Fields,
					self::beforeFields	=> '<table class="form-table">',
					self::beforeField	=> '<tr valign="top">',
					self::beforeContent	=> '<div>',
					self::afterContent	=> '</div>',
					self::afterField	=> '</tr>',
					self::afterFields	=> '</table>',
				])
			);
		}
	}