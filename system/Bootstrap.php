<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Bootstrap
{
	public function __construct() 
	{
        /*========sabte ostan========*/
        if(isset($_POST['send_province'])){
            $ostan_name=$_POST['ostan'];
            $db = Db::getInstance();
            $db->query("INSERT INTO bnm_ostan (name) VALUES ('$ostan_name')");
        }
        /*========sabte branch========*/
        if(isset($_POST['send_branch'])){
            require_once ('models/branch.php');
            $id=$_POST['id'];
            $name_sherkat=getor($_POST['name_sherkat'],"");
            $shomare_sabt=getor($_POST['shomare_sabt'],"");
            $code_eghtesadi=getor($_POST['code_eghtesadi'],"");
            $shenase_meli=getor($_POST['shenase_meli'],"");
            $noe_sherkat=getor($_POST['noe_sherkat'],"");
            $website=getor($_POST['website'],"");
            $email=getor($_POST['email'],"");
            $telephone1=getor($_POST['telephone1'],"");
            $telephone2=getor($_POST['telephone2'],"");
            $dornegar=getor($_POST['dornegar'],"");
            $ostan=getor($_POST['ostan'],"");
            $shahr=getor($_POST['shahr'],"");
            $code_posti=getor($_POST['code_posti'],"");
            $address=getor($_POST['address'],"");
            $t_logo=getor($_POST['t_logo'],"");
            $t_mohiti=getor($_POST['t_mohiti'],"");
            $t_tablo=getor($_POST['t_tablo'],"");
            $t_code_eghtesadi=getor($_POST['t_code_eghtesadi'],"");
            $t_rozname_tasis=getor($_POST['t_rozname_tasis'],"");
            $t_shenase_meli=getor($_POST['t_shenase_meli'],"");
            $t_akharin_taghirat=getor($_POST['t_akharin_taghirat'],"");
            //checking for insert or update
            if($id=="empty"){
                $result=Insert_branch($name_sherkat,$shomare_sabt,$code_eghtesadi,$shenase_meli,
                    $noe_sherkat,$website,$email,$telephone1,$telephone2,$dornegar,$ostan,$shahr,
                    $code_posti,$address, $t_logo,$t_mohiti,$t_tablo,$t_code_eghtesadi,$t_rozname_tasis,
                    $t_shenase_meli,$t_akharin_taghirat);
            }else{
                //update
                $result=Update_branch($id,$name_sherkat,$shomare_sabt,$code_eghtesadi,$shenase_meli,$noe_sherkat,$website
                    ,$email,$telephone1,$telephone2,$dornegar,$ostan,$shahr,$code_posti,$address,
                    $t_logo,$t_mohiti,$t_tablo,$t_code_eghtesadi,$t_rozname_tasis,$t_shenase_meli,
                    $t_akharin_taghirat);
            }
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
        if(isset($_POST['GetProvinces'])){
            //require_once ('../models/city.php');
            $sql="SELECT * FROM bnm_ostan order by id asc";
            $result=Db::fetchall_Query($sql);
            $rows=json_encode($result);
            echo $rows;
        }
        /*==========edit form============*/
        if(isset($_POST['Edit_Form'])){
            $page=$_POST['Edit_Form'];
            switch ($page){
                case 'city':
                    $condition=$_POST['condition'];
                    $sql="SELECT * FROM bnm_shahr WHERE name='$condition'";
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
            }
        }
/*======================*/

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
