<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Order_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function amount($data) {
        $billdata = array(
            'user_id' => $data['user_id'],
            'total_price' => $data['price']
        );

        $insert = $this->db->insert('orders', $billdata);
         // $query = $this->db->get();
         // $query->result();

        if ($insert) {
            $id = $this->db->insert_id();
            return $id > 0 ? $id : false;
        } else {
            return false;
        }
    }

    public function get_order_history($user_id) {
        $this->db->select("o.order_id,o.user_id, o.order_date, o.total_price");
        $this->db->from("orders o");
        $this->db->where('o.user_id', $user_id);
        $query = $this->db->get();
        //return $query->result();

        $result = $query->result();

    
    // echo "<pre>"; 
    // echo "Query Object:\n";
    // var_dump($query);
    // echo "\nQuery Result:\n";
    // var_dump($result);
    // echo "</pre>";

    
    return $result;
    }
}
?>
