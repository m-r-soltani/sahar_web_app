<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Bootstrap
{
	public function __construct() 
	{
        ///////////////////////////////---forms---///////////////////////////////
        if(isset($_POST['send_province'])){
            $ostan_name=$_POST['ostan'];
            $db = Db::getInstance();
            $db->query("INSERT INTO bnm_ostan (name) VALUES ('bbb')");
            //$req = $db->query("INSERT INTO bnm_ostan (name) VALUES ($ostan_name)");

        }
        ///////////////////////////////---forms---///////////////////////////////
		$flag = FALSE;
		// 1. router
		if (isset ($_GET['path'])) {
			$tokens = explode('/', rtrim($_GET['path'], '/'));
			// 2. Dispatcher
			$controllerName = ucfirst(array_shift($tokens));
			if (file_exists('Controllers/'.$controllerName.'.php')) {
				$controller = new $controllerName();
				if (!empty($tokens)) {
					$actionName = array_shift($tokens);
					if (method_exists ( $controller , $actionName )) {
						$controller->{$actionName}(@$tokens);	
					}
					else {
					    //if action not found error page
						$flag = TRUE;
					}
				}
				else
				{
					// default action
					$controller->index();
				}				
			} else {
                //if controller not found render an error page
				$flag = TRUE;
			}
		} else {
		    //if no controller entred
			$controllerName = 'Home';
			$controller = new $controllerName();
			$controller->index();
		}
		//Error404 page
		if ( $flag ) {
			$controllerName = 'Error404';
			$controller = new $controllerName();
			$controller->index();
		}

	}
}
