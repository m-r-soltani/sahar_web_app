<?php
class Helper{
    public static function file_upload($file,$path=__ROOT__.'public/images/panel_images/'){
        move_uploaded_file($file,$path);
    }
}