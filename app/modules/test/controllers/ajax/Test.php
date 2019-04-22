<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends FC_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model(array(
			'BackendTest_Model',
		));
		$this->load->library(array('configbie'));
	}

	
	public function fast_price_update(){
		$price = $this->input->post('price');
		$module = $this->input->post('module');
		$id = $this->input->post('id');
		$price = str_replace('.','',$price);
		$temp[$module] = $price;
		$this->db->where('id', $id);
		$this->db->update('combos', $temp);
		$price_explode = explode('.',$price);
		if(count($price_explode) == 1){
			$price = (int)$price;
			
		}else{
			$price = str_replace('.','',$price);
			$price = (int)$price;
		}
		$price = str_replace(',','.',number_format($price));
		
		echo $price;die();
	}
}
