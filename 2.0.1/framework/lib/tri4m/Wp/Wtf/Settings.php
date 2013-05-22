<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Wtf\__type_Settings;
	USE tri4m\Wp\Wtf\Settings\__type_Messages;
	USE tri4m\Wp\Wtf\Settings\__type_Field;
	USE tri4m\Wp\Wtf\Settings\__type_Section;
	USE tri4m\Wp\Wtf\Settings\__type_Page;
	USE tri4m\Wp\Wtf\__type_SubMenuPage;
	USE tri4m\Wp\Wtf\SubMenuPage;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	
	CLASS Settings EXTENDS \tri4m\Wp\Wtf
	{
		protected $__Page	= [];
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
					
						if($__Setup->messages instanceOf __type_Messages)
							Inv::addSettingsError($__Setup->id, 'restore_defaults', $__Setup->messages->resetComplete, 'updated fade');
						
						if(TRUE === $__Setup->deep)
						{
							foreach($__cache as $sid => &$fields)
								foreach($fields as $fid => &$Field)
									$result[$sid][$fid] = $Field->std;
						}
						else
						{
							foreach($__cache as $id => &$Field)
								$result[$id] = $Field->std;
						}		
						
						break;
						
					case 'import':
					
						if($result = unserialize(stripslashes(trim($_POST['import']))))
						{
							if($__Setup->messages instanceOf __type_Messages)
								Inv::addSettingsError($__Setup->id, 'import', $__Setup->messages->importComplete, 'updated fade');
							break;
						}
						
						if($__Setup->messages instanceOf __type_Messages)
							Inv::addSettingsError($__Setup->id, 'import', $__Setup->messages->importError, 'updated fade');
						break;
					
					case 'update':
					
						Inv::addSettingsError($__Setup->id, 'update', $__Setup->messages->updateComplete, 'updated fade');
					
						$v = function(__type_Field $Field, $i)
						{
							if(FALSE === isset($i))
								return $Field->std;
							
							if(NULL !== ($_ = $Field->fn))
								return $_($i, $Field);
							
							//if(Inv::hasFilter('tri4m_sanitize_'.$Field->type))
							//	$result[$id] = Inv::applyFilters('tri4m_sanitize_' . $Field->type, $__input[$id], $Field);
								return $i;
								
							return $Field->std;
						};
						
						if(TRUE === $__Setup->deep)
						{
							foreach($__cache as $sid => &$fields)
								foreach($fields as $fid => &$Field)
								{
									$i = &$__input[$sid][$fid];
									$result[$sid][$fid] = $v($Field, $i);
								}
						}
						else
						{
							foreach($__cache as $id => &$Field)
							{
								$i = &$__input[$id];
								$result[$id] = $v($Field, $i);
							}
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
						if(TRUE === $__Setup->deep)
						{
							if(FALSE === ($options = Inv::getOption($__Setup->id))
							|| FALSE === isset($options[$__Section->id][$__Field->id]))
								$options[$__Section->id][$__Field->id] = $__Field->std;
						}
						else
						{
							if(FALSE === ($options = Inv::getOption($__Setup->id))
							|| FALSE === isset($options[$__Field->id]))
								$options[$__Field->id] = $__Field->std;
						}
							
						$pattern = [
							'id'		=> '{:setupId}_{:sectionId}_{:fieldId}',
							'name'		=> TRUE === $__Setup->deep
										? '{:setupId}[{:sectionId}][{:fieldId}]'
										: '{:setupId}[{:fieldId}]',
							'type'		=> '{:type}',
							'value'		=> '{:value}'
						];
						
						$config = [
							'fieldId' 	=> $__Field->id,
							'sectionId' 	=> $__Section->id,
							'setupId' 	=> $__Setup->id,
							'value'		=> TRUE === $__Setup->deep
										? $options[$__Section->id][$__Field->id]
										: $options[$__Field->id],
							'type'		=> $__Field->type
						];
						
						foreach($pattern as &$_)
							$_ = String::insert($_, $config);
						
						print String::insert('<input {:attr} />', ['attr' => String::attribute($pattern, ['delimeter' => ' '])]);
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
				settings_errors($__Setup->id);
				print $__Setup->page->beforeForm;
				settings_fields($__Setup->id);
				do_settings_sections($__Setup->id);
				print $__Setup->page->beforeCtrl;
				print $__Setup->page->submit;
				print $__Setup->page->reset;
				print $__Setup->page->afterCtrl;
				print $__Setup->page->afterForm;
			};
			
			$id			= $__Setup->id;
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Theme::slug(Inflector::variablize(Inflector::underscore($this->__Setup->id)));
			
			if($this->__Setup->page instanceOf __type_Page)
			{
				$config = [];
				
				foreach([
					__type_Page::parentId		=> __type_SubMenuPage::parentId,
					__type_Page::title		=> __type_SubMenuPage::title,
					__type_Page::menuTitle		=> __type_SubMenuPage::menuTitle,
					__type_Page::cssClass		=> __type_SubMenuPage::cssClass,
					__type_Page::capability		=> __type_SubMenuPage::capability,
					__type_Page::icon		=> __type_SubMenuPage::icon
				] as $i => $k)
					$config[$k] = $this->__Setup->page->get()->toArray()[$i];
				
				$config[__type_SubMenuPage::id]		= $id;
				$config[__type_SubMenuPage::content]	= new __type_Call([
					__type_Call::fn		=> function() use (&$__STATIC_fnP)
					{
						$__STATIC_fnP($this->__Setup);
					}
				]);
				
				$this->__Page = new SubMenuPage(new __type_SubMenuPage($config));
			}
			
			$this->__actions[__const_Action::ADMIN_INIT] = new __type_Action([
				__type_Action::argsNum	=> 0,
				__type_Action::priority	=> 101,
				__type_Action::fn	=> function() use (&$__STATIC_fnF, &$__STATIC_fnS, &$__STATIC_fnR)
				{
					$__STATIC_fnR($this->__Setup, $this->__cache);
					
					foreach($this->__Setup->sections->get() as $Section)
					{
						$Section->id = Inflector::variablize(Inflector::underscore($Section->id));
						
						$__STATIC_fnS($this->__Setup, $Section);
						
						foreach($Section->fields->get() as $Field)
						{
							$Field->id = Inflector::variablize(Inflector::underscore($Field->id));
							
							TRUE === $this->__Setup->deep
								? $this->__cache[$Section->id][$Field->id]	= $Field
								: $this->__cache[$Field->id]			= $Field;
							
							$__STATIC_fnF($this->__Setup, $Section, $Field);
						}
					}
					
					
				}
			]);
			
			/*
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
		
		public function install()
		{
			$this->__Page instanceOf SubMenuPage
				? parent::install()->__Page->install()
				: parent::install();
			
			return $this;
		}
		
	}