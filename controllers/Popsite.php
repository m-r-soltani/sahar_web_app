<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Popsite extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='popsite';
        $this->view->render('popsite','dashboard_template','/public/js/popsite.js',false);

    }
}
