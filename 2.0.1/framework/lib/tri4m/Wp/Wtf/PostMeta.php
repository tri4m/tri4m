<?PHP
	NAMESPACE tri4m\Wp\Wtf;
	USE tri4m\Wp\__const_Action;
	USE tri4m\Wp\__const_Filter;
	USE tri4m\Wp\__const_Wp;
	USE tri4m\Wp\__type_Action;
	USE tri4m\Wp\__type_Call;
	USE tri4m\Wp\__type_Filter;
	USE tri4m\Wp\Inv;
	USE tri4m\Wp\Theme;
	USE tri4m\Wp\Wtf\__type_PostMeta;
	USE tri4m\Wp\Wtf\PostMeta\__type_Field;
	USE tri4m\Wp\Wtf\PostMeta\__type_FieldList;
	USE tri4m\Wp\Wtf\PostMeta\__type_FieldListField;
	USE tri4m\Wp\Wtf\PostMeta\__type_Section;
	USE tri4m\Wp\Wtf\PostMeta\__type_Box;
	USE tri4m\Wp\Wtf\__type_MetaBox;
	USE tri4m\Wp\Wtf\MetaBox;
	USE ILLI\Core\Std\Def\__const_Type;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE WP_Post;
	
	/*
	add_action( 'save_post',                'plugin_foo_save_post', 10, 2 );
	add_action( 'wp_restore_post_revision', 'plugin_foo_restore_revision', 10, 2 );
	
	function plugin_foo_restore_revision( $post_id, $revision_id ) {
	
		$post = get_post( $post_id );
		$revision = get_post( $revision_id );
	
		if ( post_type_supports( $post->post_type, 'my_feature' ) ) {
	
			$meta = get_metadata( 'post', $revision->ID, 'my_feature', true );
			if ( !empty( $meta ) )
				update_metadata( 'post', $post_id, 'my_feature', $meta );
	
		}
	
	}
	
	function plugin_foo_save_post( $post_id, $post ) {
	
		if ( $parent_id = wp_is_post_revision( $post_id ) ) {
	
			$parent = get_post( $parent_id );
	
			if ( post_type_supports( $parent->post_type, 'my_feature' ) ) {
				$meta = get_post_meta( $parent->ID, 'my_feature', true );
				if ( !empty( $meta ) )
					add_metadata( 'post', $post_id, 'my_feature', $meta );
			}
	
		}
	
	}
	*/
	
	CLASS PostMeta EXTENDS \tri4m\Wp\Wtf
	{
		protected $__Box	= NULL;
		protected $__cache	= [];
		
		protected $__actions	=
		[
			__const_Action::ADMIN_INIT	=> NULL,
			__const_Action::SAVE_POST	=> NULL
		];
		
		function __construct(__type_PostMeta $__Setup)
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
			
			isset($__STATIC_fnV) ?: $__STATIC_fnV = function(__type_PostMeta $__Setup, array $__cache, $__postId)
			{
				$result = [];
				$nonce	= String::insert('{:id}_nonce', ['id' => $__Setup->id]);
				
				if((Inv::defined(__const_Wp::DOING_AUTOSAVE) && Inv::constant(__const_Wp::DOING_AUTOSAVE))
				|| (FALSE === (TRUE === ($__Setup->box instanceOf __type_Box) && TRUE === in_array($_POST['post_type'], (array) $__Setup->box->type)))
				//|| (!Inv::currentUserCan(Inv::getPostTypeObject()->cap->edit_post, $__postId)))
				|| FALSE === isset($_POST[$nonce])
				|| FALSE === Inv::wpVerifyNonce($_POST[$nonce], __FILE__))
					return $__postId;
				
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
						if(is_array($Field))
						{
							foreach($Field as $lid => $ListField)
							{
								$i = &$_POST[$__Setup->id][$sid][$fid][$lid];
								$result[$sid][$fid][$lid] = $v($ListField, $i);
							}
							
							continue;
						}
						
						$i = &$_POST[$__Setup->id][$sid][$fid];
						$result[$sid][$fid] = $v($Field, $i);
					}
				
				$result = serialize($result);
				
				if(FALSE === Inv::addPostMeta($__postId, $__Setup->id, $result, TRUE))
					Inv::updatePostMeta($__postId, $__Setup->id, $result);
			};
			
			isset($__STATIC_fnR) ?: $__STATIC_fnR = function(__type_PostMeta $__Setup, array &$__cache, $__postId) use (&$__STATIC_fnV)
			{	
				NULL === $__Setup->fn
					? $__STATIC_fnV($__Setup, $__cache, $__postId)
					: $__Setup->fn($__Setup, $__cache, $__postId);
			};
			
			isset($__STATIC_fnP) ?: $__STATIC_fnP = function(__type_PostMeta $__Setup, WP_Post $__WpPost, array $__cache, array $__config) use (&$__STATIC_fnI)
			{
				if(FALSE === ($options = unserialize(Inv::getPostMeta($__WpPost->ID, $__Setup->id, TRUE))))
					$options = [];
				
				Inv::wpNonceField(__FILE__, String::insert('{:id}_nonce', ['id' => $__Setup->id]));
					
				foreach($__Setup->sections->get() as $Section)
				{
					#:section:
					if(NULL !== $Section->title)
						print String::insert('<h4>{:title}</h4>', ['title' => $Section->title]);
						
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
						print $Section->beforeField;
						
						if($Field instanceOf __type_Field)
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
						}
						else
						if($Field instanceOf __type_FieldList)
						{
							$pattern = [
								'id'		=> '{:setupId}_{:sectionId}_{:fieldId}',
								'name'		=> '{:setupId}[{:sectionId}][{:fieldId}]'
							];
							
							$config = [
								'fieldId' 	=> $Field->id,
								'sectionId' 	=> $Section->id,
								'setupId' 	=> $__Setup->id
							];
							
							foreach($pattern as &$_)
								$_ = String::insert($_, $config);
							
							print $Field->beforeLabel;
							print String::insert($Field->label, ['id' => $pattern['id'], 'title' => $Field->title]);
							print $Field->afterLabel;
							
							print $Field->beforeContent;
							
							foreach($Field->fields->get() as $ListField)
							{
								$lpattern = [
									'id'		=> '{:setupId}_{:sectionId}_{:fieldId}_{:listFieldId}',
									'name'		=> '{:setupId}[{:sectionId}][{:fieldId}][{:listFieldId}]',
									'type'		=> '{:type}',
									'value'		=> '{:value}',
									'class'		=> '{:class}'
								];
								
								$lconfig = [
									'listFieldId' 	=> $ListField->id,
									'fieldId' 	=> $Field->id,
									'sectionId' 	=> $Section->id,
									'setupId' 	=> $__Setup->id,
									'value'		=> isset($options[$Section->id][$Field->id][$ListField->id]) ? $options[$Section->id][$Field->id][$ListField->id] : $ListField->std,
									'type'		=> $ListField->type,
									'class'		=> $ListField->cssClass
								];
								
								foreach($lpattern as &$_)
									$_ = String::insert($_, $lconfig);
								
								print $Field->beforeField;
								
								print $ListField->beforeLabel;
								print String::insert($ListField->label, ['id' => $lpattern['id'], 'title' => $ListField->title]);
								print $ListField->afterLabel;
								
								print $ListField->beforeContent;
								switch(TRUE):
									case is_string($c = $ListField->content):
										print String::insert($c, $lpattern + ['attr' => String::attribute($lpattern, ['delimeter' => ' '])]);
										break;
									
									case is_array($c = $ListField->content):
										print '@todo';
										break;
									
									case ($c = $ListField->content) instanceOf __type_Call:
										print String::insert(is_array($c = $__STATIC_fnI($c)) ? implode(PHP_EOL, $c) : $c, $lpattern + ['attr' => String::attribute($lpattern, ['delimeter' => ' '])]);
										break;
								endswitch;
								print $ListField->afterContent;
								
								print $Field->afterField;
								continue;
							}
							
							print $Field->afterContent;
						}
						
						print $Section->afterField;
					}
					
					print $Section->afterFields;
					print $Section->afterContent;
				}
			};
			
			$id			= $__Setup->id;
			$this->__Setup		= $__Setup;
			$this->__Setup->id	= Theme::slug(Inflector::variablize(Inflector::underscore($this->__Setup->id)));
			
			foreach($this->__Setup->sections->get() as $Section)
			{
				$Section->id = Inflector::variablize(Inflector::underscore($Section->id));
				
				foreach($Section->fields->get() as $Field)
				{
					if($Field instanceOf __type_Field)
					{
						$Field->id = Inflector::variablize(Inflector::underscore($Field->id));
						$this->__cache[$Section->id][$Field->id] = $Field;
					}
					else
					if($Field instanceOf __type_FieldList)
					{
						foreach($Field->fields->get() as $ListField)
						{
							$ListField->id = Inflector::variablize(Inflector::underscore($ListField->id));
							$this->__cache[$Section->id][$Field->id][$ListField->id] = $ListField;
						}
					}
				}
			}
			
			if($this->__Setup->box instanceOf __type_Box)
			{
				$config = [];
				
				$_ = [
					[
						'id', 'title', 'type', 'context', 'priority'
					],
					$this->__Setup->box->get()->toArray(),
					'tri4m\Wp\Wtf\__type_MetaBox::',
					'tri4m\Wp\Wtf\PostMeta\__type_Box::',
				];
				
				foreach($_[0] as $c)
					$config[constant($_[2].$c)] = $_[1][constant($_[3].$c)];
				
				unset($_);
				
				$config[__type_MetaBox::id]		= $id;
				$config[__type_MetaBox::content]	= new __type_Call([
					__type_Call::fn	=> function(WP_Post $__WpPost, array $__config) use (&$__STATIC_fnP)
					{
						$__STATIC_fnP($this->__Setup, $__WpPost, $this->__cache, $__config);
					}
				]);
				
				$this->__Box = new MetaBox(new __type_MetaBox($config));
				
				$this->__actions[__const_Action::SAVE_POST] = new __type_Action([
					__type_Action::argsNum	=> 1,
					__type_Action::priority	=> 101,
					__type_Action::fn	=> function($__postId) use (&$__STATIC_fnR)
					{
						$__STATIC_fnR($this->__Setup, $this->__cache, $__postId);
					}
				]);
			}
		}
		
		public function install()
		{
			$this->__Box instanceOf MetaBox
				? parent::install()->__Box->install()
				: parent::install();
			
			return $this;
		}
	}