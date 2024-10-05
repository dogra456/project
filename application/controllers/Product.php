<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Product extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index(){
		$data=array();
		$result=$this->Product_model->getproduct();
		$data['result_product']=$result;
		$data['main_content']='product';
		$this->load->view('common/template',$data);
	}

    public function productinfo($product_id){
        $data =array();
        $data['result_info']=$this->Product_model->getproductinfo($product_id);
        $data['main_content']='product_info';
        $this->load->view('common/template',$data);
    }
}
