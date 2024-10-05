<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Checkout_model');
        $this->load->model('Cart_model');
          if (!is_login()) {
            redirect("login");// if not login to throw user into login  //
        }
    }

    
    public function index()
    {

        $user_id = get_user_id();
       
        $condition['user_id'] = get_user_id();
        $data = array();
        $data['result_p'] = $this->Checkout_model->getuserinfo($user_id);
        $data['result_r'] = $this->Cart_model->read($condition)->result();

        $data['main_content'] = 'checkout';
        $this->load->view('common/template',$data);
    }


}