<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\Module\__type_SubMenuPage;
	USE ILLI\Core\Util\String;
	
	CLASS __print_Module
	{
		static function subMenuPage(__type_SubMenuPage $__Setup)
		{
			$config = $__Setup->toArray([
				'title'		=> __type_SubMenuPage::title,
				'icon'		=> __type_SubMenuPage::icon,
				'class'		=> __type_SubMenuPage::cssClass,
				'id'		=> __type_SubMenuPage::id
			]);
					
			$config['icon'] = Inv::getScreenIcon($config['icon']);
					
			print String::insert($__Setup->get()[__type_SubMenuPage::beforeContent], $config);
			
			$content = $__Setup->get()[__type_SubMenuPage::content];
			
			switch(TRUE):
				case is_string($content):
					print $content;
					break;
				
				case is_array($content):
					print implode(PHP_EOL, $content);
					break;
				
				case ($c = $content) instanceOf __type_Call:
					print is_array($c = $content->emit()) ? implode(PHP_EOL, $c) : $c;
					break;
			endswitch;
			
			print String::insert($__Setup->get()[__type_SubMenuPage::afterContent], $config);
		}
	}