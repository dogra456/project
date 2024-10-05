<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Product_info extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
	}



    public function index($product_id){
        $data =array();
        $data['result_info']=$this->Product_model->getproductinfo($product_id);
        $data['main_content']='product_info';
        $this->load->view('common/template',$data);
    }
}
