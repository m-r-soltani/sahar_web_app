<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Modir extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='modir';
        $this->view->render('modir','dashboard_template','/public/js/modir.js',false);
    }
}
