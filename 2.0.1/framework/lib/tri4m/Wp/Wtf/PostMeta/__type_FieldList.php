<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostMeta;
	USE tri4m\Wp\Wtf\PostMeta\ListFields;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_FieldList EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST id		= 0x00;
		CONST title		= 0x01;
		CONST fields		= 0x02;
		CONST beforeContent	= 0x03;
		CONST afterContent	= 0x04;
		CONST label		= 0x05;
		CONST beforeLabel	= 0x06;
		CONST afterLabel	= 0x07;
		CONST beforeField	= 0x08;
		CONST afterField	= 0x09;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::id		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING],
					self::fields		=> ['tri4m\Wp\Wtf\PostMeta\ListFields'],
					self::beforeContent	=> [__const_Type::SPL_STRING],
					self::afterContent	=> [__const_Type::SPL_STRING],
					self::label		=> [__const_Type::SPL_STRING],
					self::beforeLabel	=> [__const_Type::SPL_STRING],
					self::afterLabel	=> [__const_Type::SPL_STRING],
					self::beforeField	=> [__const_Type::SPL_STRING],
					self::afterField	=> [__const_Type::SPL_STRING],
				],
				parent::mergeOffsetValues($__setup, [
					self::fields		=> new ListFields,
					self::beforeLabel	=> '<th scope="row">',
					self::label		=> '{:title}',
					self::afterLabel	=> '</th>',
					self::beforeContent	=> '<td>',
					self::beforeField	=> '<div>',
					self::afterField	=> '</div>',
					self::afterContent	=> '</td>',
				])
			);
		}
	}