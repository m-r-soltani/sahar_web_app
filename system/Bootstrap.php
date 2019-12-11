<?php defined('__ROOT__') OR exit('No direct script access allowed');
ini_set('display_errors',1);
//ini_set('file_uploads','on');
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
class Bootstrap
{
	public function __construct()
	{
        /*========ostan========*/
        if(isset($_POST['GetProvinces'])){
            //require_once ('../models/city.php');
            $sql="SELECT * FROM bnm_ostan order by id asc";
            $result=Db::fetchall_Query($sql);
            $rows=json_encode($result);
            echo $rows;
        }
        /*=========shahr========*/
        if(isset($_POST['GetCities'])){
            //require_once ('../models/city.php');
            $sql="SELECT * FROM bnm_shahr order by id asc";
            $result=Db::fetchall_Query($sql);
            $rows=json_encode($result);
            echo $rows;
        }
        /*========sabte ostan========*/
        if(isset($_POST['send_province'])){
            $ostan_name=$_POST['ostan'];
            $db = Db::getInstance();
            $db->query("INSERT INTO bnm_ostan (name) VALUES ('$ostan_name')");
        }
        /*========sabte shahr========*/
        if(isset($_POST['send_city'])){
            require_once ('models/city.php');
            $id=$_POST['id'];
            //checking for insert or update
            if($id=="empty"){
                //insert
                getor($_POST['shahr'],"");
                getor($_POST['entekhab_ostan'],"");
                $result=Insert_city($_POST['shahr'],$_POST['entekhab_ostan']);
            }else{
                //update
                $result=Update_city($id,$_POST['shahr'],$_POST['entekhab_ostan']);
            }
        }
        /*========sabte host========*/
        if(isset($_POST['send_popsite'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_popsite');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_popsite',"WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========sabte branch========*/
        if(isset($_POST['send_branch'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_namayandegi');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_namayandegi',"WHERE id = $id");
                Db::justexecute($sql);
            }
            if (isset($_POST['t_logo'])){
                $test=$_POST['t_logo'];
                move_uploaded_file($_POST['t_logo'],__ROOT__.$test);
            }
        }
        /*========sabte host========*/
        if(isset($_POST['send_host'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_host');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_host',"WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========sabte pre_number========*/
        if(isset($_POST['send_organization_level'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_organization_level');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_organization_level',"WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========sabte pre_number========*/
        if(isset($_POST['send_pre_number'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_pre_number');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_pre_number',"WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========wireless_ap========*/
        if(isset($_POST['send_wireless_ap'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_wireless_ap');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_wireless_ap',"WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========wireless_ap========*/
        if(isset($_POST['send_wireless_station'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_wireless_station');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_wireless_station',"WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========sabte terminal========*/
        if(isset($_POST['send_terminal'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_terminal');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_terminal',"WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========sabte telecommunications_center========*/
        if(isset($_POST['send_telecommunications_center'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_telecommunications_center');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_telecommunications_center',"WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========sabte operator========*/
        if(isset($_POST['send_operator'])){
            if($_POST['id']=="empty") {
                $sql = Insert_Generator($_POST, 'bnm_operator');
                Db::justexecute($sql);
            }else{
                $id=$_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_operator',"WHERE id = $id");
                Db::justexecute($sql);
            }
        }
        /*==========edit form============*/
        if(isset($_POST['Edit_Form'])){
            $page=$_POST['Edit_Form'];
            switch ($page){
                case 'organization_level':
                    $id=$_POST['condition'];
                    $sql="SELECT * FROM bnm_organization_level WHERE id='$id'";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'city':
                    $condition=$_POST['condition'];
                    $sql="SELECT * FROM bnm_shahr WHERE name='$condition'";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'wireless_ap':
                    $id=$_POST['condition'];
                    $sql="SELECT * FROM bnm_wireless_ap WHERE id=$id";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'wireless_station':
                    $id=$_POST['condition'];
                    $sql="SELECT * FROM bnm_wireless_station WHERE id=$id";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'popsite':
                    $id=$_POST['condition'];
                    $sql="SELECT * FROM bnm_popsite WHERE id=$id";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'host':
                    $id=$_POST['condition'];
                    $sql="SELECT * FROM bnm_host WHERE id=$id";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'terminal':
                    $condition=$_POST['condition'];
                    $sql="SELECT * FROM bnm_terminal WHERE id='$condition'";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'pre_number':
                    $condition=$_POST['condition'];
                    $sql="SELECT * FROM bnm_pre_number WHERE id='$condition'";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'branch':
                    $condition=$_POST['condition'];
                    $sql="SELECT * FROM bnm_namayandegi WHERE name_sherkat='$condition'";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'operator':
                    $condition=$_POST['condition'];
                    $sql="SELECT * FROM bnm_operator WHERE name='$condition'";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
                case 'telecommunications_center':
                    $condition=$_POST['condition'];
                    $sql="SELECT * FROM bnm_telecommunications_center WHERE name='$condition'";
                    $result=Db::fetchall_Query($sql);
                    $rows=json_encode($result);
                    echo $rows;
                    break;
            }
        }
/*==========hard delete============*/
        if(isset($_POST['harddelete'])){
            $target=$_POST['target'];
            switch ($target){
                case 'city':
                    $name=$_POST['harddelete'];
                    $sql="delete FROM bnm_shahr WHERE name = '$name'";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'wireless_station':
                    $id=$_POST['harddelete'];
                    $sql="delete FROM bnm_wireless_station WHERE id = $id";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'organization_level':
                    $id=$_POST['harddelete'];
                    $sql="delete FROM bnm_organization_level WHERE id = $id";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'wireless_ap':
                    $id=$_POST['harddelete'];
                    $sql="delete FROM bnm_wireless_ap WHERE id = $id";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'popsite':
                    $id=$_POST['harddelete'];
                    $sql="delete FROM bnm_popsite WHERE id = $id";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'host':
                    $id=$_POST['harddelete'];
                    $sql="delete FROM bnm_host WHERE id = '$id'";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'terminal':
                    $id=$_POST['harddelete'];
                    $sql="delete FROM bnm_terminal WHERE id = '$id'";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'pre_number':
                    $id=$_POST['harddelete'];
                    $sql="delete FROM bnm_pre_number WHERE id = '$id'";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'branch':
                    $name=$_POST['harddelete'];
                    $sql="delete FROM bnm_namayandegi WHERE name_sherkat = '$name'";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'operator':
                    $name=$_POST['harddelete'];
                    $sql="delete FROM bnm_operator WHERE name = '$name'";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
                case 'telecommunications_center':
                    $name=$_POST['harddelete'];
                    $sql="delete FROM bnm_telecommunications_center WHERE name = '$name'";
                    $result=Db::justexecute($sql);
                    if($result) {
                        echo true;
                    }else{
                        echo false;
                    }
                    break;
            }
        }
		// 1. router
		if (isset ($_GET['path'])) {
			$tokens = explode('/', rtrim($_GET['path'], '/'));

			//print_r($tokens);
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
