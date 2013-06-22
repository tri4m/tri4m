<?PHP
	NAMESPACE tri4m\Wp;
	
	CLASS __const_AdminLink EXTENDS \ILLI\Core\Std\ConstantCollection
	{
		#:Comments:
			CONST COMMENTS			= 'edit-comments.php';
		#::
		#:Dashboard:
			CONST DASHBOARD			= 'index.php';
		#::
		#:Links:
			CONST LINKS			= 'link-manager.php';
		#::
		#:Media:
			CONST MEDIA			= 'upload.php';
		#::
		#:Pages:
			CONST PAGES			= 'edit.php?post_type=page';
		#::
		#:Plugins:
			CONST PLUGINS			= 'plugins.php';
			CONST PLUGIN_SETTINGS__		= 'options-general.php?page={:pluginName}';
		#::
		#:Posts:
			CONST POSTS			= 'edit.php';
			CONST POST_CATEGORIES		= 'edit-tags.php?taxonomy=category';
			CONST POST_TAGS			= 'edit-tags.php?taxonomy=post_tag';
		#::
		#:PostTypes:
			CONST POST_TYPE__		= 'edit.php?post_type={:postType}';
		#::
		#:Settings:
			CONST SETTINGS			= 'options-general.php';
		#::
		#:Taxonomies:
			CONST TAXONOMY_TAGS__		= 'edit-tags.php?taxonomy={:taxonomyName}&post_type={:postType}';
		#::
		#:Themes:
			CONST THEMES			= 'themes.php';
		#::
		#:Tools:
			CONST TOOLS			= 'tools.php';
		#::
		#:Users:
			CONST USERS			= 'users.php';
		#::
	}