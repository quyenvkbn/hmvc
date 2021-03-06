<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends FC_Controller{

	public function __construct(){
		parent::__construct();
		$this->fcUser = $this->config->item('fcUser');
		if(!$this->fcUser) redirect('admin/login');
		$this->load->model(array(
			'BackendItems_Model',
		));
		$this->load->library(array('configbie'));
	}

	public function View($paymentsid = 0){
		$this->commonbie->Permissions(array(
			'uri' => 'items/backend/items/view'
		));
		$userid = 0;
		if($paymentsid == 0){
			$this->session->set_flashdata('message-danger', 'Không tồn tại đơn hàng');
			redirect('payments/backend/payments/view');
		}
		$id = (int)$paymentsid;
		if(in_array('products/backend/products/limit', $this->fcUser['group']) == FALSE){
			$userid = $this->fcUser['id'];
		}
		if(in_array('item/backend/item/limit', $this->fcUser['group']) == FALSE){
			$userid = $this->fcUser['id'];
		}

		$_payment = $this->Autoload_Model->_read(array(
			'table' => 'payments',
			'where' => array(
				'id' => $id,
			),
		));
		$data['payment'] = $_payment;
		$data['template'] = 'payments/backend/items/view';
		$this->load->view('dashboard/backend/layouts/home', isset($data)?$data:NULL);
	}

}
