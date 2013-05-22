<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Wtf\__type_Settings;
	USE tri4m\Wp\Wtf\Settings\__type_Section;
	USE tri4m\Wp\Wtf\Settings\__type_Field;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Trace;
	USE tri4m\Wp\Theme;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	
	CLASS Settings EXTENDS \tri4m\Wp\Wtf
	{
		protected $__pageHook	= NULL;
		protected $__cache	= [];
		
		protected $__actions	=
		[
			__const_Action::ADMIN_INIT => NULL,
			__const_Action::ADMIN_MENU => NULL
		];
		
		function __construct(__type_Settings $__Setup)
		{
			static $__STATIC_fnI, $__STATIC_fnV, $__STATIC_fnF, $__STATIC_fnS, $__STATIC_fnR, $__STATIC_fnP;
			
			isset($__STATIC_fnI) ?: $__STATIC_fnI = function(__type_Call $T)
			{
				switch(TRUE):
					case $T->isVal($T::fn, __const_Type::SPL_CLOSURE):	return Invoke::emitCallable($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_FUNCTION):	return Invoke::emitFunction($T->fn, $T->arguments);
					case $T->isVal($T::fn, __const_Type::SPL_METHOD):	return Invoke::emit($T->fn[0], $T->fn[1], $T->arguments);
				endswitch;
			};
			
			isset($__STATIC_fnV) ?: $__STATIC_fnV = function(__type_Settings $__Setup, array $__cache, array $__input)
			{
				if(FALSE === isset($_POST['action']))
					return;
					
				$result = [];
				
				switch($_POST['action']):
					case 'reset':
						Inv::addSettingsError($__Setup->id, 'restore_defaults', 'Default options restored.', 'updated fade');
						
						foreach($__cache as $id => $Field)
							$result[$id] = $Field->std;
						
						break;
						
					case 'import':
						if($result = unserialize(stripslashes(trim($_POST['import']))))
						{
							Inv::addSettingsError($__Setup->id, 'import', 'Options Imported', 'updated fade');
							break;
						}
						
						Inv::addSettingsError($__Setup->id, 'import', 'Invalid Data for Import', 'updated fade');
						break;
					
					case 'update':
						foreach($__cache as $id => &$Field)
						{
							if(FALSE === isset($__input[$id]))
							{
								$result[$id] = $Field->std;
								continue;
							}
							
							if(NULL !== ($_ = $Field->fn))
							{
								$result[$id] = $_($__input[$id], $Field);
								continue;
							}
							
							//if(Inv::hasFilter('tri4m_sanitize_'.$Field->type))
								$result[$id] = $__input[$id];
							//	$result[$id] = Inv::applyFilters('tri4m_sanitize_' . $Field->type, $__input[$id], $Field);
						}
						
						break;
				endswitch;
				
				return [] === $result ? NULL : $result;
			};
			
			isset($__STATIC_fnS) ?: $__STATIC_fnS = function(__type_Settings $__Setup, __type_Section $__Section) use (&$__STATIC_fnI)
			{
				Inv::addSettingsSection
				(
					$__Section->id,
					$__Section->title,
					function() use (&$__Section, &$__STATIC_fnI)
					{
						switch(TRUE):
							case is_string($c = $__Section->content):
								print $c;
								break;
							
							case is_array($c = $__Section->content):
								print implode(PHP_EOL, $c);
								break;
							
							case ($c = $__Section->content) instanceOf __type_Call:
								print is_array($c = $__STATIC_fnI($c)) ? implode(PHP_EOL, $c) : $c;
								break;
						endswitch;
					},
					$__Setup->id
				);
			};
			
			isset($__STATIC_fnF) ?: $__STATIC_fnF = function(__type_Settings $__Setup, __type_Section $__Section, __type_Field $__Field)
			{
				Inv::addSettingsField
				(
					$__Field->id,
					$__Field->title,
					function() use (&$__Setup, &$__Section, &$__Field)
					{
						if(FALSE === ($options = Inv::getOption($__Setup->id))
						|| FALSE === isset($options[$__Field->id]))
							$options[$__Field->id] = $__Field->std;
						
						$pattern = [
							'id'		=> '{:setupId}_{:fieldId}',
							'name'		=> '{:setupId}[{:fieldId}]',
							'type'		=> '{:type}',
							'value'		=> '{:value}'
						];
						
						$config = [
							//'themeId'	=> Theme::slug(),
							'fieldId' 	=> $__Field->id,
							'setupId' 	=> $__Setup->id,
							'value'		=> $options[$__Field->id],
							'type'		=> $__Field->type
						];
						
						foreach($pattern as &$_)
							$_ = String::insert($_, $config);
						
						print String::insert('<input {:attr} />', ['attr' => String::attribute($pattern)]);
					},
					$__Setup->id,
					$__Section->id,
					[
						'type'		=> $__Field->type,
						'desc'		=> $__Field->desc,
						'id'		=> String::insert('{:setupId}_{:fieldId}', ['setupId' => $__Setup->id, 'fieldId' => $__Field->id]),
						'label_for'	=> String::insert('{:setupId}_{:fieldId}', ['setupId' => $__Setup->id, 'fieldId' => $__Field->id]),
						'choices'	=> $__Field->choices,
						'std'		=> $__Field->std,
						'class'		=> $__Field->cssClass
					]
				);
			};
			
			isset($__STATIC_fnR) ?: $__STATIC_fnR = function(__type_Settings $__Setup, array &$__cache) use (&$__STATIC_fnV)
			{
				Inv::registerSetting
				(
					$__Setup->id,
					$__Setup->id,
					NULL === $__Setup->fn
						? function($__input) use (&$__Setup, &$__cache, &$__STATIC_fnV)
						{
							return $__STATIC_fnV($__Setup, $__cache, $__input);
						}
						: $__Setup->fn
				);
			};
			
			isset($__STATIC_fnP) ?: $__STATIC_fnP = function(__type_Settings $__Setup)
			{
				return Inv::addSubmenuPage
				(
					'themes.php',
					$__Setup->name,
					$__Setup->name,
					$__Setup->capability,
					$__Setup->id,
					function() use ($__Setup)
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
								'setupName'	=> $__Setup->name,
								'message'	=> isset($_GET["settings-updated"]) && $_GET["settings-updated"] === 'true'
											? '<div id="message" class="updated fade"><p>Options saved.</p></div>'
											: ''
							]
						);
						
						settings_fields($__Setup->id);
						do_settings_sections($__Setup->id);
						
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
			};
			
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Inflector::underscore($this->__Setup->id);
			
			NULL !== $this->__Setup->name ?: $this->__Setup->name = $this->__Setup->id;
			
			$this->__actions[__const_Action::ADMIN_INIT] = new __type_Action([
				__type_Action::argsNum	=> 0,
				__type_Action::priority	=> 101,
				__type_Action::fn	=> function() use (&$__STATIC_fnV, &$__STATIC_fnF, &$__STATIC_fnS, &$__STATIC_fnR)
				{
					$__STATIC_fnR($this->__Setup, $this->__cache);
					
					foreach($this->__Setup->sections->get() as $Section)
					{
						$__STATIC_fnS($this->__Setup, $Section);
						
						foreach($Section->fields->get() as $Field)
						{
							$this->__cache[$Field->id] = $Field;
							$__STATIC_fnF($this->__Setup, $Section, $Field);
						}
					}
				}
			]);
			
			$this->__actions[__const_Action::ADMIN_MENU] = new __type_Action([
				__type_Action::argsNum	=> 0,
				__type_Action::priority	=> 100,
				__type_Action::fn	=> function() use (&$__STATIC_fnP)
				{
					$this->__pageHook = $__STATIC_fnP($this->__Setup);
				}
			]);
			/*
			$this->__actions[String::insert(__const_Action::LOAD_PAGE_HOOK__, ['pageHook' => $this->__pageHook])] = new __type_Action([
				__type_Action::argsNum	=> 2,
				__type_Action::priority	=> 105,
				__type_Action::fn	=> function($__pageNow, $__WPScreen)
				{
					wp_register_style('admin', get_bloginfo('template_url') . '/styles.css');
					wp_enqueue_style( 'admin' );	
				}
			]);
			*/
		}
		
	}