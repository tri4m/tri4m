<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Inv;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE WP_Screen;
	
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