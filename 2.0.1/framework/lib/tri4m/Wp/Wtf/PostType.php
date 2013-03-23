<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE WP_Admin_Bar;
	
	CLASS PostType
	{
		CONST SUPPORT_TITLE			= 0b0000000000000001;
		CONST SUPPORT_EDITOR			= 0b0000000000000010;
		CONST SUPPORT_AUTHOR			= 0b0000000000000100;
		CONST SUPPORT_THUMBNAIL			= 0b0000000000001000;
		CONST SUPPORT_EXCERPT			= 0b0000000000010000;
		CONST SUPPORT_TRACKBACKS		= 0b0000000000100000;
		CONST SUPPORT_CUSTOM_FIELDS		= 0b0000000001000000;
		CONST SUPPORT_COMMENTS			= 0b0000000010000000;
		CONST SUPPORT_REVISIONS			= 0b0000000100000000;
		CONST SUPPORT_PAGE_ATTRIBUTES		= 0b0000001000000000;
		CONST SUPPORT_POST_FORMATS		= 0b0000010000000000;
		
		static protected $__supports =
		[
			self::SUPPORT_TITLE		=> 'title',
			self::SUPPORT_EDITOR		=> 'editor',
			self::SUPPORT_AUTHOR		=> 'author',
			self::SUPPORT_THUMBNAIL		=> 'thumbnail',
			self::SUPPORT_EXCERPT		=> 'excerpt',
			self::SUPPORT_TRACKBACKS	=> 'trackbacks',
			self::SUPPORT_CUSTOM_FIELDS	=> 'custom-fields',
			self::SUPPORT_COMMENTS		=> 'comments',
			self::SUPPORT_REVISIONS		=> 'revisions',
			self::SUPPORT_PAGE_ATTRIBUTES	=> 'page-attributes',
			self::SUPPORT_POST_FORMATS	=> 'post-formats',
		];
		
		static protected $__labels =
		[
			'name'				=> '{:plural}',
			'singular_name'			=> '{:singular}',
			'add_new'			=> 'Add New',
			'add_new_item'			=> 'Add New {:singular}',
			'edit_item'			=> 'Edit {:singular}',
			'new_item'			=> 'New {:singular}',
			'all_items'			=> 'All {:plural}',
			'view_item'			=> 'View {:singular}',
			'search_items'			=> 'Search {:plural}',
			'not_found'			=> 'No {:plural} found.',
			'not_found_in_trash'		=> 'No {:plural} found in the trash.',
			'parent_item_colon'		=> '',
			'menu_name'			=> '{:plural}',
		];
		
		static protected $__rewrite =
		[
			'slug'				=> '{:slug_singular}',
			'with_front'			=> FALSE,
			'feeds'				=> FALSE,
			'pages'				=> TRUE,
			'ep_mask'			=> 0
		];
		
		static protected $__defaults =
		[
			'labels'			=> [],
			'description'			=> 'Holds your {:plural} and {:singular} specific data.',
			'public'			=> TRUE,
			'exclude_from_search'		=> FALSE,
			'publicly_queryable'		=> TRUE,
			'show_ui'			=> TRUE,
			'show_in_nav_menus'		=> TRUE,
			'show_in_menu'			=> TRUE,
			'show_in_admin_bar'		=> TRUE,
			'menu_position'			=> 20,
			'menu_icon'			=> NULL,
			'capability_type'		=> 'page',
			'capabilities'			=> [],
			'map_meta_cap'			=> FALSE,
			'hierarchical'			=> FALSE,
			'supports'			=> 11,
			'register_meta_box_cb'		=> NULL,
			'taxonomies'			=> [],
			'has_archive'			=> TRUE,
			'permalink_epmask'		=> 0,
			'rewrite'			=> [],
			'query_var'			=> TRUE,
			'can_export'			=> TRUE,
			'_builtin'			=> FALSE,
			'_edit_link'			=> 'post.php?post=%d'
		];
		
		protected $__name =
		[
			'singular'			=> '',
			'plural'			=> '',
			'slug_singular'			=> '',
			'slug_plural'			=> '',
		];
		
		protected $__config	= [];
		
		function __construct($__name, array $__config)
		{
			$__config += static::$__defaults;
			
			if(is_array($__config['rewrite']))
				$__config['rewrite'] += static::$__rewrite;
				
			if(is_array($__config['labels']))
				$__config['labels'] += static::$__labels;
				
			if(is_integer($__config['supports']))
			{
				$_ = [];
				foreach(static::$__supports as $b => $c)
					if($b === ($__config['supports'] & $b))
						$_[] = $c;
				
				$__config['supports'] = $_;
			}
			
			if(is_string($__name))
			{
				$this->__name['singular'] = Inflector::singularize(Inflector::camelize($__name));
			}
			else
			{
				$this->__name = $__name + $this->__name;
			}
			
			$this->__name['plural']		= Inflector::pluralize($this->__name['singular']);
			$this->__name['slug_singular']	= Inflector::underscore($this->__name['singular']);
			$this->__name['slug_plural']	= Inflector::underscore($this->__name['plural']);
			
			$this->__config = &$__config;
			
			foreach($__config as &$_)
			{
				if(is_array($_))
					foreach($_ as &$v)
						if(is_string($v))
							$v = String::insert($v, $this->__name);
							
				if(is_string($_))
					$_ = String::insert($_, $this->__name);
			}
		}
		
		function tuple()
		{
			return $this->__config;
		}
		
		function install()
		{
			Hook::action(__const_Action::INIT, function()
			{
				try
				{
					Trace::add(4, __METHOD__.': {:setup}', ['setup' => $this->__config]);
					if(FALSE === Inv::postTypeExists($this->__name['slug_singular']))
						Inv::registerPostType($this->__name['slug_plural'], $this->tuple());
				}
				catch(\Exception $E)
				{
					print $E->toTrack()->asText();
				}
			}, 5);
		}
	}