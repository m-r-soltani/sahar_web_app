<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Organization_Level extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
        $this->view->render('organization_level/view',false);
    }
}