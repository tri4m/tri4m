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
		protected $__pageHook	= NULL;
		protected $__cache	= [];
		
		protected $__actions	=
		[
			__const_Action::ADMIN_INIT => NULL
		];
		
		function __construct(__type_Settings $__Setup)
		{
			static $__STATIC_fnI, $__STATIC_fnV, $__STATIC_fnR, $__STATIC_fnP;
			
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
				return $__input;
				if(FALSE === isset($_POST['action']))
					return;
					
				$result = [];
				
				switch($_POST['action']):
					case 'reset':
					
						if($__Setup->messages instanceOf __type_Messages)
							Inv::addSettingsError($__Setup->id, 'restore_defaults', $__Setup->messages->resetComplete, 'updated fade');
						
						foreach($__cache as $sid => &$fields)
							foreach($fields as $fid => &$Field)
								$result[$sid][$fid] = $Field->std;
						
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
							
							#! Field::gc::adt::validate()
							#:validate:
							
								//if(Inv::hasFilter('tri4m_sanitize_'.$Field->type))
								//	$result[$id] = Inv::applyFilters('tri4m_sanitize_' . $Field->type, $__input[$id], $Field);
									return $i;
							
							#::
								
							return $Field->std;
						};
						
						foreach($__cache as $sid => &$fields)
							foreach($fields as $fid => &$Field)
							{
								$i = &$__input[$sid][$fid];
								$result[$sid][$fid] = $v($Field, $i);
							}
						
						break;
				endswitch;
				
				return [] === $result ? NULL : $result;
			};
			
			isset($__STATIC_fnR) ?: $__STATIC_fnR = function(__type_Settings $__Setup, array &$__cache, array $__input) use (&$__STATIC_fnV)
			{
				return NULL === $__Setup->fn
					? $__STATIC_fnV($__Setup, $__cache, $__input)
					: $__Setup->fn($__Setup, $__cache, $__input);
			};
			
			isset($__STATIC_fnP) ?: $__STATIC_fnP = function(__type_Settings $__Setup)
			{
				if(FALSE === ($options = Inv::getOption($__Setup->id)))
					$options = [];
				
				Inv::settingsErrors($__Setup->id);
				print $__Setup->page->beforeForm;
				Inv::settingsFields($__Setup->id);
				
				foreach($__Setup->sections->get() as $Section)
				{
					if(NULL !== $Section->title)
						print String::insert('<h3>{:title}</h3>', ['title' => $Section->title]);
					
					print $Section->beforeContent;
					
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
					
					print $Section->beforeFields;
					
					foreach($Section->fields->get() as $Field)
					{
						$pattern = [
							'id'		=> '{:setupId}_{:sectionId}_{:fieldId}',
							'name'		=> '{:setupId}[{:sectionId}][{:fieldId}]',
							'type'		=> '{:type}',
							'value'		=> '{:value}',
							'class'		=> '{:class}'
						];
						
						$config = [
							'fieldId' 	=> $Field->id,
							'sectionId' 	=> $Section->id,
							'setupId' 	=> $__Setup->id,
							'value'		=> isset($options[$Section->id][$Field->id]) ? $options[$Section->id][$Field->id] : $Field->std,
							'type'		=> $Field->type,
							'class'		=> $Field->cssClass
						];
						
						foreach($pattern as &$_)
							$_ = String::insert($_, $config);
						
						print $Section->beforeField;
						
						print $Field->beforeLabel;
						print String::insert($Field->label, ['id' => $pattern['id'], 'title' => $Field->title]);
						print $Field->afterLabel;
							
						print $Field->beforeContent;
						switch(TRUE):
							case is_string($c = $Field->content):
								print String::insert($c, $pattern + ['attr' => String::attribute($pattern, ['delimeter' => ' '])]);
								break;
							
							case is_array($c = $Field->content):
								print '@todo';
								break;
							
							case ($c = $Field->content) instanceOf __type_Call:
								print String::insert(is_array($c = $__STATIC_fnI($c)) ? implode(PHP_EOL, $c) : $c, $pattern + ['attr' => String::attribute($pattern, ['delimeter' => ' '])]);
								break;
						endswitch;
						print $Field->afterContent;
						
						print $Section->afterField;
					}
					
					print $Section->afterFields;
					print $Section->afterContent;
				}
				
				print $__Setup->page->beforeCtrl;
				print $__Setup->page->submit;
				print $__Setup->page->reset;
				print $__Setup->page->afterCtrl;
				print $__Setup->page->afterForm;
			};
			
			$id			= $__Setup->id;
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Theme::slug(Inflector::variablize(Inflector::underscore($this->__Setup->id)));
			
			foreach($this->__Setup->sections->get() as $Section)
			{
				$Section->id = Inflector::variablize(Inflector::underscore($Section->id));
				
				foreach($Section->fields->get() as $Field)
				{
					$Field->id = Inflector::variablize(Inflector::underscore($Field->id));
					$this->__cache[$Section->id][$Field->id] = $Field;
				}
			}
			
			if($this->__Setup->page instanceOf __type_Page)
			{
				$config = [];
				
				$_ = [
					[
						'parentId', 'title', 'menuTitle', 'cssClass', 'capability', 'icon'
					],
					$this->__Setup->page->get()->toArray(),
					'tri4m\Wp\Wtf\__type_SubMenuPage::',
					'tri4m\Wp\Wtf\Settings\__type_Page::',
				];
				
				foreach($_[0] as $c)
					$config[constant($_[2].$c)] = $_[1][constant($_[3].$c)];
				
				unset($_);
				
				$config[__type_SubMenuPage::id]		= $id;
				$config[__type_SubMenuPage::content]	= new __type_Call([
					__type_Call::fn	=> function() use (&$__STATIC_fnP)
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
					Inv::registerSetting($this->__Setup->id, $this->__Setup->id, function($__input) use (&$__STATIC_fnR)
					{
						return $__STATIC_fnR($this->__Setup, $this->__cache, $__input);
					});
					
					foreach($this->__Setup->sections->get() as $Section)
					{
						Inv::addSettingsSection($Section->id, $Section->title, NULL, $this->__Setup->id);
						
						foreach($Section->fields->get() as $Field)
						{
							Inv::addSettingsField($Field->id, $Field->title, NULL, $this->__Setup->id, $Section->id, []);
						}
					}
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