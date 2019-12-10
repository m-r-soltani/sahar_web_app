<?php
class Authentication{
    public function __construct(){
        session_start();
    }
    public static function login_request(){
        if(isset($_SESSION['loginuser']) && $_SESSION['loginuser']=='1'){
            //user haslogedin
        }
    }
    public static function logout_request(){
        if(isset($_SESSION['logoutuser']) && $_SESSION['logoutuser']=='1'){
            //user haslogedin
        }
    }
    public static function check_status($data){
        $status= $_SESSION['userstatus'];
        if ($status='active'){
            //its ok
        }elseif($status='deactive'){
            //log him out
        }
    }
}
