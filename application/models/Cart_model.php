<?php

defined("BASEPATH") or exit("no direct script access allowed");
class Cart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read($condition = null) 
    // if something is reciving then the value will be recived in condition otherwise null will be put in condition
    {
        $this->db->select("c.user_id, p.product_name, p.product_id, c.qty, p.product_price, p.product_img");
        $this->db->from("cart c");
        $this->db->join("products p", "c.product_id = p.product_id", "inner");

        if ($condition != null && isset($condition["user_id"])) { 
            $this->db->where("c.user_id", $condition["user_id"]);
        }
        if (isset($condition["product_id"]) &&strlen($condition["product_id"]) > 0) {
            $this->db->where("p.product_id", $condition["product_id"]);
            
        }

        return $this->db->get();
        
    }

    public function insert($data)
    {
        $this->db->insert("cart", $data);
    }

public function update_quantity($product_id, $user_id, $new_qty) // update into database //
{
    $this->db->set("qty", $new_qty);
    $this->db->where("product_id", $product_id);
    $this->db->where("user_id", $user_id);

    $this->db->update("cart");
}

public function delete($product_id) // delete from cart database //
{
    $this->db->where('product_id', $product_id);
    $this->db->delete('cart');
}
}
