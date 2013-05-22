<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Wtf\__type_MetaBox;
	
	CLASS MetaBox EXTENDS \tri4m\Wp\Wtf
	{
		protected $__actions	=
		[
			__const_Action::ADD_META_BOXES	=> NULL,
			__const_Action::SAVE_POST	=> NULL,
		];
		
		function __construct(__type_MetaBox $__Setup)
		{
			$this->__Setup = $__Setup;
		}
	}