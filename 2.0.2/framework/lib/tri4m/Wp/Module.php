<?PHP
	NAMESPACE tri4m\Wp;
	USE tri4m\Wp\__const_Module;
	USE tri4m\Wp\Hook;
	USE tri4m\Wp\IModuleSetup;
	USE tri4m\Wp\Trace;
	USE ILLI\Core\Std\Exception\ClassNotFoundException;
	USE ILLI\Core\Std\Exception\ComponentNotFoundException;
	USE ILLI\Core\Std\Exec\__trait_ClassStatic;
	USE ILLI\Core\Std\Exec\__type_Class;
	USE ILLI\Core\Std\Invoke;
	USE ILLI\Core\Std\Spl\FsbCollection;
	USE ILLI\Core\Util\Inflector;
	USE ILLI\Core\Util\String;
	USE ILLI\Core\Util\Spl;
	
	CLASS Module
	{	
		CONST 	setupName		= '{:base}\__type_{:module}';
		CONST 	handleName		= '{:base}\{:module}';
		
		protected $__isInstalled	= FALSE;
		protected $__Setup		= NULL;
		protected $__actions		= [];
		protected $__filters		= [];
		protected $__callables		= [];
		protected $__css		= NULL;
		protected $__js			= NULL;
		
		use __trait_ClassStatic;

		function install()
		{
			if(TRUE === $this->__isInstalled)
				return $this;
			
			$this->onInstall();
			
			[] === $this->__actions		?: FsbCollection::fromArray($this->__actions)->each(['tri4m\Wp\Hook', 'enqueue']);
			[] === $this->__filters		?: FsbCollection::fromArray($this->__filters)->each(['tri4m\Wp\Hook', 'enqueue']);
			[] === $this->__callables	?: FsbCollection::fromArray($this->__callables)->each(['tri4m\Wp\Hook', 'enqueue']);
			
			$this->__isInstalled = TRUE;
			
			return $this;
		}
		
		static function create(IModuleSetup $__Setup)
		{
			$__ident = get_class($__Setup);
			
			if(FALSE === ($__ident = static::ident($__ident)))
				throw new ComponentNotFoundException(['name' => $__ident]);
			
			return static::Core_Std_Exec___trait_ClassStatic_emit($__ident, [$__Setup]);
		}
		
		protected function onInstall()
		{
		}
		
		static function handler($__ident, $__handle)
		{
			if(FALSE === ($__ident = static::ident($__ident)))
				throw new ComponentNotFoundException(['name' => $__ident]);
			
			static::Core_Std_Exec___trait_ClassStatic_handle($__ident, $__handle);
		}
		
		static function localize($__ident, $__base = __CLASS__)
		{
			return ['base' => $__base, 'module' => Inflector::camelize($__ident)];
		}
		
		static function setupName($__ident)
		{
			return String::insert(static::setupName, static::localize($__ident));
		}
		
		static function handleName($__ident)
		{
			return String::insert(static::handleName, static::localize($__ident));
		}
		
		static function ident($__ident)
		{
			if(FALSE === class_exists($__ident))
				$__ident = static::setupName($__ident);
				
			return isset(static::$__Core_Std_Exec___trait_ClassStatic_hook[$__ident]) ? $__ident : FALSE;
		}
		
		static function __boot()
		{
			if(__CLASS__ !== get_called_class())
				return;
			
			foreach(__const_Module::toArray() as $name => $handle)
				self::Core_Std_Exec___trait_ClassStatic_register(new __type_Class([
					__type_Class::identifier	=> static::setupName($name, __CLASS__),
					__type_Class::origin		=> static::handleName($name, __CLASS__),
					__type_Class::handle		=> $handle,
					__type_Class::arguments		=> [],
					__type_Class::lockArguments	=> FALSE
				]));
		}
	}