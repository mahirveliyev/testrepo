<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CourierController extends CI_Controller {

    public function index()
    {
        $this->load->view('courier/login');
    }


    public function admin()
    {
        $this->load->view('courier/main');
    }
}
