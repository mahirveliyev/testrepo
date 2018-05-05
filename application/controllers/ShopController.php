<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShopController extends CI_Controller {

    public function index()
    {
        $this->load->view('shop/login');
    }

    public function admin()
    {
        $this->load->view('shop/main');
    }
}
