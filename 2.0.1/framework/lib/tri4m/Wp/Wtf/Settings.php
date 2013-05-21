<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Wtf\__type_Settings;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	
	CLASS Settings EXTENDS \tri4m\Wp\Wtf
	{
		protected $__pageHook	= NULL;
		protected $__actions	=
		[
			__const_Action::ADMIN_INIT => NULL,
			__const_Action::ADMIN_MENU => NULL
		];
		
		function __construct(__type_Settings $__Setup)
		{
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Inflector::underscore($this->__Setup->id);
			
			NULL !== $this->__Setup->name ?: $this->__Setup->name = $this->__Setup->id;
			
			static $__STATIC_fnI;
			
			isset($__STATIC_fnI) ?: $__STATIC_fnI = function(__type_Call $T)
			{
				switch(TRUE):
					case $T->isVal($T::fn, __const_Type::SPL_CLOSURE):	return Invoke::emitCallable($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_FUNCTION):	return Invoke::emitFunction($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_METHOD):	return Invoke::emit($T->fn[0], $T->fn[1], $T->arguments);
				endswitch;
			};
			
			$this->__actions[__const_Action::ADMIN_INIT] = new __type_Action([
				__type_Action::argsNum	=> 0,
				__type_Action::priority	=> 100,
				__type_Action::fn	=> function() use (&$__STATIC_fnI)
				{
					Inv::registerSetting($this->__Setup->id, $this->__Setup->id);
					
					foreach($this->__Setup->sections->get() as $Section)
					{
						Inv::addSettingsSection
						(
							$Section->id,
							$Section->title,
							function() use ($Section, &$__STATIC_fnI)
							{
								switch(TRUE):
									case is_string($c = $Section->content):
										print $c;
										break;
									case is_array($c = $Section->content):
										print implode(PHP_EOL, $c);
										break;
									case ($c = $Section->content) instanceOf __type_Call:
										print is_array($c = $__STATIC_fnI($c)) ? implode(PHP_EOL, $c) : $c;
										break;
								endswitch;
							},
							$this->__Setup->id
						);
						
						foreach($Section->fields->get() as $Field)
						{
							Inv::addSettingsSection
							(
								$Field->id,
								$Field->title,
								function() use ($Field)
								{
									if(FALSE === ($options = get_option( $this->__Setup->id ))
									&& FALSE === isset($options[$Field->id]))
										$options[$Field->id] = $Field->std;
										
									print String::insert
									(
										'<input id="{:setupId}_{:fieldId}" name="{:setupId}[{:fieldId}]" type="{:type}" value="{:value}" />',
										[
											'fieldId' 	=> $Field->id,
											'setupId' 	=> $this->__Setup->id,
											'value'		=> $options[$Field->id],
											'type'		=> $Field->type
										]
									);
								},
								$this->__Setup->id,
								$Section->id,
								[$Field]
							);
						}
					}
				}
			]);
			
			$this->__actions[__const_Action::ADMIN_MENU] = new __type_Action([
				__type_Action::argsNum	=> 0,
				__type_Action::priority	=> 100,
				__type_Action::fn	=> function()
				{
					$this->__pageHook = Inv::addSubmenuPage
					(
						'themes.php',
						$this->__Setup->name,
						$this->__Setup->name,
						$this->__Setup->capability,
						$this->__Setup->id,
						function()
						{
						
							print String::insert
							(
								'
									<div class="wrap">
										{:icon}
										<h2>{:setupName}</h2>
										{:message}
										<form action="options.php" method="post">
								',
								[
									'icon'		=> get_screen_icon('options-general'),
									'setupName'	=> $this->__Setup->name,
									'message'	=> isset($_GET["settings-updated"]) && $_GET["settings-updated"] === 'true'
												? '<div id="message" class="updated fade"><p>Options saved.</p></div>'
												: ''
								]
							);
							
							settings_fields($this->__Setup->id);
							do_settings_sections($this->__Setup->id);
							
							print String::insert
							(
								'
											<p class="submit">
												<input type="submit" class="button-primary" value="{:submit}" />
											</p>
										</form>
									</div>
								',
								[
									'submit'	=> 'save options'
								]
							);
						}
					);
				}
			]);
			
			$this->__actions[String::insert(__const_Action::LOAD_PAGE_HOOK__, ['pageHook' => $this->__pageHook])] = new __type_Action([
				__type_Action::argsNum	=> 2,
				__type_Action::priority	=> 105,
				__type_Action::fn	=> function($__pageNow, $__WPScreen)
				{
					wp_register_style('admin', get_bloginfo('template_url') . '/styles.css');
					wp_enqueue_style( 'admin' );	
				}
			]);
		}
		
	}