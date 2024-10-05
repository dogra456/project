<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Order_item extends CI_Controller {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('order_item_model');
        $this->load->model('Product_model');
        $this->load->model('Cart_model');

    }

  public function index() {
    $data = array();
    $data["user_id"] = get_user_id();
    
    // Retrieve order_id from query parameters
    $data["order_id"] = $this->input->get('order_id');
    
    
    // Initialize result
   // $result = array();
    
    // Check if order_id is provided
    if ($data["order_id"]) {
        // Fetch order items based on order_id
        $result = $this->order_item_model->check_items($data)->result();
        // Pass the results to the view
        $data['results'] = $result;
    } else {
        // Fetch order history for the user
        $data['results'] = $this->order_item_model->check_items($data)->result();
    }

    // Set the main content and load the view
    $data['result_p'] = $this->Product_model->getProduct();
     $data["header_data"] = $this->Cart_model->read($condition)->result();
    $data['main_content'] = 'order_item';
    $this->load->view('common/template', $data);
}



    

   

}

 


?>