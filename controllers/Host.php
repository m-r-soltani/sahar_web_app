<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Host extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='host';
        $this->view->render('host','dashboard_template','/public/js/host.js',false);

    }
}
