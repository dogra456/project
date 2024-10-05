<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends  CI_Model{

  public function validate($username,$password){

    $flag=false;

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $this->db->where('user_type','u');

    $result=$this->db->get()->result();

    if (count($result)>0) {
      $row=$result[0];
      $log['user_id']=$row->user_id;
      $log['username']=$row->username;
      $this->session->set_userdata($log);

      $flag=true;
    }
    else{
      $flag=false;
    }
    return($flag);
  }
}

