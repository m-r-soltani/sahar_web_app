<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Operator extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='operator';
        $this->view->render('operator','dashboard_template','/public/js/operator.js',false);
    }
}
