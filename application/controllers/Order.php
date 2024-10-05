<?php 

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Order_model');
        $this->load->model('Cart_model');
    }

   public function index() {
    $data = array();
    $data["user_id"] = get_user_id(); // Assuming get_user_id() fetches the current user's ID.
   
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
        $data['price'] = $this->input->post('price');
        $user_id = $data["user_id"]; // Initialize $user_id here as it's used in the SQL query.

        // Ensure $order_id is retrieved from the model method correctly.
        $order_id = $this->Order_model->amount($data);
       

        if ($order_id) { // Only proceed if $order_id is valid.
            $sql_insert = "INSERT INTO order_items (order_id, user_id, product_id, qty)
                           SELECT $order_id, user_id, product_id, qty FROM cart WHERE user_id = $user_id";
            $this->db->query($sql_insert);

            // Clear the cart for the user after inserting the items.
            $this->db->where('user_id', $user_id);
            $this->db->delete('cart');

            $this->session->set_flashdata('message', 'Data inserted successfully!');
            redirect('order');
        } else {
            $data['message'] = "Order creation failed";
            $data['main_content'] = 'order'; // Re-set the view content to show the message.
            $this->load->view('common/template', $data);
        }

    } else {
        // Handle GET requests to fetch the order history.
        $data['result'] = $this->Order_model->get_order_history($data["user_id"]);
         $data["header_data"] = $this->Cart_model->read($condition)->result();
        $data['main_content'] = 'order'; // Specify the view file.
        $this->load->view('common/template', $data);
    }
}

}
        


   