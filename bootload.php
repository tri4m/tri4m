<?PHP
	namespace bootload;
	
	USE	Invoke, Server;
		
	USE	Exception,
		ErrorException,
		ILLI\Core\Std\Throwable;
	
	require_once dirname(__DIR__).'/ILLI/bootload.php';
	Server\Init::run(7);
	Invoke\Init::add('tri4m', '2.0.1', __DIR__);
	Invoke\Init::run();
	