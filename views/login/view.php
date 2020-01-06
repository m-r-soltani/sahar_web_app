<?php defined('__ROOT__') OR exit('No direct script access allowed');
function compare_multi_Arrays($array1, $array2){
    $result = array("more"=>array(),"less"=>array(),"diff"=>array());
    foreach($array1 as $k => $v) {
        if(is_array($v) && isset($array2[$k]) && is_array($array2[$k])){
            $sub_result = compare_multi_Arrays($v, $array2[$k]);
            //merge results
            foreach(array_keys($sub_result) as $key){
                if(!empty($sub_result[$key])){
                    $result[$key] = array_merge_recursive($result[$key],array($k => $sub_result[$key]));
                }
            }
        }else{
            if(isset($array2[$k])){
                if($v !== $array2[$k]){
                    $result["diff"][$k] = array("from"=>$v,"to"=>$array2[$k]);
                }
            }else{
                $result["more"][$k] = $v;
            }
        }
    }
    foreach($array2 as $k => $v) {
        if(!isset($array1[$k])){
            $result["less"][$k] = $v;
        }
    }
    return $result;
}
if (isset($_POST["send_login"])) {
    //initializing SESSION on login
    $restrections= '';
    $isadmin='';
    $_SESSION['dashboard_detail'] = array();
    $_SESSION['dashboard_menu_category'] = array();
    $_SESSION['dashboard_menu'] = array();
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
        $_SESSION['dashboard_menu']='%';
        header("Location:" . __ROOT__ . 'dashboard');
    }//user is a modir
    elseif ($modirinfo){
        $_SESSION["user_level"] = 'modir';
        $modirid = $modirinfo[0]['id'];
        //1.id menu hai ke user dastresi dare ro az db migirim
        $restrections = Db::fetchall_Query("SELECT menu_id FROM bnm_access_menu_operator WHERE operator_id='$modirid'");
        $access_list = array();
        if ($restrections) {
            for ($i = 0; $i < count($restrections); $i++) {
                array_push($access_list, $restrections[$i]['menu_id']);
            }
            $first_key = key($access_list);
            end($access_list);
            $lastkey = key($access_list);
            $sql="SELECT * FROM bnm_dashboard_menu WHERE id IN (";
            foreach ($access_list as $key => $value) {
                if($key!=$lastkey){
                    $sql .= "'". $value ."',";
                }else{
                    $sql .= "'".$value."')";
                }
            }
            $_SESSION['dashboard_menu'] = Db::fetchall_Query($sql);

            for ($i = 0; $i < count($_SESSION['dashboard_menu']); $i++) {
                $_SESSION['dashboard_menu_category'][$_SESSION['dashboard_menu'][$i]['category_id']]=array();
            }


            //$keys=array_keys($_SESSION['dashboard_detail']);
            /*for ($i = 0; $i < count($keys); $i++) {
                for ($j=0;$j<count($arr1);$j++){
                    if ($keys[$i]==$arr1[$i]['category_id']){
                        for ($k=0;$k<count($arr1);$k++){
                            if (isset($_SESSION['dashboard_detail'][$keys[$i]][$k]) && is_array($_SESSION['dashboard_detail'][$keys[$i]][$k])){
                            }else{
                                $_SESSION['dashboard_detail'][$keys[$i]][$k]=$arr1[$j];
                            }
                        }
                    }
                }
            }*/
            //print_r($_SESSION['dashboard_detail']);
//            die();
//            for ($i = 0; $i < count($_SESSION['dashboard_detail']); $i++) {
//                for ($j=0;$j<count($_SESSION['dashboard_detail'][$keys[$i]]);$j++) {
//
//                    print_r($_SESSION['dashboard_detail'][$keys[$i]][$j]);
//                    echo "<br>";
//                }
//            }
//            die();
        } else {
            $_SESSION['dashboard_menu'] = false;
        }
        if ($_SESSION['dashboard_menu']) {
            $_SESSION['user_id'] = $modirinfo[0]['id'];
            $_SESSION['name_karbari'] = $modirinfo[0]['username'];
            $_SESSION["loginOk"] = 'yes';
            header("Location:" . __ROOT__ . 'dashboard');
        }else{
            $_SESSION["loginOk"] = 'yes';
            $_SESSION['dashboard_menu']=false;
            $_SESSION['user_id'] = $modirinfo[0]['id'];
            $_SESSION['name_karbari'] = $modirinfo[0]['username'];
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
?>
<html>
<head>
    <title>User Authentication</title>
    <!-- Global stylesheets -->


    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/icons/icomoon/styles.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/bootstrap.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/bootstrap_limitless.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/layout.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/components.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/colors.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/persian-datepicker.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/dataTables.bootstrap4.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/login.css' ?>" />
    <!-- /global stylesheets -->
</head>
<body>
<?php
if (isset($_GET["logout"]) && $_GET["logout"] == 'yes') {
    unset($_SESSION['loginOk']);
}

if (isset($_SESSION["loginOk"])&& $_SESSION["loginOk"] == 'yes') {
    //header("Location:".__ROOT__.'dashboard');
    //echo $_SESSION['loginOk'];
    echo '<div class="container"><h2>شما هم اکنون وارد شده ایید</h2>(<a href=\'?logout=yes\'>Logout</a>)</div>';
    //echo("You are logged in! (<a href='?logout=yes'>Logout</a>)");
    //echo("You are logged in! (<a href='".__ROOT__."dashboard'>داشبورد</a>)");
} else {
    if (isset($_SESSION["loginFailed"])) {
        echo 'Incorrect Username Or Password , Try Again :';
        unset($_SESSION['loginFailed']);
    }
    ?>
    <div class="limiter">
        <div class="container-login100">

            
            <div class="wrap-login100">
                <div class="logo1 col-md-12">
                    <img class="logo1img" src="<?php echo __ROOT__ . 'public/images/logo1.jpg' ?>" alt="IMG">
                </div>
                <br>
                <div class="login100-pic js-tilt " data-tilt>
                    <img src="<?php echo __ROOT__ . '/public/images/login.png' ?>" alt="IMG" style="margin-top: -30px;">
                </div>

                <form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title font-weight-bold loginformlable">
						User Login
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="user" placeholder="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="pass" placeholder="password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn font-weight-bold" name="send_login">
                            Login
                        </button>
                    </div>


                </form>
            </div>
        </div>
        <div class="navbar-collapse login_footer_texts" id="navbar-footer">
                    <span class="navbar-text login_description_text">

					</span>
					<span class="navbar-text login_copy_text">
                        کلیه حقوق این اثر متعلق به شرکت فناوری اطلاعات و ارتباطات شبکه سحر ارتباط میباشد.
                        &copy;2019 - <?php echo date("Y"); ?>
					</span>
        </div>
    </div>

<?php } ?>

</body>
</html>

<!-- Core JS files -->
<script src="<?php echo __ROOT__ . '/public/js/main/jquery.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/main/bootstrap.bundle.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/loaders/blockui.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/datatables.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/extensions/responsive.min.js' ?>"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="<?php echo __ROOT__ . '/public/js/plugins/forms/styling/uniform.min.js' ?>"></script>
<!--<script src="<?php /*echo __ROOT__ . '/public/js/plugins/forms/styling/switchery.min.js' */?>"></script>
<script src="<?php /*echo __ROOT__ . '/public/js/js/plugins/forms/styling/switch.min.js' */?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/plugins/forms/selects/select2.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/extensions/select.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/extensions/buttons.min.js' ?>"></script>
<!--<script src="<?php /*echo __ROOT__ . '/public/js/plugins/editors/datatable/dataTables.altEditor.js' */?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/app.js' ?>"></script>


<!--<script src="<?php /*echo __ROOT__ . '/public/js/demo_pages/form_checkboxes_radios.js' */?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/demo_pages/form_inputs.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/persian-date.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/persian-datepicker.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/functions.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/branch.js' ?>"></script>