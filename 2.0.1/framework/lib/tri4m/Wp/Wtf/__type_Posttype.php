<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\Wtf\__type_Name;
	USE tri4m\Wp\Wtf\PostType\__type_Env;
	USE tri4m\Wp\Wtf\PostType\__type_UpdateMsg;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Posttype EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST name		= 0x00;
		CONST env		= 0x01;
		CONST updateMsg		= 0x02;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::name		=> ['tri4m\Wp\Wtf\__type_Name'],
					self::env		=> ['tri4m\Wp\Wtf\PostType\__type_Env'],
					self::updateMsg		=> ['tri4m\Wp\Wtf\PostType\__type_UpdateMsg'],
				],
				parent::mergeOffsetValues($__setup, [
					self::name		=> new __type_Name,
					self::env		=> new __type_Env,
					self::updateMsg		=> new __type_UpdateMsg
				])
			);
		}
	}