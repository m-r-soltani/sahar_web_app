<?php defined('__ROOT__') OR exit('No direct script access allowed');
class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //$sql="SELECT * from bnm_administrators";
        //$res=Db::fetchall_Query($sql);

        $_SESSION['admin_users']=array('admin','superadmin','siamak_manochehry','super_admin','mainadmin','main_admin');
        $this->view->render('login/view',false);
    }
}
