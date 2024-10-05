<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model {

    

    public function getuserinfo($user_id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $user_id);

        $result = $this->db->get()->result();

    return ($result);
    }



    
    
}