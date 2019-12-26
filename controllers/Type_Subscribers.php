<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Type_Subscribers extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->render('type_subscribers','dashboard_template','/public/js/type_subscribers.js',false);

    }
}
