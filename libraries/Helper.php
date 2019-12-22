<?php
class Helper{
    public static function file_upload($file,$path=__ROOT__.'public/images/panel_images/'){
        move_uploaded_file($file,$path);
    }
    public static function passwordhash($data){
        return password_hash($data,PASSWORD_DEFAULT);
    }
    public static function passwordverify($data,$phrase){
        return password_verify($data,$phrase);
    }
}