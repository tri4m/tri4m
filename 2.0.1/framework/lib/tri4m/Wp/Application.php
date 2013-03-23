<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Trace;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Wtf\AdminBar;
	USE tri4m\Wp\Wtf\PostType;
	USE tri4m\Wp\Wtf\SideBar;
	
	CLASS Application
	{
		function boot()
		{
			Trace::add(__METHOD__);
				
			Hook::call('addThemeSupport', ['post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'video', 'chat']]);
			Hook::call('addThemeSupport', ['post-thumbnails']);
			Hook::call('addThemeSupport', ['automatic-feed-links']);
			Hook::call('setPostThumbnailSize', [720, 240, true]);
			Hook::call('addEditorStyle');
				
			//(new PostType('Member', []))->install();
			//(new AdminBar(['title' => Theme::fullName()]))->add(['title' => 'foo'])->install();
			//(new AdminBar(['title' => Theme::name()]))->add(['title' => 'foo'])->add(new AdminBar(['title' => 'baz']))->install();
			//(new SideBar(['name' => 'Left']))->install();
			//(new SideBar(['name' => 'Right']))->install();
			//(new SideBar(['name' => '2nd Right']))->install();
			(new SideBar(['name' => 'Footer']))->install();
		}
		
		function run()
		{
			Trace::add(__METHOD__);
			Hook::dequeue();
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