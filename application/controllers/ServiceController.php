<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller {

    public function index()
    {
        $this->load->view('service/login');
    }

    public function admin()
    {
        $this->load->view('service/main');
    }
}
