<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE WP_Screen;
	
	CLASS ThemeOptionsPage EXTENDS \tri4m\Wp\Wtf
	{
		function __construct(array $__config = [])
		{
			$this->__config = $__config;
		}
	}