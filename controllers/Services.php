<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Services extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->pagename='services';
        $this->view->render('services','dashboard_template','/public/js/services.js',false);

    }
}
