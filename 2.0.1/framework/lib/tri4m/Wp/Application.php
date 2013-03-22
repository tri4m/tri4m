<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Log;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Wtf\Sidebar;
	USE tri4m\Wp\Wtf\Adminbar;
	
	CLASS Application
	{
		function boot()
		{
			Log::add(__METHOD__);
			
			Hook::call('addThemeSupport', ['post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'video', 'chat']]);
			Hook::call('addThemeSupport', ['post-thumbnails']);
			Hook::call('addThemeSupport', ['automatic-feed-links']);
			Hook::call('setPostThumbnailSize', [720, 240, true]);
			Hook::call('addEditorStyle');
				
			(new Adminbar(['title' => Theme::fullName()]))
				->add(['title' => 'foo'])
				->install();
				
			(new Adminbar(['title' => Theme::name()]))
				->add(['title' => 'foo'])
				->add(new Adminbar(['title' => 'baz']))
				->install();
			
			(new Sidebar(['name' => 'Left']))
				->install();
			(new Sidebar(['name' => 'Right']))
				->install();
			(new Sidebar(['name' => '2nd Right']))
				->install();
			(new Sidebar(['name' => 'Footer']))
				->install();
		}
		
		function run()
		{
			Log::add(__METHOD__);
			Hook::dequeue();
		}
		
		function shutdown()
		{
			Log::add(__METHOD__);
		}
		
		function install()
		{
			Log::add(__METHOD__);
		}
		
		function uninstall()
		{
			Log::add(__METHOD__);
		}
	}