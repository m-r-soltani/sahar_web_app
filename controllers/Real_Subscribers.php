<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Real_Subscribers extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='real_subscribers';
        $this->view->render('real_subscribers','dashboard_template','/public/js/real_subscribers.js',false);

    }
}
