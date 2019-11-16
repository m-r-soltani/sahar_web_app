<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Bootstrap
{
	public function __construct() 
	{
        ///////////////////////////////---requests---///////////////////////////////
        /*if(isset($_POST['amin'])){
            $data = '{"Coords":[{"Accuracy":"65","Latitude":"53.277720488429026","Longitude":"-9.012038778269686","Timestamp":"Fri Jul 05 2013 11:59:34 GMT+0100 (IST)"},{"Accuracy":"65","Latitude":"53.277720488429026","Longitude":"-9.012038778269686","Timestamp":"Fri Jul 05 2013 11:59:34 GMT+0100 (IST)"},{"Accuracy":"65","Latitude":"53.27770755361785","Longitude":"-9.011979642121824","Timestamp":"Fri Jul 05 2013 12:02:09 GMT+0100 (IST)"},{"Accuracy":"65","Latitude":"53.27769091555766","Longitude":"-9.012051410095722","Timestamp":"Fri Jul 05 2013 12:02:17 GMT+0100 (IST)"},{"Accuracy":"65","Latitude":"53.27769091555766","Longitude":"-9.012051410095722","Timestamp":"Fri Jul 05 2013 12:02:17 GMT+0100 (IST)"}]}';
            //header('Content-type: application/json');
            $test=json_encode($data);
           echo $test;
        }*/
        ///////////////////////////////---requests---///////////////////////////////
        ///////////////////////////////---forms---///////////////////////////////
        /*if(isset($_POST['send_province'])){
            $ostan_name=$_POST['ostan'];
            $db = Db::getInstance();
            $db->query("INSERT INTO bnm_ostan (name) VALUES ('$ostan_name')");
            //$req = $db->query("INSERT INTO bnm_ostan (name) VALUES ($ostan_name)");
        }*/

        ///////////////////////////////---forms---///////////////////////////////
		//$flag = FALSE;
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
		}
		if(isset($_POST['send_province'])){
            $ostan_name=$_POST['ostan'];
            $db = Db::getInstance();
            $db->query("INSERT INTO bnm_ostan (name) VALUES ('$ostan_name')");

            //$req = $db->query("INSERT INTO bnm_ostan (name) VALUES ($ostan_name)");
        }
        if(isset($_POST['GetProvinces'])){
            //$res=$db->query("SELECT * FROM bnm_ostan");
            /*$res=Db::fetchall_Query("SELECT * FROM bnm_ostan");
            if ($res){
                echo 123;
            }*/

        }
//		else {
//		    //if no controller entred
//			$controllerName = 'Home';
//			$controller = new $controllerName();
//			$controller->index();
//		}
//		//Error404 page
//		if ( $flag ) {
//			$controllerName = 'Error404';
//			$controller = new $controllerName();
//			$controller->index();
//		}

	}
}
