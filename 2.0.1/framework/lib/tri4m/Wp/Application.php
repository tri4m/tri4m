<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\Trace;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Wtf\__type_Name;
	USE tri4m\Wp\Wtf\__type_AdminBar;
	USE tri4m\Wp\Wtf\__type_PostType;
	USE tri4m\Wp\Wtf\__type_ContextualHelp;
	USE tri4m\Wp\Wtf\__type_SideBar;
	USE tri4m\Wp\Wtf\__type_Taxonomy;
	USE tri4m\Wp\Wtf\AdminBar;
	USE tri4m\Wp\Wtf\AdminBar\__type_Meta;
	USE tri4m\Wp\Wtf\AdminBar\Sub;
	USE tri4m\Wp\Wtf\PostType;
	USE tri4m\Wp\Wtf\PostType\__flag_Support;
	USE tri4m\Wp\Wtf\PostType\__type_Env;
	USE tri4m\Wp\Wtf\ContextualHelp;
	USE tri4m\Wp\Wtf\ContextualHelp\__type_Tab;
	USE tri4m\Wp\Wtf\ContextualHelp\Tabs;
	USE tri4m\Wp\Wtf\SideBar;
	USE tri4m\Wp\Wtf\Taxonomy;
	USE tri4m\Wp\Wtf\Taxonomy\__type_Args;
	USE tri4m\Wp\Wtf\Taxonomy\__type_Rewrite;
	USE tri4m\Wp\Wtf\ManageColumns;
	USE tri4m\Wp\Wtf\__type_ManageColumns;
	USE tri4m\Wp\Wtf\ThemeOptionsPage;
	USE ILLI\Core\Util\String;
	USE WP_Post;
	
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
					__type_Call::fn		=> ['tri4m\Wp\Inv', 'addImageSize'],
					__type_Call::arguments	=> ['edit-screen-thumbnail', 100, 100, TRUE]
				]));
				
				Hook::enqueue(new __type_Call([
					__type_Call::fn		=> ['tri4m\Wp\Inv', 'addThemeSupport'],
					__type_Call::arguments	=> [720, 240, true]
				]));
				
				Hook::enqueue(new __type_Call([
					__type_Call::fn		=> ['tri4m\Wp\Inv', 'addEditorStyle']
				]));
			
			#::
			
			#:posttypes:
			
				#! capabilities not implemented
				
				#:events:
				
					$Event = new __type_PostType([
						__type_PostType::name => new __type_Name([
							__type_Name::singular 		=> 'Event',
							__type_Name::plural		=> 'Events',
							__type_Name::slugSingular	=> 'event',
							__type_Name::slugPlural		=> 'events'
						])
					]);
					
					$EventType = new __type_Taxonomy([
						__type_Taxonomy::type => $Event->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Type',
							__type_Name::plural		=> 'Types',
							__type_Name::slugSingular	=> 'event_type',
							__type_Name::slugPlural		=> 'event_types'
						])
					]);
					
					$Event->env->supports			= 11 + __flag_Support::POST_FORMATS;
					$Event->env->hierarchical		= TRUE;
					$Event->env->taxonomies			= [$EventType->name->slugSingular];
					$Event->env->rewrite->slug		= 'event';
					(new PostType($Event))->install();
					
					$EventType->args->rewrite->slug		= 'events/by-type';
					(new Taxonomy($EventType))->install();
				
				#::
				
				#:members:
				
					$Member = new __type_PostType([
						__type_PostType::name => new __type_Name([
							__type_Name::singular 		=> 'Member',
							__type_Name::plural		=> 'Members',
							__type_Name::slugSingular	=> 'member',
							__type_Name::slugPlural		=> 'members'
						])
					]);
					
					$MemberProfession = new __type_Taxonomy([
						__type_Taxonomy::type => $Member->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Profession',
							__type_Name::plural		=> 'Professions',
							__type_Name::slugSingular	=> 'profession',
							__type_Name::slugPlural		=> 'professions'
						])
					]);
					
					$MemberLevel = new __type_Taxonomy([
						__type_Taxonomy::type => $Member->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Level',
							__type_Name::plural		=> 'Levels',
							__type_Name::slugSingular	=> 'level',
							__type_Name::slugPlural		=> 'levels'
						])
					]);
					
					$Member->env->supports			= 11 + __flag_Support::POST_FORMATS;
					$Member->env->hierarchical		= FALSE;
					$Member->env->taxonomies		= [$MemberProfession->name->slugSingular, $MemberLevel->name->slugSingular];
					$Member->env->rewrite->slug		= 'member';
					(new PostType($Member))->install();
					
					$MemberProfession->args->rewrite->slug	= 'members/by-profession';
					(new Taxonomy($MemberProfession))->install();
					
					$MemberLevel->args->rewrite->slug	= 'members/by-level';
					(new Taxonomy($MemberLevel))->install();
					
					#:test:
					
						#+ contextual help from __type_Call
					
						(new ContextualHelp(new __type_ContextualHelp([
							__type_ContextualHelp::name	=> $Member->name,
							__type_ContextualHelp::id	=> 'edit-'.$Member->name->slugSingular,
							__type_ContextualHelp::content	=> new __type_Call([
								__type_Call::fn		=> function()
								{
									return [
										'<h2>Edit {:singular}</h2>',
										'<p>This page allows you to view/modify {:singular} details. Please make sure to fill out the available boxes with the appropriate details and <strong>not</strong> add these details to the {:singular} description.</p>'
									];
								}
							])
						])))->install();
						
						#+ contextual help tabs from __type_Call, SPL_ARRAY
						
						(new ContextualHelp(new __type_ContextualHelp([
							__type_ContextualHelp::name	=> $Member->name,
							__type_ContextualHelp::id	=> $Member->name->slugSingular,
							__type_ContextualHelp::content	=> new Tabs([
								new __type_Tab([
									__type_Tab::id		=> 'welcome',
									__type_Tab::label	=> 'edit {:plural}',
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
								new __type_Tab([
									__type_Tab::id		=> 'ctest',
									__type_Tab::label	=> 'Callable Test',
									__type_Tab::content	=> new __type_Call([
										__type_Call::fn	=> function()
										{
											return 'hello {:singular}';
										}
									])
								]),
							])
						])))->install();
						
					#::
				
				#::
				
				#:skills:
					
					$Skill = new __type_PostType([
						__type_PostType::name => new __type_Name([
							__type_Name::singular 		=> 'Skill',
							__type_Name::plural		=> 'Skills',
							__type_Name::slugSingular	=> 'skill',
							__type_Name::slugPlural		=> 'skills'
						])
					]);
					
					$SkillTechnology = new __type_Taxonomy([
						__type_Taxonomy::type => $Skill->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Technology',
							__type_Name::plural		=> 'Technologies',
							__type_Name::slugSingular	=> 'skill_technology',
							__type_Name::slugPlural		=> 'skill_technologies'
						])
					]);
					
					$SkillPlotKW = new __type_Taxonomy([
						__type_Taxonomy::type => $Skill->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Plot Keyword',
							__type_Name::plural		=> 'Plot Keywords',
							__type_Name::slugSingular	=> 'skill_plot_keyword',
							__type_Name::slugPlural		=> 'skill_plot_keywords'
						])
					]);
					
					$SkillType = new __type_Taxonomy([
						__type_Taxonomy::type => $Skill->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Type',
							__type_Name::plural		=> 'Types',
							__type_Name::slugSingular	=> 'skill_type',
							__type_Name::slugPlural		=> 'skill_types'
						])
					]);
					
					$SkillYear = new __type_Taxonomy([
						__type_Taxonomy::type => $Skill->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Year',
							__type_Name::plural		=> 'Years',
							__type_Name::slugSingular	=> 'skill_year',
							__type_Name::slugPlural		=> 'skill_years'
						])
					]);
					
					$SkillClient = new __type_Taxonomy([
						__type_Taxonomy::type => $Skill->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Client',
							__type_Name::plural		=> 'Clients',
							__type_Name::slugSingular	=> 'skill_client',
							__type_Name::slugPlural		=> 'skill_clients'
						])
					]);
					
					$SkillLocation = new __type_Taxonomy([
						__type_Taxonomy::type => $Skill->name->slugSingular,
						__type_Taxonomy::name => new __type_Name([
							__type_Name::singular 		=> 'Location',
							__type_Name::plural		=> 'Location',
							__type_Name::slugSingular	=> 'skill_location',
							__type_Name::slugPlural		=> 'skill_locations'
						])
					]);
					
					$Skill->env->supports			= 11 + __flag_Support::PAGE_ATTRIBUTES | __flag_Support::POST_FORMATS;
					$Skill->env->hierarchical		= TRUE;
					$Skill->env->taxonomies			=
					[
						$SkillTechnology->name->slugSingular,
						$SkillType->name->slugSingular,
						$SkillYear->name->slugSingular,
						$SkillClient->name->slugSingular
					];
					$Skill->env->rewrite->slug		= 'skill';
					(new PostType($Skill))->install();
					
					$SkillTechnology->args->rewrite->slug	= 'skills/by-technology';
					(new Taxonomy($SkillTechnology))->install();
					
					$SkillType->args->rewrite->slug		= 'skills/by-plot-keyword';
					(new Taxonomy($SkillPlotKW))->install();
					
					$SkillType->args->rewrite->slug		= 'skills/by-type';
					(new Taxonomy($SkillType))->install();
					
					$SkillYear->args->rewrite->slug		= 'skills/by-year';
					(new Taxonomy($SkillYear))->install();
					
					$SkillClient->args->rewrite->slug	= 'skills/by-client';
					(new Taxonomy($SkillClient))->install();
					
					$SkillLocation->args->rewrite->slug	= 'skills/by-location';
					(new Taxonomy($SkillLocation))->install();
					
				#::
			#::
			
			#:sidebar:
			
				#:test:
					
					(new SideBar(new __type_SideBar([
						__type_Sidebar::name	=> 'Left',
						__type_Sidebar::id	=> '{:slug}_sidebar_left',
						__type_Sidebar::desc	=> 'The {:name} sidebar.'
					])))->install();
				
					(new SideBar(new __type_SideBar([
						__type_Sidebar::name	=> 'Right',
						__type_Sidebar::id	=> '{:slug}_sidebar_right',
						__type_Sidebar::desc	=> 'The {:name} sidebar.'
					])))->install();
					
					(new SideBar(new __type_SideBar([
						__type_Sidebar::name	=> '2nd Right',
						__type_Sidebar::id	=> '{:slug}_sidebar_right_2',
						__type_Sidebar::desc	=> 'The {:name} sidebar.'
					])))->install();
					
					(new SideBar(new __type_SideBar([
						__type_Sidebar::name	=> 'Footer',
						__type_Sidebar::id	=> '{:slug}_sidebar_footer',
						__type_Sidebar::desc	=> 'The {:name} sidebar.'
					])))->install();
					
				#::
			
			#::
				
			#:adminbar:
			
				#:test:
			
					(new AdminBar(new __type_AdminBar([
						__type_AdminBar::title	=> Theme::fullName(),
						__type_AdminBar::id	=> Theme::fullName(),
						__type_AdminBar::href	=> '#',
						__type_AdminBar::sub	=> new Sub([
							new AdminBar(new __type_AdminBar([
								__type_AdminBar::title	=> 'foo'
							]))
						])
					])))->install();
					
					(new AdminBar(new __type_AdminBar([
						__type_AdminBar::title	=> Theme::name(),
						__type_AdminBar::id	=> Theme::name(),
						__type_AdminBar::href	=> '#',
						__type_AdminBar::sub	=> new Sub([
							new AdminBar(new __type_AdminBar([
								__type_AdminBar::title	=> 'baz'
							]))
						])
					])))->install();
				
				#::
				
			#::
			
			#:manageColumns:
			
				#:posts:
			
					#:test:
				
						#+ remove column 'tags' from postType 'post'
					
						(new ManageColumns(new __type_ManageColumns([
							__type_ManageColumns::filterEvent	=> String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => 'post']),
							__type_ManageColumns::filter		=> new __type_Call([
								__type_Call::fn			=> function($__columns)
								{
									unset($__columns['tags']);
									return $__columns;
								}
							])
						])))->install();
					
					#::
					
					#:featuredImage:
					
						#+ add featuredImage to multiple postTypes
					
						(new ManageColumns(new __type_ManageColumns([
							__type_ManageColumns::id		=> 'featured_image',
							__type_ManageColumns::title		=> 'Featured Image',
							__type_ManageColumns::index		=> 0,
							__type_ManageColumns::filterEvent	=>
							[
								String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => 'post']),
								String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => $Event->name->slugSingular]),
								String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => $Member->name->slugSingular]),
								String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => $Skill->name->slugSingular]),
							],
							__type_ManageColumns::actionEvent	=>
							[
								String::insert(__const_Action::MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__, ['postType' => 'post']),
								String::insert(__const_Action::MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__, ['postType' => $Event->name->slugSingular]),
								String::insert(__const_Action::MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__, ['postType' => $Member->name->slugSingular]),
								String::insert(__const_Action::MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__, ['postType' => $Skill->name->slugSingular]),
							],
							__type_ManageColumns::action		=> new __type_Call([
								__type_Call::fn			=> function($__column, WP_Post $__WpPost)
								{
									print Inv::getThePostThumbnail($__WpPost->ID, 'edit-screen-thumbnail');
								}
							])
						])))->install();
						
					#::
					
					#:wordCount:
					
						#+ add wordCount to postType 'post'
					
						(new ManageColumns(new __type_ManageColumns([
							__type_ManageColumns::id		=> 'word_count',
							__type_ManageColumns::title		=> 'Word Count',
							__type_ManageColumns::index		=> 2,
							__type_ManageColumns::filterEvent	=> String::insert(__const_Filter::MANAGE_POST_TYPE_POSTS_COLUMNS__, ['postType' => 'post']),
							__type_ManageColumns::actionEvent	=> String::insert(__const_Action::MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__, ['postType' => 'post']),
							__type_ManageColumns::action		=> new __type_Call([
								__type_Call::fn			=> function($__column, WP_Post $__WpPost)
								{
									print Inv::strWordCount($__WpPost->post_content);
								}
							])
						])))->install();
					
					#::
				
				#::
				
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