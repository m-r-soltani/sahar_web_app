<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Terminal extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='terminal';
        $this->view->render('terminal','dashboard_template','/public/js/terminal.js',false);

    }
}
