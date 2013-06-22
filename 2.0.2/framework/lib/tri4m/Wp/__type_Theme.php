<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Theme EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST slug		= 0x00;
		CONST name		= 0x01;
		CONST fullName		= 0x02;
		CONST themeName		= 0x03;
		CONST version		= 0x04;
		CONST versionId		= 0x05;
		CONST themePath		= 0x06;
		CONST themeUri		= 0x07;
		CONST wpIncPath		= 0x08;
		CONST wpIncUri		= 0x09;
		CONST config		= 0x0A;
		CONST debug		= 0x0B;
		CONST trap		= 0x0C;
		CONST trapErrorCode	= 0x0D;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::slug		=> [__const_Type::SPL_STRING],
					self::name		=> [__const_Type::SPL_STRING],
					self::fullName		=> [__const_Type::SPL_STRING],
					self::themeName		=> [__const_Type::SPL_STRING],
					self::version		=> [__const_Type::SPL_STRING],
					self::versionId		=> [__const_Type::SPL_LONG],
					self::themePath		=> [__const_Type::SPL_DIRECTORY],
					self::themeUri		=> [__const_Type::SPL_STRING],
					self::wpIncPath		=> [__const_Type::SPL_DIRECTORY],
					self::wpIncUri		=> [__const_Type::SPL_STRING],
					self::config		=> [__const_Type::SPL_ARRAY],
					self::debug		=> [__const_Type::SPL_BOOLEAN],
					self::trap		=> [__const_Type::SPL_BOOLEAN],
					self::trapErrorCode	=> [__const_Type::SPL_FLAG]
				],
				parent::mergeOffsetValues($__setup, [
					self::trap		=> TRUE,
					self::trapErrorCode	=> E_ALL
				])
			);
		}
	}