<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__type_Call;
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
			
			Hook::call(new __type_Call([
				__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
				__type_Call::arguments	=> ['post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'video', 'chat']]
			]));
			
			Hook::call(new __type_Call([
				__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
				__type_Call::arguments	=> ['post-thumbnails']
			]));
			
			Hook::call(new __type_Call([
				__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
				__type_Call::arguments	=> ['automatic-feed-links']
			]));
			
			Hook::call(new __type_Call([
				__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
				__type_Call::arguments	=> [720, 240, true]
			]));
			
			Hook::call(new __type_Call([
				__type_Call::fn		=> ['tri4m\Wp\Inv', 'addEditorStyle']
			]));
				
			(new PostType('Member', []))->install();
			(new AdminBar(['title' => Theme::fullName()]))->add(['title' => 'foo'])->install();
			(new AdminBar(['title' => Theme::name()]))->add(['title' => 'foo'])->add(new AdminBar(['title' => 'baz']))->install();
			(new SideBar(['name' => 'Left']))->install();
			(new SideBar(['name' => 'Right']))->install();
			(new SideBar(['name' => '2nd Right']))->install();
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