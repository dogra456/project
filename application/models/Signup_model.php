<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_Model{

  public function save($data){

    $flag=false;

    $userdata=array(
    'username'=>$data['username'],
    'password'=>$data['password'],
    'fullname'=>$data['fullname'],
    'email'=>$data['email'],
    'address'=>$data['address'],
    'phone_number'=>$data['phone_number'],
    'user_type'=>'u'
 
    );

    $this->db->insert('users',$userdata);

    $id=$this->db->insert_id();

    if ($id>0) {
      $flag=true;
    }
    return$flag;
  }
}