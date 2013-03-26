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
		
		static protected $__ietf =
		[
			'en' =>
			[
				'US' =>
				[
					'description'				=> 'Holds your {:plural} and {:singular} specific data.',
					'labels' =>
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
					],
					'update' =>
					[
						'updated_preview'		=> '{:singular} updated. <a href="{:permalink}">View {:singular}</a>',
						'custom_field_updated'		=> 'Custom field updated.',
						'custom_field_deleted'		=> 'Custom field deleted.',
						'updated'			=> '{:singular} updated.',
						'restored'			=> '{:singular} restored to revision from {:revision}.',
						'published'			=> '{:singular} published. <a href="{:permalink}">View {:singular}</a>',
						'saved'				=> '{:singular} saved.',
						'submitted'			=> '{:singular} submitted. <a href="{:preview}" target="_blank">Preview {:singular}</a>',
						'sheduled'			=> '{:singular} sheduled for: <strong>{:date}</strong>. <a href="{:permalink}" target="_blank">Preview {:singular}</a>',
						'draft_updated'			=> '{:singular} draft updated. <a href="{:preview}" target="_blank">Preview {:singular}</a>',
					],
					'context' =>
					[
					]
				]
			]
		]
		
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
		
		static protected $__messages =
		[
			'updated_preview'		=> '{:singular} updated. <a href="{:permalink}">View {:singular}</a>',
			'custom_field_updated'		=> 'Custom field updated.',
			'custom_field_deleted'		=> 'Custom field deleted.',
			'updated'			=> '{:singular} updated.',
			'restored'			=> '{:singular} restored to revision from {:revision}.',
			'published'			=> '{:singular} published. <a href="{:permalink}">View {:singular}</a>',
			'saved'				=> '{:singular} saved.',
			'submitted'			=> '{:singular} submitted. <a href="{:preview}" target="_blank">Preview {:singular}</a>',
			'sheduled'			=> '{:singular} sheduled for: <strong>{:date}</strong>. <a href="{:permalink}" target="_blank">Preview {:singular}</a>',
			'draft_updated'			=> '{:singular} draft updated. <a href="{:preview}" target="_blank">Preview {:singular}</a>',
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
			/*
			'capability_type'		=> 'post',
			'capabilities'			=>
			[
				'delete_post'			=> 'delete_{:slug_singular}',
				'delete_posts'			=> 'delete_{:slug_plural}',
				'delete_private_posts'		=> 'delete_private_{:slug_plural}',
				'delete_published_posts'	=> 'delete_published_{:slug_plural}',
				'delete_others_posts'		=> 'delete_others_{:slug_plural}',
				'edit_post'			=> 'edit_{:slug_singular}',
				'edit_posts'			=> 'edit_{:slug_plural}',
				'edit_others_posts'		=> 'edit_others_{:slug_plural}',
				'edit_private_posts'		=> 'edit_private_{:slug_plural}',
				'edit_published_posts'		=> 'edit_published_{:slug_plural}',
				'publish_posts'			=> 'publish_{:slug_plural}',
				'read_post'			=> 'read_{:slug_singular}',
				'read_private_posts'		=> 'read_private_{:slug_plural}'
			],
			'map_meta_cap'			=> FALSE,
			*/
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
		
		
		protected $__update	= NULL;
		protected $__help	= NULL;
		
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
				if(FALSE === isset($__name['singular']))
					return;
					
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
			
			$messages = static::$__messages;
			
			$this->__update = function($__messages) use (&$messages)
			{
				$post	= Inv::glob('post');
				$id	= Inv::glob('post_ID');
				$i	= 0;
				$h	= &$__messages[$this->__name['slug_plural']];
				$p	= $this->__name +
				[
					'permalink'	=> Inv::escUrl(Inv::getPermalink($id)),
					'revision'	=> isset($_GET['revision']) ? Inv::wpPostRevisionTitle(intval($_GET['revision']), FALSE) : NULL,
					'preview'	=> Inv::escUrl(Inv::addQueryArg('preview', 'true', Inv::getPermalink($id))),
					'date'		=> Inv::dateI18n('M j, Y @ G:i', strtotime($post->post_date))
				];
				
				foreach([
					'updated_preview', 'custom_field_updated', 'custom_field_deleted',
					'updated', 'restored', 'published', 'saved', 'submitted', 'sheduled', 'draft_updated'
				] as $k)
					$h[++$i] = String::insert($messages[$k], $p);
				
				return $__messages;
			};
		}
		
		function tuple()
		{
			return $this->__config;
		}
		
		function install()
		{
			add_filter( 'post_updated_messages', $this->__update );
			Hook::action(__const_Action::INIT, function()
			{
				try
				{
					Trace::add(4, __METHOD__.': {:setup}', ['setup' => $this->__config]);
					if(FALSE === Inv::postTypeExists($this->__name['slug_plural']))
						Inv::registerPostType($this->__name['slug_plural'], $this->tuple());
				}
				catch(\Exception $E)
				{
					print $E->toTrack()->asText();
				}
			}, 5);
		}
	}