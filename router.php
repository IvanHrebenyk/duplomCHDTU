<?
	$controller_name = '';
	$action_name = '';
	$addition_action_name = '';
	
	$routes = explode('/', $_SERVER['REQUEST_URI']);

	// получаем имя контроллера
	if ( !empty($routes[1]) )
	{	
		$controller_name = $routes[1];
	}
	
	// получаем имя экшена
	if ( !empty($routes[2]) )
	{
		$action_name = $routes[2];
	}
	if ( !empty($routes[3]) )
	{
		$addition_action_name = $routes[3];
	}
?>