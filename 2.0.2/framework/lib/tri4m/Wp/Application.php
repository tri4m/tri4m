<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Module\ContextualHelp\__type_Tab;
	USE tri4m\Wp\Module\__type_AdminBar;
	USE tri4m\Wp\Module\__type_ContextualHelp;
	USE tri4m\Wp\Module\__type_ManageColumns;
	USE tri4m\Wp\Module\__type_Name;
	USE tri4m\Wp\Module\__type_SideBar;
	USE tri4m\Wp\Module\__type_SubMenuPage;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Theme;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Module;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Std\Exec\__type_Action;
	USE ILLI\Core\Std\Exec\__type_Call;
	USE ILLI\Core\Std\Exec\__type_Filter;
	USE ILLI\Core\Util\String;
	USE WP_Post;
	
	CLASS Application
	{
		function boot()
		{
			Hook::enqueue(new __type_Call([__type_Call::handle => ['tri4m\Wp\Inv', 'addEditorStyle']]));
			Hook::enqueue(new __type_Call([__type_Call::handle => ['tri4m\Wp\Inv', 'addThemeSupport'], __type_Call::arguments => ['post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'video', 'chat']]]));
			Hook::enqueue(new __type_Call([__type_Call::handle => ['tri4m\Wp\Inv', 'addThemeSupport'], __type_Call::arguments => ['automatic-feed-links']]));
			Hook::enqueue(new __type_Call([__type_Call::handle => ['tri4m\Wp\Inv', 'addThemeSupport'], __type_Call::arguments => ['post-thumbnails']]));
			Hook::enqueue(new __type_Call([__type_Call::handle => ['tri4m\Wp\Inv', 'setPostThumbnailSize'], __type_Call::arguments => [720, 300, TRUE]]));
			Hook::enqueue(new __type_Call([__type_Call::handle => ['tri4m\Wp\Inv', 'addImageSize'], __type_Call::arguments => ['edit-screen-thumbnail', 100, 100, TRUE]]));
			
			Module::create(new __type_SubMenuPage([
				__type_SubMenuPage::id		=> 'bob',
				__type_SubMenuPage::title	=> 'bob Options',
				__type_SubMenuPage::menuTitle	=> 'bob',
				__type_SubMenuPage::content	=> new __type_Call([
					__type_Call::handle => function()
					{
						print 'hello';
					}
				])
			]))->install();
			
			Module::create(new __type_ManageColumns([
				__type_ManageColumns::filterEvent	=> String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => 'post']),
				__type_ManageColumns::filter => new __type_Call([
					__type_Call::handle => function($__columns)
					{
						unset($__columns['tags']);
						return $__columns;
					}
				])
			]))->install();
			
			Module::create(new __type_ManageColumns([
				__type_ManageColumns::id		=> 'featured_image',
				__type_ManageColumns::title		=> 'Featured Image',
				__type_ManageColumns::index		=> 0,
				__type_ManageColumns::filterEvent	=> String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => 'post']),
				__type_ManageColumns::actionEvent	=> String::insert(__const_Action::MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__, ['postType' => 'post']),
				__type_ManageColumns::action		=> new __type_Call([
					__type_Call::handle => function($__column, WP_Post $__WpPost)
					{
						print Inv::getThePostThumbnail($__WpPost->ID, 'edit-screen-thumbnail');
					}
				])
			]))->install();
			
			Module::create(new __type_ManageColumns([
				__type_ManageColumns::id		=> 'word_count',
				__type_ManageColumns::title		=> 'Word Count',
				__type_ManageColumns::index		=> 2,
				__type_ManageColumns::filterEvent	=> String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => 'post']),
				__type_ManageColumns::actionEvent	=> String::insert(__const_Action::MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__, ['postType' => 'post']),
				__type_ManageColumns::action		=> new __type_Call([
					__type_Call::handle => function($__column, WP_Post $__WpPost)
					{
						print Inv::strWordCount($__WpPost->post_content);
					}
				])
			]))->install();
			
			Module::create(new __type_SideBar([__type_Sidebar::name => 'Left', __type_Sidebar::id => '{:slug}_sidebar_left', __type_Sidebar::desc => 'The {:name} sidebar.']))->install();
			Module::create(new __type_SideBar([__type_Sidebar::name => 'Right', __type_Sidebar::id => '{:slug}_sidebar_right', __type_Sidebar::desc => 'The {:name} sidebar.']))->install();
			Module::create(new __type_SideBar([__type_Sidebar::name => '2nd Right', __type_Sidebar::id => '{:slug}_sidebar_right2nd', __type_Sidebar::desc => 'The {:name} sidebar.']))->install();
			Module::create(new __type_SideBar([__type_Sidebar::name => 'Footer', __type_Sidebar::id => '{:slug}_sidebar_footer', __type_Sidebar::desc => 'The {:name} sidebar.']))->install();
			
			Module::create(new __type_AdminBar([__type_AdminBar::text => 'badcdcz', __type_AdminBar::id => 'bdcdcdcay', __type_AdminBar::href => '#']))
				->addChild(new __type_AdminBar([__type_AdminBar::text => 'foadcadcadco']))
				->install();
			
			Module::create(new __type_ContextualHelp([
				__type_ContextualHelp::id	=> 'edit-post',
				__type_ContextualHelp::name	=> new __type_Name([
					__type_Name::slugSingular => 'options-general'
				])
			]))
			->addTab(new __type_Tab([
				__type_Tab::id => 'baz',
				__type_Tab::label => 'foo',
				__type_Tab::content => 'foo',
			]))
			->install();
		}
		
		function run()
		{
		}
		
		function shutdown()
		{
		}
		
		function install()
		{
		}
		
		function uninstall()
		{
		}
	}