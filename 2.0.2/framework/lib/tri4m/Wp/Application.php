<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Trace;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Module;
	USE ILLI\Core\Std\Spl\FsbCollection;
	USE tri4m\Wp\__const_Action;
	USE ILLI\Core\Std\Exec\__type_Action;
	USE ILLI\Core\Std\Exec\__type_Call;
	
	
	USE tri4m\Wp\Module\__type_AdminBar;
	
	CLASS Application
	{
		function boot()
		{
			Trace::add(__METHOD__);
			
			Module::adminBar(new __type_AdminBar([
				__type_AdminBar::text	=> 'badcdcz',
				__type_AdminBar::id	=> 'bdcdcdcay',
				__type_AdminBar::href	=> '#'
			]))	
			->addChild(new __type_AdminBar([
				__type_AdminBar::text	=> 'foadcadcadco'
			]))
			->install();
			
			
			
			Hook::enqueue(new __type_Call([
				__type_Call::handle	=> ['tri4m\Wp\Inv', 'addEditorStyle']
			]));
			
			Hook::enqueue(new __type_Call([
				__type_Call::handle	=> ['tri4m\Wp\Inv', 'addThemeSupport'],
				__type_Call::arguments	=> ['post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'video', 'chat']]
			]));
			
			Hook::enqueue(new __type_Call([
				__type_Call::handle	=> ['tri4m\Wp\Inv', 'addThemeSupport'],
				__type_Call::arguments	=> ['automatic-feed-links']
			]));
			
			Hook::enqueue(new __type_Call([
				__type_Call::handle	=> ['tri4m\Wp\Inv', 'addThemeSupport'],
				__type_Call::arguments	=> ['post-thumbnails']
			]));
			
			Hook::enqueue(new __type_Call([
				__type_Call::handle	=> ['tri4m\Wp\Inv', 'setPostThumbnailSize'],
				__type_Call::arguments	=> [720, 300, TRUE]
			]));
			
			Hook::enqueue(new __type_Call([
				__type_Call::handle	=> ['tri4m\Wp\Inv', 'addImageSize'],
				__type_Call::arguments	=> ['edit-screen-thumbnail', 100, 100, TRUE]
			]));
		}
		
		function run()
		{
			Trace::add(__METHOD__);
		}
		
		function shutdown()
		{
			Trace::add(__METHOD__);
		}
		
		function install()
		{
			Trace::add(__METHOD__);
		}
		
		function uninstall()
		{
			Trace::add(__METHOD__);
		}
	}