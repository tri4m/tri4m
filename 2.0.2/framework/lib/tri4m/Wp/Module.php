<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__type_Module;
	USE tri4m\Wp\Hook;
	USE ILLI\Core\Std\Exception\ClassNotFoundException;
	USE ILLI\Core\Std\Spl\FsbCollection;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	
	CLASS Module
	{
		protected $__isInstalled	= FALSE;
		protected $__Setup		= NULL;
		protected $__actions		= [];
		protected $__filters		= [];
		protected $__callables		= [];
		protected $__css		= NULL;
		protected $__js			= NULL;
		
		static function __callStatic($__name, array $__arguments = [])
		{
			if(FALSE === class_exists($c = String::insert('{:ns}\{:class}', ['ns' => __CLASS__, 'class' => Inflector::camelize($__name)])))
				throw new ClassNotFoundException(['name' => $c]);
			
			$__arguments += [[]];
			
			return new $c($__arguments[0]);
		}
		
		function install()
		{
			if(FALSE === $this->__isInstalled)
			{
				FsbCollection::fromArray($this->__actions)->each(['tri4m\Wp\Hook', 'enqueue']);
				FsbCollection::fromArray($this->__filters)->each(['tri4m\Wp\Hook', 'enqueue']);
				FsbCollection::fromArray($this->__callables)->each(['tri4m\Wp\Hook', 'enqueue']);
			}
			
			$this->__isInstalled = TRUE;
			return $this;
		}
	}