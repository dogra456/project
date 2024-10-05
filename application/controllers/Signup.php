
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Signup extends CI_Controller{

    public  function __construct(){
        parent::__construct();
        $this->load->model('Signup_model');
    }

    public function index(){

        $data['message']='';

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            
            $signup_data=array();
            $signup_data['username']=$this->input->post('username');
            $signup_data['password']=$this->input->post('password');
            $signup_data['fullname']=$this->input->post('fullname');
            $signup_data['email']=$this->input->post('email');
            $signup_data['address']=$this->input->post('address');
            $signup_data['phone_number']=$this->input->post('phone_number');

            $flag=$this->Signup_model->save($signup_data);

            if ($flag==true) {
                redirect('login');
            }
            else{
                $data['message']="try  aagain";
            }
        }


        $this->load->view('signup');
    }
  }
