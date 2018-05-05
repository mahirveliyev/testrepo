<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

     public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
      }

    public function index()
    {
        $this->load->view('user/login');
    }

    public function register()
    {
        $this->load->view('user/register');
    }

    public function regAct(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone    = $_POST['phone'];
        $gender   = $_POST['gender'];

        if($this->UserModel->check_email($email) != TRUE){


                    if(!empty($name) && !empty($email) && !empty($password) && !empty($phone) && !empty($gender)  ){
                            $user_array = array(
                                'name' => $name,
                                'email' => $email,
                                'password' => md5($password),
                                'gender' => $phone,
                                'number' => $gender,
                                'status' => '0'
                            );

                            $this->UserModel->insert($user_array);


                        $this->session->set_userdata('register_success','<span style="color:lightgreen">You have registered successfully</span>');
                        redirect(base_url('UserController'));

                    }else{
                        $this->session->set_userdata('register_error','<span style="color:pink">Please fill all blanks for register</span>');
                        redirect(base_url('UserController/register'));
                    }


        }else{
                $this->session->set_userdata('register_error_email','<span style="color:pink">Email already taken</span>');
                redirect(base_url('UserController/register'));
        }
    }



    public function loginAct(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password)){

            
            if($this->UserModel->loginCheck($email,$password) == TRUE){

                    $_SESSION['user_login'] = TRUE;
                    $_SESSION['user_data'] =  $this->UserModel->loginCheck($email,$password);

                    redirect(base_url('UserController/admin'));

            }else{
                $this->session->set_userdata('login_error_email_password','<span style="color:pink">Email or password failed</span>');
                redirect(base_url('UserController'));
            }

        }else{
            $this->session->set_userdata('login_error_empty','<span style="color:pink">Please fill all blanks for login</span>');
            redirect(base_url('UserController'));
        }
    }


    public function insert()
    {
        $this->load->view("user/userAdd");
    }
//  devides insert start
    public function insertAct()
    {
        $devices_name = strip_tags($_POST['devices_name']);
        $devices_desc = strip_tags($_POST['devices_desc']);

        $insertData = array(
            'devices_name' => $devices_name,
            'devices_desc' => $devices_desc,
            'devices_user_id' => $_SESSION['user_data'][0]['id'],
            'devices_completeleness' => 0,
            'devices_status' => 0
        );


        $this->UserModel->insertAdd($insertData);
        redirect(base_url("UserController/admin"));
    }

    public function admin()
    {
        $this->load->view('user/main');
    }

    public function logOut(){

    if(isset($_SESSION['user_login']))
            unset($_SESSION['user_login']);
          redirect(base_url('UserController'));

    }








}
