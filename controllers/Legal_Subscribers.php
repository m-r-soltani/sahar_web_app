<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Legal_Subscribers extends My_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->render('legal_subscribers/view',false);
    }
}
