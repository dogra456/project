<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Cart_model");

        if (!is_login()) {
            redirect("login");// if not login to throw user into login  //
        }
    }

    public function index()
    {
        $data = array();
        $data["main_content"] = "cart";
        $data["base_url"] = $this->config->item("base_url");   // converting the baseurl function into variable

        $user_id = get_user_id();

        if ($this->input->method() == "post") {    // to check if form is submitted or not
            $formData = array();
            $formData["user_id"] = $user_id;
            $formData["qty"] = $this->input->post("qty"); 
            $formData["product_id"] = $this->input->post("last_id");

            
            
            $condition = array();        //for check condition
            $condition["user_id"] = $user_id;
            $condition["product_id"] = $formData["product_id"];

            $check_result = $this->Cart_model->read($condition)->row();  // read the cart products //

            if ($check_result) {      // if the data is already exits it run update query //
                $new_qty = $check_result->qty + $formData["qty"];
                $this->Cart_model->update_quantity($formData["product_id"], $user_id, $new_qty);
                echo "<script>alert('Product updated to cart successfully');</script>";
            } else {   // if data is not exit it runs insert query //
                $this->Cart_model->insert($formData);
                echo "<script>alert('Product added to cart successfully');</script>";
            }



            $condition = array();     
            $condition["user_id"] = $user_id;

            $data["result"] = $this->Cart_model->read($condition)->result(); //getting the cart result with user id

            $this->load->view("common/template", $data);
        } else {

        	$condition = array();      
            $condition["user_id"] = $user_id;
            $data["result"] = $this->Cart_model->read($condition)->result();

            $this->load->view("common/template", $data);
        }
    }

    public function save_qty()
{
    $user_id = get_user_id();
    $product_id = $this->input->post('product_id');
    $new_qty = $this->input->post('new_qty');

    if ($product_id && $new_qty && $user_id) {
        $this->Cart_model->update_quantity($product_id, $user_id, $new_qty);
    }

    redirect('cart');
    }
    public function delete(){
    $product_id =$this->input->post('product_id');
    $this->Cart_model->delete($product_id);
    $this->session->set_flashdata('delete successfully','product deleted successfully');
    redirect('cart');
}
}


