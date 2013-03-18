<?PHP
	namespace bootload;
	
	USE	Invoke;
		
	USE	Exception,
		ErrorException,
		ILLI\Core\Std\Throwable;
	
	try
	{
		require_once dirname(__DIR__).'/ILLI/bootload.php';
		
		Invoke\Init::add('tri4m', '2.0.1', __DIR__);
		Invoke\Init::run();
	}
	catch(Throwable $T)
	{
		print $T->toTrack()->asText();
	}
	catch(Exception $E)
	{
		var_dump($E);
	}