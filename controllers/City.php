<?php defined('__ROOT__') OR exit('No direct script access allowed');
class City extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='city';
        $this->view->render('city','dashboard_template','/public/js/city.js',false);
    }
}
