<?php defined('__ROOT__') OR exit('No direct script access allowed');

class Services extends My_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('services/view',false);
    }
}
