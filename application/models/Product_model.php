<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	
  public  function getproduct(){
  	$this->db->select('*');
  	$this->db->from('products');

  	$result=$this->db->get()->result();

  	return($result);

  }

    public  function getproductinfo($product_id){
    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('product_id',$product_id);

    $result = $this->db->get()->result();

    return ($result);
  }


}


