<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __config_Theme EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST slug		= 0x00;
		CONST name		= 0x01;
		CONST fullName		= 0x02;
		CONST themeName		= 0x03;
		CONST version		= 0x04;
		CONST versionId		= 0x05;
		CONST debug		= 0x06;
		CONST themePath		= 0x07;
		CONST themeUri		= 0x08;
		CONST wpIncPath		= 0x09;
		CONST wpIncUri		= 0x0A;
		CONST config		= 0x0B;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::slug		=> __const_Type::SPL_STRING,
					self::name		=> __const_Type::SPL_STRING,
					self::fullName		=> __const_Type::SPL_STRING,
					self::themeName		=> __const_Type::SPL_STRING,
					self::version		=> __const_Type::SPL_STRING,
					self::versionId		=> __const_Type::SPL_LONG,
					self::debug		=> __const_Type::SPL_BOOLEAN,
					self::themePath		=> __const_Type::SPL_DIRECTORY,
					self::themeUri		=> __const_Type::SPL_STRING,
					self::wpIncPath		=> __const_Type::SPL_DIRECTORY,
					self::wpIncUri		=> __const_Type::SPL_STRING,
					self::config		=> __const_Type::SPL_ARRAY
				],
				$__setup
			);
		}
	}