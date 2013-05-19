<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Wtf\__type_Taxonomy;
	USE tri4m\Wp\Wtf\Taxonomy\__type_Args;
	USE tri4m\Wp\Wtf\Taxonomy\__type_Labels;
	USE tri4m\Wp\Wtf\Taxonomy\__type_Rewrite;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE WP_Admin_Bar;
	
	CLASS Taxonomy EXTENDS \tri4m\Wp\Wtf
	{
		protected $__actions	=
		[
			__const_Action::INIT => NULL
		];
		
		function __construct(__type_Taxonomy $__Setup)
		{
			$this->__Setup				= $__Setup;
			$this->__Setup->name->slugSingular	= Inflector::underscore($this->__Setup->name->slugSingular);
			$this->__Setup->name->slugPlural	= Inflector::underscore($this->__Setup->name->slugPlural);
			
			$__name = [];
			foreach([
				__type_Name::singular		=> 'singular',
				__type_Name::plural		=> 'plural',
				__type_Name::slugSingular	=> 'slug_singular',
				__type_Name::slugPlural		=> 'slug_plural'
			] as $i => $k)
				$__name[$k] = $this->__Setup->name->get()->toArray()[$i];
			
			$this->__actions[__const_Action::INIT] = new __type_Action([
				__type_Action::fn => function() use (&$__name)
				{
					if(FALSE !== Inv::isTaxonomy($this->__Setup->name->slugSingular))
						return;
						
					$config = [];
						
					foreach([
						__type_Args::isPublic			=> 'public',
						__type_Args::showUi			=> 'show_ui',
						__type_Args::showInNavMenus		=> 'show_in_nav_menus',
						__type_Args::showTagCloud		=> 'show_tag_cloud',
						__type_Args::showAdminColumn		=> 'show_admin_column',
						__type_Args::hierarchical		=> 'hierarchical',
						__type_Args::hierarchical		=> 'hierarchical',
						__type_Args::updateCountCallback	=> 'update_count_callback',
						__type_Args::queryVar			=> 'query_var',
						__type_Args::sort			=> 'sort',
						__type_Args::builtin			=> '_builtin',
					] as $i => $k)
						$config[$k] = $this->__Setup->args->get()->toArray()[$i];
					
					foreach([
						__type_Labels::plural			=> 'name',
						__type_Labels::singular			=> 'singular_name',
						__type_Labels::addNewItem		=> 'add_new_item',
						__type_Labels::addOrRemoveItems		=> 'add_or_remove_item',
						__type_Labels::newItemName		=> 'new_item_name',
						__type_Labels::editItem			=> 'edit_item',
						__type_Labels::allItems			=> 'all_items',
						__type_Labels::viewItem			=> 'view_item',
						__type_Labels::updateItem		=> 'update_item',
						__type_Labels::searchItems		=> 'search_items',
						__type_Labels::popularItems		=> 'popular_items',
						__type_Labels::separateItems		=> 'separate_items_with_commas',
						__type_Labels::chooseFromMostUsed	=> 'choose_from_most_used',
						__type_Labels::notFound			=> 'not_found',
						__type_Labels::parentItem		=> 'parent_item',
						__type_Labels::parentItemColon		=> 'parent_item_colon',
						__type_Labels::menuName			=> 'menu_name'
					] as $i => $k)
						$config['labels'][$k] = $this->__Setup->args->labels->get()->toArray()[$i];
						
					foreach([
						__type_Rewrite::slug			=> 'slug',
						__type_Rewrite::withFront		=> 'with_front',
						__type_Rewrite::hierarchical		=> 'hierarchical',
						__type_Rewrite::epMask			=> 'ep_mask'
					] as $i => $k)
						$config['rewrite'][$k] = $this->__Setup->args->rewrite->get()->toArray()[$i];
					
					foreach($config as &$_)
					{
						if(is_array($_))
							foreach($_ as &$v)
								if(is_string($v))
									$v = String::insert($v, $__name);
									
						if(is_string($_))
							$_ = String::insert($_, $__name);
					}
					
					Inv::registerTaxonomy($this->__Setup->name->slugPlural, $this->__Setup->type, $config);
				}
			]);
		}
	}