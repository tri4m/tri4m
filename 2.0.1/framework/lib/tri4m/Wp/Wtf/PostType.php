<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Wtf\__type_Name;
	USE tri4m\Wp\Wtf\__type_PostType;
	USE tri4m\Wp\Wtf\PostType\__flag_Support;
	USE tri4m\Wp\Wtf\PostType\__type_Env;
	USE tri4m\Wp\Wtf\PostType\__type_Labels;
	USE tri4m\Wp\Wtf\PostType\__type_Rewrite;
	USE tri4m\Wp\Wtf\PostType\__type_UpdateMsg;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE WP_Screen;
	
	/**
	 * @todo
	 * 	'capability_type'		=> 'post',
	 * 	'capabilities'			=>
	 * 	[
	 * 		'delete_post'			=> 'delete_{:slug_singular}',
	 * 		'delete_posts'			=> 'delete_{:slug_plural}',
	 * 		'delete_private_posts'		=> 'delete_private_{:slug_plural}',
	 * 		'delete_published_posts'	=> 'delete_published_{:slug_plural}',
	 * 		'delete_others_posts'		=> 'delete_others_{:slug_plural}',
	 * 		'edit_post'			=> 'edit_{:slug_singular}',
	 * 		'edit_posts'			=> 'edit_{:slug_plural}',
	 * 		'edit_others_posts'		=> 'edit_others_{:slug_plural}',
	 * 		'edit_private_posts'		=> 'edit_private_{:slug_plural}',
	 * 		'edit_published_posts'		=> 'edit_published_{:slug_plural}',
	 * 		'publish_posts'			=> 'publish_{:slug_plural}',
	 * 		'read_post'			=> 'read_{:slug_singular}',
	 * 		'read_private_posts'		=> 'read_private_{:slug_plural}'
	 * 	],
	 * 	'map_meta_cap'			=> FALSE,
	*/
	CLASS PostType EXTENDS \tri4m\Wp\Wtf
	{
		protected $__actions	=
		[
			__const_Action::INIT		=> NULL
		];
		
		protected $__filters	=
		[
			__const_Filter::POST_UPDATED_MESSAGES	=> NULL,
		];
		
		private static $__supportMap =
		[
			__flag_Support::TITLE		=> 'title',
			__flag_Support::EDITOR		=> 'editor',
			__flag_Support::AUTHOR		=> 'author',
			__flag_Support::THUMBNAIL	=> 'thumbnail',
			__flag_Support::EXCERPT		=> 'excerpt',
			__flag_Support::TRACKBACKS	=> 'trackbacks',
			__flag_Support::CUSTOM_FIELDS	=> 'custom-fields',
			__flag_Support::COMMENTS	=> 'comments',
			__flag_Support::REVISIONS	=> 'revisions',
			__flag_Support::PAGE_ATTRIBUTES	=> 'page-attributes',
			__flag_Support::POST_FORMATS	=> 'post-formats',
		];
		
		function __construct(__type_PostType $__Setup)
		{
			static $__STATIC_fnC, $__STATIC_fnM;
			
			isset($__STATIC_fnC) ?: $__STATIC_fnC = function(__type_PostType $__Setup, $__name)
			{
				if(FALSE !== Inv::postTypeExists($__Setup->name->slugSingular))
					return;
				
				$config = [];
				
				foreach([
					__type_Env::desc		=> 'description',
					__type_Env::isPublic		=> 'public',
					__type_Env::excludeFromSearch	=> 'exclude_from_search',
					__type_Env::publiclyQueryable	=> 'publicly_queryable',
					__type_Env::showUi		=> 'show_ui',
					__type_Env::showInNavMenu	=> 'show_in_nav_menu',
					__type_Env::showInMenu		=> 'show_in_menu',
					__type_Env::showInAdminBar	=> 'show_in_admin_bar',
					__type_Env::menuPosition	=> 'menu_position',
					__type_Env::menuIcon		=> 'menu_icon',
					__type_Env::hierarchical	=> 'hierarchical',
					__type_Env::supports		=> 'supports',
					__type_Env::metaBoxFn		=> 'register_meta_box_cb',
					__type_Env::taxonomies		=> 'taxonomies',
					__type_Env::hasArchive		=> 'has_archive',
					__type_Env::permalinkEpMask	=> 'permalink_ep_mask',
					__type_Env::queryVar		=> 'query_var',
					__type_Env::canExport		=> 'can_export',
					__type_Env::builtin		=> '_builtin',
					__type_Env::editLink		=> '_edit_link'
				] as $i => $k)
					$config[$k] = $__Setup->env->get()->toArray()[$i];
				
				$config[is_string($c = $__Setup->env->get()->toArray()[__type_Env::capability]) ? 'capability_type' : 'capabilities'] = $c;
				
				foreach([
					__type_Labels::plural		=> 'name',
					__type_Labels::singular		=> 'singular_name',
					__type_Labels::addNew		=> 'add_new',
					__type_Labels::addNewItem	=> 'add_new_item',
					__type_Labels::editItem		=> 'edit_item',
					__type_Labels::newItem		=> 'new_item',
					__type_Labels::allItems		=> 'all_items',
					__type_Labels::viewItem		=> 'view_item',
					__type_Labels::searchItems	=> 'search_items',
					__type_Labels::notFound		=> 'not_found',
					__type_Labels::notFoundInTrash	=> 'not_found_in_trash',
					__type_Labels::parentItemColon	=> 'parent_item_colon',
					__type_Labels::menuName		=> 'menu_name'
				] as $i => $k)
					$config['labels'][$k] = $__Setup->env->labels->get()->toArray()[$i];
					
				foreach([
					__type_Rewrite::slug		=> 'slug',
					__type_Rewrite::withFront	=> 'with_front',
					__type_Rewrite::feeds		=> 'feeds',
					__type_Rewrite::pages		=> 'pages',
					__type_Rewrite::epMask		=> 'ep_mask'
				] as $i => $k)
					$config['rewrite'][$k] = $__Setup->env->rewrite->get()->toArray()[$i];
				
				foreach($config as &$_)
				{
					if(is_array($_))
						foreach($_ as &$v)
							if(is_string($v))
								$v = String::insert($v, $__name);
								
					if(is_string($_))
						$_ = String::insert($_, $__name);
				}
				
				Inv::registerPostType($__Setup->name->slugSingular, $config);
			};
			
			isset($__STATIC_fnM) ?: $__STATIC_fnM = function(__type_PostType $__Setup, $__name)
			{
				$post	= Inv::glob('post');
				$id	= Inv::glob('post_ID');
				$x	= 0;
				$h	= &$__messages[$__Setup->name->slugSingular];
				$p	= $__name +
				[
					'permalink'	=> Inv::escUrl(Inv::getPermalink($id)),
					'revision'	=> isset($_GET['revision']) ? Inv::wpPostRevisionTitle(intval($_GET['revision']), FALSE) : NULL,
					'preview'	=> Inv::escUrl(Inv::addQueryArg('preview', 'true', Inv::getPermalink($id))),
					'date'		=> Inv::dateI18n('M j, Y @ G:i', strtotime($post->post_date))
				];
				
				foreach([
					__type_UpdateMsg::updatedPreview	=> 'updated_preview',
					__type_UpdateMsg::customFieldUpdated	=> 'custom_field_updated',
					__type_UpdateMsg::customFieldDeleted	=> 'custom_field_deleted',
					__type_UpdateMsg::updated		=> 'updated',
					__type_UpdateMsg::restored		=> 'restored',
					__type_UpdateMsg::published		=> 'published',
					__type_UpdateMsg::saved			=> 'saved',
					__type_UpdateMsg::submitted		=> 'submitted',
					__type_UpdateMsg::sheduled		=> 'sheduled',
					__type_UpdateMsg::draftUpdated		=> 'draft_updated'
				] as $i => $k)
					$h[++$x] = String::insert($__Setup->updateMsg->get()->toArray()[$i], $p);
				
				return $__messages;
			};
			
			$this->__Setup				= $__Setup;
			$this->__Setup->name->slugSingular	= Inflector::underscore($this->__Setup->name->slugSingular);
			$this->__Setup->name->slugPlural	= Inflector::underscore($this->__Setup->name->slugPlural);
			
			if(is_integer($this->__Setup->env->supports))
			{
				$_ = [];
				foreach(static::$__supportMap as $b => $c)
					if($b === ($this->__Setup->env->supports & $b))
						$_[] = $c;
				
				$this->__Setup->env->supports = $_;
			}
			
			$__name = [];
			foreach([
				__type_Name::singular		=> 'singular',
				__type_Name::plural		=> 'plural',
				__type_Name::slugSingular	=> 'slug_singular',
				__type_Name::slugPlural		=> 'slug_plural'
			] as $i => $k)
				$__name[$k] = $this->__Setup->name->get()->toArray()[$i];
			
			$this->__actions[__const_Action::INIT] = new __type_Action([
				__type_Action::fn => function() use (&$__STATIC_fnC, &$__name)
				{
					$__STATIC_fnC($this->__Setup, $__name);
				}
			]);
			
			$this->__filters[__const_Filter::POST_UPDATED_MESSAGES] = new __type_Filter([
				__type_Filter::argsNum	=> 1,
				__type_Filter::fn	=> function($__messages) use (&$__STATIC_fnM, &$__name)
				{
					return $__STATIC_fnM($this->__Setup, $__name, $__messages);
				}
			]);
		}
	}