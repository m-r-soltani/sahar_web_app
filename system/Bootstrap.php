<?php defined('__ROOT__') OR exit('No direct script access allowed');
ini_set('display_errors', 1);
//ini_set('file_uploads','on');
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Bootstrap
{
    public function __construct()
    {
        if (isset($_POST["send_login"])) {
            //initializing SESSION on login
            $restrections = '';
            $_SESSION['dashboard_detail'] = array();
            $name_karbari = $_POST["user"];
            $ramze_obor = $_POST["pass"];
            //check if user is admin
            if (in_array($name_karbari, $_SESSION['admin_users'])) {
                //checking admin user & pass
                $isadmin = Db::fetchall_Query("SELECT * from bnm_administrators WHERE username='$name_karbari' and password='$ramze_obor'");
            }else{
                //check modir
                $modirinfo = Db::fetchall_Query("SELECT * from bnm_modir WHERE name_karbari='$name_karbari' and ramze_obor='$ramze_obor'");
                $userinfo = Db::fetchall_Query("SELECT * FROM bnm_operator WHERE name_karbari='$name_karbari' AND ramze_obor='$ramze_obor'");
            }
            //user is admin
            if ($isadmin) {
                $_SESSION['user_id'] = $isadmin[0]['id'];
                $_SESSION['name_karbari'] = $isadmin[0]['username'];
                $_SESSION["loginOk"] = 'yes';
                $_SESSION["user_level"] = 'admin';
                $_SESSION['dashboard_detail']='%';
                header("Location:" . __ROOT__ . 'dashboard');
            }//user is a modir
            elseif ($modirinfo){
                $_SESSION["user_level"] = 'modir';
                $modirid = $modirinfo[0]['id'];
                $restrections = Db::fetchall_Query("SELECT menu_id FROM bnm_access_menu_operator WHERE operator_id='$modirid'");
                $access_list = array();
                if ($restrections) {
                    for ($i = 0; $i < count($restrections); $i++) {
                        array_push($access_list, $restrections[$i]['menu_id']);
                    }
                    for ($i = 0; $i < count($access_list); $i++) {
                        $menu_id = $access_list[$i];
                        $_SESSION['dashboard_detail'][$i] = Db::fetch_assoc("select en_name,fa_name,category_id from bnm_dashboard_menu WHERE id=$menu_id");
                    }
                    for ($i = 0; $i < count($_SESSION['dashboard_detail']); $i++) {
                        for ($j = 0; $j < count($_SESSION['dashboard_detail'][$i]); $j++) {
                            $dash_det_catid = $_SESSION['dashboard_detail'][$i][$j]['category_id'];
                            $menu_category[$i] = Db::fetchall_Query("SELECT id,name FROM bnm_dashboard_menu_category WHERE id=$dash_det_catid");
                        }
                    }
                    for ($i = 0; $i < count($_SESSION['dashboard_detail']); $i++) {
                        for ($j = 0; $j < count($_SESSION['dashboard_detail'][$i]); $j++) {
                            if ($_SESSION['dashboard_detail'][$i][$j]['category_id'] == $menu_category[$i][$j]['id']) {
                                $_SESSION['dashboard_detail'][$i][$j]['category_name'] = $menu_category[$i][$j]['name'];
                            }
                        }
                    }
                } else {
                    $_SESSION['dashboard_detail'] = 'no_access';
                }if ($modirinfo) {
                    $_SESSION['user_id'] = $modirinfo[0]['id'];
                    $_SESSION['name_karbari'] = $modirinfo[0]['username'];
                    $_SESSION["loginOk"] = 'yes';
                    header("Location:" . __ROOT__ . 'dashboard');
                }
            }//user is an operator
            elseif ($userinfo) {
                    $_SESSION["user_level"] = 'operator';
                    $userid = $userinfo[0]['id'];
                    $restrections = Db::fetchall_Query("SELECT menu_id FROM bnm_access_menu_operator WHERE operator_id=$userid");
                    $access_list = array();
                    if ($restrections) {
                        for ($i = 0; $i < count($restrections); $i++) {
                            array_push($access_list, $restrections[$i]['menu_id']);
                        }
                        for ($i = 0; $i < count($access_list); $i++) {
                            $menu_id = $access_list[$i];
                            $_SESSION['dashboard_detail'][$i] = Db::fetch_assoc("select en_name,fa_name,category_id from bnm_dashboard_menu WHERE id=$menu_id");
                        }
                        for ($i = 0; $i < count($_SESSION['dashboard_detail']); $i++) {
                            for ($j = 0; $j < count($_SESSION['dashboard_detail'][$i]); $j++) {
                                $dash_det_catid = $_SESSION['dashboard_detail'][$i][$j]['category_id'];
                                $menu_category[$i] = Db::fetchall_Query("SELECT id,name FROM bnm_dashboard_menu_category WHERE id=$dash_det_catid");
                            }
                        }
                        for ($i = 0; $i < count($_SESSION['dashboard_detail']); $i++) {
                            for ($j = 0; $j < count($_SESSION['dashboard_detail'][$i]); $j++) {
                                if ($_SESSION['dashboard_detail'][$i][$j]['category_id'] == $menu_category[$i][$j]['id']) {
                                    $_SESSION['dashboard_detail'][$i][$j]['category_name'] = $menu_category[$i][$j]['name'];
                                }
                            }
                        }
                    } else {
                        $_SESSION['dashboard_detail'] = 'no_access';
                    }
                    if ($userinfo) {
                        $_SESSION['user_id'] = $userinfo[0]['id'];
                        $_SESSION['name_karbari'] = $userinfo[0]['name_karbari'];
                        $_SESSION["loginOk"] = 'yes';
                        header("Location:" . __ROOT__ . 'dashboard');
                    }
                }//no user found
                else {
                    $_SESSION["loginFailed"] = 'yes';
                    header("Location:" . __ROOT__ . 'login');
                }

        }
        /*========levels========*/
        if (isset($_POST['Get_organization_levels'])) {
            //require_once ('../models/city.php');
            $sql = "SELECT * FROM bnm_organization_level order by id asc";
            $result = Db::fetchall_Query($sql);
            $rows = json_encode($result);
            die($rows);
        }
        /*========branch========*/
        if (isset($_POST['get_branch_info'])) {
            //require_once ('../models/city.php');
            $sql = "SELECT id,name_sherkat FROM bnm_branch";
            $result = Db::fetchall_Query($sql);
            $rows = json_encode($result);
            die($rows);
        }
        /*========ostan========*/
        if (isset($_POST['GetProvinces'])) {
            //require_once ('../models/city.php');
            $sql = "SELECT * FROM bnm_ostan order by id asc";
            $result = Db::fetchall_Query($sql);
            $rows = json_encode($result);
            die($rows);
        }
        /*=========shahr========*/
        if (isset($_POST['GetCities'])) {
            //require_once ('../models/city.php');
            $sql = "SELECT * FROM bnm_shahr order by id asc";
            $result = Db::fetchall_Query($sql);
            $rows = json_encode($result);
            die($rows);
        }
        /*=========++shahrbyid++========*/
        if (isset($_POST['getcitybyprovince'])) {
            //require_once ('../models/city.php');
            $id = $_POST['getcitybyprovince'];
            $sql = "SELECT * FROM bnm_shahr WHERE ostan_id=$id";
            $result = Db::fetchall_Query($sql);
            $rows = json_encode($result);
            die($rows);
        }
        if (isset($_POST['gethost'])) {
            //require_once ('../models/city.php');
            //$id=$_POST['getcitybyprovince'];
            $sql = "SELECT id,name_service_dahande FROM bnm_host";
            $result = Db::fetchall_Query($sql);
            $rows = json_encode($result);
            die($rows);
        }
        if (isset($_POST['getpopsite'])) {
            //require_once ('../models/city.php');
            //$id=$_POST['getcitybyprovince'];
            $sql = "SELECT id,name_dakal FROM bnm_popsite";
            $result = Db::fetchall_Query($sql);
            $rows = json_encode($result);
            die($rows);
        }
        if (isset($_POST['get_telecommunications_center'])) {
            $sql = "SELECT id,name FROM bnm_telecommunications_center";
            $result = Db::fetchall_Query($sql);
            $rows = json_encode($result);
            die($rows);
        }
        /*========sabte ostan========*/
        if (isset($_POST['send_province'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_ostan');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_ostan', "WHERE id = $id");
                Db::justexecute($sql);
            }
        }
        /*========sabte modir========*/
        if (isset($_POST['send_modir'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_modir');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_modir', "WHERE id = $id");
                Db::justexecute($sql);
            }
        }
        /*========tax========*/
        if (isset($_POST['send_tax'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_tax');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_tax', "WHERE id = $id");
                Db::justexecute($sql);
            }
        }
        /*========levels========*/
        if (isset($_POST['send_organization_level'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_organization_level');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_organization_level', "WHERE id = $id");
                Db::justexecute($sql);
            }
        }
        /*========sabte shahr========*/
        if (isset($_POST['send_city'])) {
            require_once('models/city.php');
            $id = $_POST['id'];
            //checking for insert or update
            if ($id == "empty") {
                //insert
                getor($_POST['shahr'], "");
                getor($_POST['entekhab_ostan'], "");
                $result = Insert_city($_POST['shahr'], $_POST['entekhab_ostan']);
            } else {
                //update
                $result = Update_city($id, $_POST['shahr'], $_POST['entekhab_ostan']);
            }
        }
        /*========popsite========*/
        if (isset($_POST['send_popsite'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_popsite');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_popsite', "WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========host========*/
        if (isset($_POST['send_restrictions'])) {
            $user = $_POST['karbar'];
            if (isset($_POST['menu_access'])) {
                $menu_access = $_POST['menu_access'];
                $sql = "delete FROM bnm_access_menu_operator WHERE operator_id=$user";
                $result = Db::justexecute($sql);
                if ($result) {
                    foreach ($menu_access as $key => $value) {
                        $sql = "INSERT INTO bnm_access_menu_operator (menu_id,operator_id) VALUES ($value,$user)";
                        $result = Db::justexecute($sql);
                    }
                }
            }
            if (isset($_POST['edit_access'])) {
                $edit_access = $_POST['edit_access'];
                $sql = "delete FROM bnm_edit_menu_operator WHERE operator_id=$user";
                $result = Db::justexecute($sql);
                if ($result) {
                    foreach ($edit_access as $key => $value) {
                        $sql = "INSERT INTO bnm_edit_menu_operator (menu_id,operator_id) VALUES ('$value','$user')";
                        $result = Db::justexecute($sql);
                    }
                }
            }
            if (isset($_POST['add_access'])) {
                $add_access = $_POST['add_access'];
                $sql = "delete FROM bnm_delete_menu_operator WHERE operator_id=$user";
                $result = Db::justexecute($sql);
                if ($result) {
                    foreach ($add_access as $key => $value) {
                        $sql = "INSERT INTO bnm_delete_menu_operator (menu_id,operator_id) VALUES ('$value','$user')";
                        $result = Db::justexecute($sql);
                    }
                }
            }
            if (isset($_POST['add_access'])) {
                $add_access = $_POST['add_access'];
                $sql = "delete FROM bnm_add_menu_operator WHERE operator_id=$user";
                $result = Db::justexecute($sql);
                if ($result) {
                    foreach ($add_access as $key => $value) {
                        $sql = "INSERT INTO bnm_add_menu_operator (menu_id,operator_id) VALUES ('$value','$user')";
                        $result = Db::justexecute($sql);
                    }
                }
            }

            header("Location:" . __ROOT__ . 'restrictions');
        }
        /*========host========*/
        if (isset($_POST['send_services_adsl'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_services');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_services', "WHERE id = $id");
                Db::justexecute($sql);
            }
        }
        /*========host========*/
        if (isset($_POST['send_services_wireless'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_services');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_services', "WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========host========*/
        if (isset($_POST['send_services_tdlte'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_services');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_services', "WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========host========*/
        if (isset($_POST['send_services_voip'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_services');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_services', "WHERE id = $id");
                Db::justexecute($sql);
            }
        }
        /*========real_subscribers========*/
        if (isset($_POST['send_real_subscribers'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_subscribers');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $exceptions = array("r_t_karte_meli", "r_t_ghabze_telephone", "r_t_ejare_malekiat", "r_t_gharardad", "r_t_sayer");
                $sql = Update_Generator($_POST, 'bnm_subscribers', "WHERE id = $id", $exceptions);
                Db::justexecute($sql);
            }
        }
        /*========legal_subscribers========*/
        if (isset($_POST['send_legal_subscribers'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_subscribers');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $exceptions = array("l_t_agahie_tasis", "l_t_saheb_kartemeli_emzaye_aval", "l_t_saheb_kartemeli_emzaye_dovom", "l_t_kartemeli_namayande", "l_t_akharin_taghirat",
                    "l_t_moarefiname_namayande", "l_t_ghabze_telephone", "l_t_gharardad", "l_t_ejarename_malekiat", "l_t_sayer");
                $sql = Update_Generator($_POST, 'bnm_subscribers', "WHERE id = $id", $exceptions);
                Db::justexecute($sql);
            }

        }
        /*========sabte branch========*/
        if (isset($_POST['send_branch'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_branch');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $exceptions = array("t_logo", "t_mohiti", "t_tablo", "t_code_eghtesadi", "t_rozname_tasis", "t_shenase_meli", "t_akharin_taghirat");
                $sql = Update_Generator($_POST, 'bnm_branch', "WHERE id = $id", $exceptions);
                Db::justexecute($sql);
            }
            if (isset($_POST['t_logo'])) {
                $test = $_POST['t_logo'];
                move_uploaded_file($_POST['t_logo'], __ROOT__ . $test);
            }
        }
        /*========sabte host========*/
        if (isset($_POST['send_host'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_host');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_host', "WHERE id = $id", array("t_logo"));
                Db::justexecute($sql);
            }

        }
        /*========sabte pre_number========*/
        if (isset($_POST['send_pre_number'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_pre_number');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_pre_number', "WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========wireless_ap========*/
        if (isset($_POST['send_wireless_ap'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_wireless_ap');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_wireless_ap', "WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========wireless_ap========*/
        if (isset($_POST['send_wireless_station'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_wireless_station');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_wireless_station', "WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========sabte terminal========*/
        if (isset($_POST['send_terminal'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_terminal');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_terminal', "WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*========sabte telecommunications_center========*/
        if (isset($_POST['send_telecommunications_center'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_telecommunications_center');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $sql = Update_Generator($_POST, 'bnm_telecommunications_center', "WHERE id = $id");
                Db::justexecute($sql);
            }

        }
        /*================initializing=================*/
        if (isset($_POST['send_operator'])) {
            if ($_POST['id'] == "empty") {
                $sql = Insert_Generator($_POST, 'bnm_operator');
                Db::justexecute($sql);
            } else {
                $id = $_POST['id'];
                $exceptions = array("t_karte_meli", "t_shenasname", "t_madrake_tahsili", "t_chehre");
                $sql = Update_Generator($_POST, 'bnm_operator', "WHERE id = $id", $exceptions);
                Db::justexecute($sql);
            }
        }
        if (isset($_POST['initialize_request'])) {
            //kharhaye avalie baraye namayeshe form ha
            $page = $_POST['initialize_request'];
            switch ($page) {
                case 'restrictions_menu':
                    if($_SESSION['user_level']=='admin') {
                        $sql = "select * from bnm_dashboard_menu WHERE category_id <> '1'";
                        $result = Db::fetchall_Query($sql);
                        $rows = json_encode($result);
                        die($rows);
                    }else{
                        $rows = json_encode($_SESSION['dashboard_detail']);
                        die($rows);
                    }
                    break;
                case 'restrictions_users':
                    $sql = "select id,name_karbari from bnm_modir";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;

            }
        }
        /*==========edit form============*/
        if (isset($_POST['Edit_Form'])) {
            $page = $_POST['Edit_Form'];
            switch ($page) {
                case 'organization_level':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_organization_level WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'modir':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_modir WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'services_voip':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_services WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'ostan':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_ostan WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'tax':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_tax WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'services_adsl':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_services WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'services_wireless':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_services WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'services_tdlte':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_services WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'real_subscribers':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_subscribers WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'legal_subscribers':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_subscribers WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'city':
                    $condition = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_shahr WHERE name='$condition'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'wireless_ap':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_wireless_ap WHERE id=$id";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'wireless_station':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_wireless_station WHERE id=$id";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'popsite':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_popsite WHERE id=$id";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'host':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_host WHERE id=$id";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'terminal':
                    $condition = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_terminal WHERE id='$condition'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'pre_number':
                    $condition = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_pre_number WHERE id='$condition'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'branch':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_branch WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'operator':
                    $condition = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_operator WHERE name='$condition'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'telecommunications_center':
                    $id = $_POST['condition'];
                    $sql = "SELECT * FROM bnm_telecommunications_center WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
            }
        }
        /*==========hard delete============*/
        if (isset($_POST['harddelete'])) {
            $target = $_POST['target'];
            switch ($target) {
                case 'city':
                    $name = $_POST['harddelete'];
                    $sql = "delete FROM bnm_shahr WHERE name = '$name'";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                case 'modir':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_shahr WHERE id = '$id'";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'ostan':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_ostan WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'tax':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_tax WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'wireless_station':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_wireless_station WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'services_adsl':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_services WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'services_wireless':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_services WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'services_tdlte':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_services WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'services_voip':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_services WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'organization_level':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_organization_level WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                case 'real_subscribers':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_subscribers WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'legal_subscribers':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_subscribers WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'wireless_ap':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_wireless_ap WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'popsite':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_popsite WHERE id = $id";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'host':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_host WHERE id = '$id'";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'terminal':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_terminal WHERE id = '$id'";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'pre_number':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_pre_number WHERE id = '$id'";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'branch':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_branch WHERE id = '$id'";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'operator':
                    $name = $_POST['harddelete'];
                    $sql = "delete FROM bnm_operator WHERE name = '$name'";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
                case 'telecommunications_center':
                    $id = $_POST['harddelete'];
                    $sql = "delete FROM bnm_telecommunications_center WHERE id = '$id'";
                    $result = Db::justexecute($sql);
                    if ($result) {
                        die(true);
                    } else {
                        die(false);
                    }
                    break;
            }
        }
        // 1. router

        /*========ostan========*/
        if (isset($_POST['factors_initialize'])) {
            //require_once ('../models/city.php');
            switch ($_POST['factors_initialize']) {
                case 'findbyid':
//                    $id=$_POST['condition'];
//                    $sql="SELECT * FROM bnm_subscribers WHERE id=$id";
//                    $result=Db::fetchall_Query($sql);
//                    $rows=json_encode($result);
//                    die($rows);
//                    break;
                case 'adsl_services':
                    //$id=$_POST['condition'];
                    $sql = "SELECT * FROM bnm_services WHERE type='adsl'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'wireless_services':
                    //$id=$_POST['condition'];
                    $sql = "SELECT * FROM bnm_services WHERE type='wireless'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'tdlte_services':
                    //$id=$_POST['condition'];
                    $sql = "SELECT * FROM bnm_services WHERE type='tdlte'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'voip_services':
                    //$id=$_POST['condition'];
                    $sql = "SELECT * FROM bnm_services WHERE type='voip'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'sefareshe_jadid_serviceslist_li':
                    $id = $_POST['condition'];
                    $sql = "select * FROM bnm_services WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'factors_serviceslist_li':
                    $id = $_POST['condition'];
                    $sql = "select * FROM bnm_services WHERE id='$id'";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
                case 'factors':
                    $id = $_POST['condition'];
                    $sql = "select * FROM bnm_services";
                    $result = Db::fetchall_Query($sql);
                    $rows = json_encode($result);
                    die($rows);
                    break;
            }

        }

        if (isset ($_GET['path'])) {
            $tokens = explode('/', rtrim($_GET['path'], '/'));
            ///////////////////////////////+++++++++++++-----static value------+++++++++++///////////////////////////////////////
            $restrections = array('city', 'dashboard', 'province', 'branch', 'host');
            ///////////////////////////////+++++++++++++-----static value------+++++++++++///////////////////////////////////////
            // 2. Dispatcher
            $controllerName = ucfirst(array_shift($tokens));
            $real_controllerName = strtolower($controllerName);
            if (file_exists('Controllers/' . $controllerName . '.php')) {
                $controller = new $controllerName();
                if (!empty($tokens)) {
                    $actionName = array_shift($tokens);
                    if (method_exists($controller, $actionName)) {
                        $controller->{$actionName}(@$tokens);
                    } else {
                        //if action not found error page
                        $flag = TRUE;
                    }
                } else {
                    // default action
                    //checking user login
                    //$_SESSION['access_list']
                    if (in_array($real_controllerName, $restrections)) {
                        if (isset($_SESSION['loginOk']) && $_SESSION['loginOk'] == 'yes') {
                            $controller->index();
                        } else {
                            //if not authenticated
                            $controllerName = 'Login';
                            $controller = new $controllerName();
                            $controller->index();
                        }
                    } else {
                        $controller->index();
                    }


                }
            } else {
                $controllerName = 'Error404';
                $controller = new $controllerName();
                $controller->index();
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
