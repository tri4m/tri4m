<?PHP
	NAMESPACE tri4m\Wp;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_Hook EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST handle		= 0x00;
		CONST enabled		= 0x01;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::handle	=> __const_Type::SPL_CLOSURE,
					self::enabled	=> __const_Type::SPL_BOOLEAN
				],
				$__setup
			);
		}
		
		public function __invoke()
		{
			if(FALSE === $this->enabled)
				return NULL;
				
			$fn = $this->handle;
			return $fn();
		}
	}