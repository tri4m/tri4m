<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE tri4m\Wp\Theme;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	
	CLASS SideBar EXTENDS \tri4m\Wp\Wtf
	{
		static protected $__defaults =
		[
			'name'		=> '{:name}',
			'id'		=> '{:slug}_sidebar_{:id}',
			'description'	=> '',
			'class'		=> '{:slug}-sidebar {:class}',
			'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</li>',
			'before_title'	=> '<h2 class="widgettitle">',
			'after_title'	=> '</h2>'
		];
		
		protected $__actions	=
		[
			__const_Action::WIDGETS_INIT => NULL
		];
		
		function __construct(array $__config)
		{
			$p = $__config +
			[
				'id'		=> $__config['name'],
				'slug'		=> Theme::slug(),
				'class'		=> NULL
			];
			
			$p['id'] = Inflector::underscore(Inflector::camelize($p['id']));
			
			foreach(static::$__defaults as $k => $v)
				$__config[$k] = String::insert($v, $p);
			
			$this->__config = $__config;
			
			$this->__actions[__const_Action::WIDGETS_INIT] = new __type_Action([
				__type_Action::argsNum	=> 1,
				__type_Action::priority	=> 20,
				__type_Action::fn	=> function()
				{
					Inv::registerSidebar($this->__config);
				}
			]);
		}
	}