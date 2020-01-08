<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Telecommunications_Center extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='telecommunications_center';
        $this->view->render('telecommunications_center','dashboard_template','/public/js/telecommunications_center.js',false);

    }
}
