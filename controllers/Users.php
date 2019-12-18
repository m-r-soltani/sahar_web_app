<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Users extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
//		$this->view->allUsers = R::findAll( 'bnm_users' );
//		$this->view->title = 'کاربران';
		$this->view->render('users','dashboard_template','/public/js/users.js');
	}
}
