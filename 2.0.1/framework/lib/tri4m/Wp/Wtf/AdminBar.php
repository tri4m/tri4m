<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\Wtf\__type_AdminBar;
	USE tri4m\Wp\Wtf\AdminBar\__type_Meta;
	USE tri4m\Wp\Wtf\AdminBar\Child;
	USE ILLI\Core\Util\Inflector;
	USE WP_Admin_Bar;
	
	CLASS AdminBar EXTENDS \tri4m\Wp\Wtf
	{	
		protected $__actions	=
		[
			__const_Action::ADMIN_BAR_MENU => NULL
		];
		
		function __construct(__type_AdminBar $__Setup)
		{
			static $__STATIC_fnC;
			
			isset($__STATIC_fnC) ?: $__STATIC_fnC = function(__type_AdminBar $__Setup, WP_Admin_Bar $__AdminBar)
			{
				$config = [];
				
				foreach([
					__type_AdminBar::parentId	=> 'parent',
					__type_AdminBar::title		=> 'title',
					__type_AdminBar::id		=> 'id',
					__type_AdminBar::href		=> 'href'
				] as $i => $k)
					$config[$k] = $__Setup->get()->toArray()[$i];
				
				if($__Setup->child instanceOf Child)
					foreach($__Setup->child->get() as $i => $Child)
						$Child->__Setup->parentId = $__Setup->id;
				
				if($__Setup->meta instanceOf __type_Meta)
					foreach([
						__type_Meta::html		=> 'html',
						__type_Meta::cssClass		=> 'class',
						__type_Meta::onClick		=> 'onclick',
						__type_Meta::target		=> 'target',
						__type_Meta::title		=> 'title'
					] as $i => $k)
						$config['meta'][$k] = $__Setup->meta->get()->toArray()[$i];
				
				$__AdminBar->add_menu($config);
			};
			
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Inflector::underscore($this->__Setup->id);
			
			$this->__actions[__const_Action::ADMIN_BAR_MENU] = new __type_Action([
				__type_Action::argsNum	=> 1,
				__type_Action::priority	=> 500,
				__type_Action::fn	=> function(WP_Admin_Bar $__AdminBar) use (&$__STATIC_fnC)
				{
					$__STATIC_fnC($this->__Setup, $__AdminBar);
				}
			]);
		}
		
		function install()
		{
			if(($Sub = parent::install()->__Setup->child) instanceOf Child)
				foreach($Sub->get() as $S)
					$S->install();
			
			return $this;
		}
	}