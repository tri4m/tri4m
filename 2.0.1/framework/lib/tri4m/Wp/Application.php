<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\Trace;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Wtf\AdminBar;
	USE tri4m\Wp\Wtf\PostType;
	USE tri4m\Wp\Wtf\__type_Name;
	USE tri4m\Wp\Wtf\__type_Posttype;
	USE tri4m\Wp\Wtf\PostType\__flag_Support;
	USE tri4m\Wp\Wtf\PostType\__type_Env;
	USE tri4m\Wp\Wtf\ContextualHelp;
	USE tri4m\Wp\Wtf\__type_ContextualHelp;
	USE tri4m\Wp\Wtf\ContextualHelp\Tabs;
	USE tri4m\Wp\Wtf\ContextualHelp\__type_Tab;
	USE tri4m\Wp\Wtf\SideBar;
	USE tri4m\Wp\Wtf\ThemeOptionsPage;
	
	CLASS Application
	{
		function boot()
		{
			Trace::add(__METHOD__);
			
			#:config:
			
				Hook::enqueue(new __type_Call([
					__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
					__type_Call::arguments	=> ['post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'video', 'chat']]
				]));
				
				Hook::enqueue(new __type_Call([
					__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
					__type_Call::arguments	=> ['post-thumbnails']
				]));
				
				Hook::enqueue(new __type_Call([
					__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
					__type_Call::arguments	=> ['automatic-feed-links']
				]));
				
				Hook::enqueue(new __type_Call([
					__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
					__type_Call::arguments	=> [720, 240, true]
				]));
				
				Hook::enqueue(new __type_Call([
					__type_Call::fn		=> ['tri4m\Wp\Inv', 'addEditorStyle']
				]));
			
			#::
			
			#:members:
				
				(new PostType(new __type_Posttype([
					__type_Posttype::name => new __type_Name([
						__type_Name::singular 		=> 'Member',
						__type_Name::plural		=> 'Members',
						__type_Name::slugSingular	=> 'member',
						__type_Name::slugPlural		=> 'members'
					])
				])))->install();
				
				(new ContextualHelp(new __type_ContextualHelp([
					__type_ContextualHelp::name		=> new __type_Name([
						__type_Name::singular 		=> 'Member',
						__type_Name::plural		=> 'Members',
						__type_Name::slugSingular	=> 'member',
						__type_Name::slugPlural		=> 'members'
					]),
					__type_ContextualHelp::id		=> 'edit-member',
					__type_ContextualHelp::content		=>
					[
						'<h2>Edit Member</h2>',
						'<p>This page allows you to view/modify {:singular} details. Please make sure to fill out the available boxes with the appropriate details and <strong>not</strong> add these details to the {:singular} description.</p>'
					]
					])
				))->install();
				
				(new ContextualHelp(new __type_ContextualHelp([
					__type_ContextualHelp::name		=> new __type_Name([
						__type_Name::singular 		=> 'Member',
						__type_Name::plural		=> 'Members',
						__type_Name::slugSingular	=> 'member',
						__type_Name::slugPlural		=> 'members'
					]),
					__type_ContextualHelp::id		=> 'member',
					__type_ContextualHelp::content		=> new Tabs([
						new __type_Tab([
							__type_Tab::id		=> 'welcome',
							__type_Tab::label	=> '{:plural}',
							__type_Tab::content	=>
							[
								'<h2>{:plural}</h2>',
								'<p>{:plural} show the details of the items that we sell on the website. You can see a list of them on this page in reverse chronological order - the latest one we added is first.</p>',
								'<p>You can view/edit the details of each {:singular} by clicking on its name, or you can perform bulk actions using the dropdown menu and selecting multiple items.</p>'
							]
						]),
						new __type_Tab([
							__type_Tab::id		=> 'test',
							__type_Tab::label	=> 'Test',
							__type_Tab::content	=>
							[
								'<h2>Testertesting</h2>',
								'<p>This page allows you to view/modify {:singular} details. Please make sure to fill out the available boxes with the appropriate details and <strong>not</strong> add these details to the {:singular} description.</p>'
							],
						]),
					])
				])))->install();
			
			#::
			
			#:skills:
			
				(new PostType(new __type_Posttype([
					__type_Posttype::name => new __type_Name([
						__type_Name::singular 		=> 'Skill',
						__type_Name::plural		=> 'Skills',
						__type_Name::slugSingular	=> 'skill',
						__type_Name::slugPlural		=> 'skills'
					]),
					__type_Posttype::env => new __type_Env([
						__type_Env::supports 		=> 11 + __flag_Support::PAGE_ATTRIBUTES | __flag_Support::POST_FORMATS,
						__type_Env::hierarchical	=> TRUE
					]),
				])))->install();
			
			#::
			
			#:todo:
				(new AdminBar(['title' => Theme::fullName()]))
					->add(['title' => 'foo'])
					->install();
					
				(new AdminBar(['title' => Theme::name()]))
					->add(new ThemeOptionsPage(['title' => 'my fun options', 'id' => 'myFunOptions']))
					->add(new AdminBar(['title' => 'baz']))
					->install();
				
				(new SideBar(['name' => 'Left']))
					->install();
					
				(new SideBar(['name' => 'Right']))
					->install();
					
				(new SideBar(['name' => '2nd Right']))
					->install();
					
				(new SideBar(['name' => 'Footer']))
					->install();
			#::
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