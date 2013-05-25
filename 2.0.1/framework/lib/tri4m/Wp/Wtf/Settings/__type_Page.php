<?PHP
	NAMESPACE tri4m\Wp\Wtf\Settings;
	USE tri4m\Wp\__const_AdminLink;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Page EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST parentId		= 0x00;
		CONST title		= 0x01;
		CONST menuTitle		= 0x02;
		CONST cssClass		= 0x03;
		CONST capability	= 0x04;
		CONST content		= 0x05;
		CONST icon		= 0x06;
		CONST beforeForm	= 0x07;
		CONST afterForm		= 0x08;
		CONST beforeCtrl	= 0x09;
		CONST afterCtrl		= 0x0A;
		CONST submit		= 0x0B;
		CONST reset		= 0x0C;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::parentId		=> [__const_Type::SPL_STRING],
					self::title		=> [__const_Type::SPL_STRING],
					self::menuTitle		=> [__const_Type::SPL_STRING],
					self::cssClass		=> [__const_Type::SPL_STRING],
					self::capability	=> [__const_Type::SPL_STRING],
					self::content		=>
					[
						'tri4m\Wp\__type_Call',
						__const_Type::SPL_STRING,
						__const_Type::SPL_ARRAY
					],
					self::icon		=> [__const_Type::SPL_STRING],
					self::beforeForm	=> [__const_Type::SPL_STRING],
					self::afterForm		=> [__const_Type::SPL_STRING],
					self::beforeCtrl	=> [__const_Type::SPL_STRING],
					self::afterCtrl		=> [__const_Type::SPL_STRING],
					self::submit		=> [__const_Type::SPL_STRING],
					self::reset		=> [__const_Type::SPL_STRING],
				],
				parent::mergeOffsetValues($__setup, [
					self::capability	=> 'administrator',
					self::parentId		=> __const_AdminLink::THEMES,
					self::icon		=> 'options-general',
					self::beforeForm	=> '<form action="options.php" method="post">',
					self::afterForm		=> '</form>',
					self::beforeCtrl	=> '<p class="submit">',
					self::afterCtrl		=> '</p>',
					self::submit		=> '<input type="submit" class="button-primary" value="{:submit}" />'
				])
			);
		}
	}