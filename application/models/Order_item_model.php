


<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Order_item_model extends CI_Model {
    // public function __construct(){
    //     //parent::__construct();
    // }


public function check_items($data) {
    // Select fields
    $this->db->select("o.order_id, o.user_id, p.product_name, p.product_id, o.qty, o.date, p.product_price, p.product_img,s.total_price");
    $this->db->from("order_items o");
    $this->db->join("products p", "o.product_id = p.product_id", "left");
    $this->db->join("orders s", "o.order_id = s.order_id", "left");  // Additional join
    
    // Apply conditions based on the provided data
    if (isset($data["order_id"])) {
        $this->db->where('o.order_id', $data["order_id"]);
    }
    
    if (isset($data["user_id"])) {
        $this->db->where('o.user_id', $data["user_id"]);
    }
    
    // Execute query
    $query = $this->db->get();
    
    return $query;
}



}
?>
