<?php defined('__ROOT__') OR exit('No direct script access allowed');
class Restrictions extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->pagename='restrictions';
        $this->view->render('restrictions','dashboard_template','/public/js/restrictions.js','/public/js/demo_pages/form_multiselect.js');
    }
}
