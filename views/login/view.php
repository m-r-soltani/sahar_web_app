<?php
//if (isset($_POST["send_login"])) {
//    if ($_POST["user"] == "admin" && $_POST["pass"] == "admin") {
//        $_SESSION["loginOk"] = 'yes';
//        header("Location:".__ROOT__.'dashboard');
//    } else {
//        $_SESSION["loginFailed"] = 'yes';
//        header("location:".__ROOT__);
//    }
//}
?>
<html>
<head>
    <title>User Authentication</title>
    <!-- Global stylesheets -->
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/main.css' ?>" />

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
            <img class="row" src="<?php echo __ROOT__ . 'public/images/logo1.jpg' ?>" alt="IMG">
            
            <div class="wrap-login100">

                <div class="login100-pic js-tilt " data-tilt>
                    <img src="<?php echo __ROOT__ . '/public/images/login.png' ?>" alt="IMG">
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