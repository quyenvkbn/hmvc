<?php 

Class Test extends FC_Controller{
	public function __construct(){
		parent::__construct();
		$this->fc_lang = $this->config->item('fc_lang');
		if($this->fcSystem['homepage_website'] == 1){
			echo '<img src="'.base_url().'templates/backend/images/close.jpg'.'" style="width:100%;" />';die();
		}
	}
	public function View($id){
		$data['view'] = $this->BackendTest_Model->ReadByField('id', $id, $this->fc_lang);
		$data['header'] = 'homepage/frontend/common/header_detail';
		$data['template'] = 'test/frontend/test/view';
		$this->load->view('homepage/frontend/layouts/home', isset($data)?$data:NULL);
	}
}