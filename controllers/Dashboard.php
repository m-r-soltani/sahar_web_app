<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Dashboard extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        //$this->view->render('dashboard/view','dashboard/dashboard_sidemenu');
        $this->view->home='داشبورد';
        //$this->view->page='داشبورد';
        $this->view->render('dashboard','dashboard_template','/public/js/demo_pages/dashboard.js',false);

    }
}
