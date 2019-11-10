<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Wireless_Ap extends My_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->render('wireless_ap/view',false);
    }
}
