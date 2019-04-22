<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConfigBie{
	
	function __construct($params = NULL){
		$this->params = $params;
	}

	// meta_title là 1 row -> seo_meta_title
	// contact_address
	// chưa có thì insert
	// có thì update
	public function system(){
		$data['homepage'] =  array(
			'brandname' => array('type' => 'text', 'label' => 'Tên thương hiệu'),
			'company' => array('type' => 'text', 'label' => 'Tên công ty'),
			'logo' => array('type' => 'images', 'label' => 'Logo'),
			'banner' => array('type' => 'images', 'label' => 'Banner'),
			'logo1' => array('type' => 'images', 'label' => 'Logo chân trang'),
			
			
			'favicon' => array('type' => 'images', 'label' => 'Favicon'),
			'cover' => array('type' => 'images', 'label' => 'Ảnh Cover gửi mail'),
			'vidu' => array('type' => 'text','label' => 'Youtube trang chủ'),
			'note' => array('type' => 'editor', 'label' => 'Giới thiệu chân trang'),
			'website' => array('type' => 'dropdown', 'label' => 'Trạng thái website','value' => array('Mở cửa website','Đóng Website bảo trì')),
			
		);
		$data['contact'] = array(
			'address' => array('type' => 'text','label' => 'Địa chỉ'),
			// 'email2' => array('type' => 'text','label' => 'Ngày làm việc'),
			// 'time_lv' => array('type' => 'text','label' => 'Giờ làm việc'),
			'phone' => array('type' => 'text','label' => 'Số điện thoại'),
			'hotline' => array('type' => 'text','label' => 'Hotline'),
			// 'fax' => array('type' => 'text','label' => 'Zalo'),
			'web' => array('type' => 'text','label' => 'Website'),
			'email' => array('type' => 'text','label' => 'Địa chỉ Email'),
			'web' => array('type' => 'text','label' => 'Website'),

			// 'tongdai' => array('type' => 'text','label' => 'SĐT Bảo hành'),
			// 'capcuu' => array('type' => 'text','label' => 'SĐT Khiếu nại'),
			// 'links_map' => array('type' => 'textarea', 'label' => 'Links bản đồ'),
			'map' => array('type' => 'textarea', 'label' => 'Bản đồ'),
			'contact' => array('type' => 'editor','label' => 'Trang liên hệ'),
		);
		$data['common'] = array(
			'banner1' => array('type' => 'images', 'label' => 'Ảnh cạnh youtube trang chủ'),
			'banner2' => array('type' => 'text', 'label' => 'Link ảnh'),
			// 'banner3' => array('type' => 'text', 'label' => 'Link web 3'),
			// 'banner4' => array('type' => 'text', 'label' => 'Link ảnh quảng cáo bên trái'),
			// 'banner5' => array('type' => 'text', 'label' => 'Ảnh quảng cáo bên phải'),
			// 'banner6' => array('type' => 'text', 'label' => 'Link ảnh quảng cáo bên phải'),
			// 'support' => array('type' => 'editor','label' => 'Số điện thoại góc phải '),
			// 'aboutus' => array('type' => 'editor','label' => 'Vị trí'),
			// 'skype_1' => array('type' => 'editor','label' => 'Chân trang'),
			// 'skype_2' => array('type' => 'editor','label' => 'Liên kết chân trang'),
		);
		$data['address'] = array(
			'address_1' => array('type' => 'editor','label' => 'Thông tin liên hệ'),
			// 'address_2' => array('type' => 'editor','label' => 'Địa chỉ 2'),
			// 'address_3' => array('type' => 'editor','label' => 'Địa chỉ 3'),
			// 'address_4' => array('type' => 'editor','label' => 'Địa chỉ 4'),
		);
		$data['seo'] = array(
			'meta_title' => array('type' => 'text','label' => 'Meta Title'),
			'meta_keywords' => array('type' => 'text','label' => 'Meta Keyword'),
			'meta_description' => array('type' => 'text','label' => 'Meta Description'),
			'meta_image' => array('type' => 'images','label' => 'Meta Image'),
		);
		$data['social'] = array(
			// 'pinterest' => array('type' => 'text', 'label' => 'Pinterest'),
			'google' => array('type' => 'text', 'label' => 'Google+'),
			'facebook' => array('type' => 'text', 'label' => 'Facebook'),
			'linkedin' => array('type' => 'text', 'label' => 'Instagram'),
			'twitter' => array('type' => 'text', 'label' => 'Twitter'),
			'youtube' => array('type' => 'text', 'label' => 'Youtube'),
			// 'skype' => array('type' => 'text', 'label' => 'Skype'),
			// 'flickr' => array('type' => 'text', 'label' => 'Flickr'),
			// 'reddit' => array('type' => 'text', 'label' => 'Reddit'),
			// 'vimeo' => array('type' => 'text', 'label' => 'Vimeo'),
			// 'rss' => array('type' => 'text', 'label' => 'Rss'),
		);

		$data['script'] =  array(
			'header' => array('type' => 'textarea', 'label' => 'Script đầu trang'),
			'body' => array('type' => 'textarea', 'label' => 'Script thân trang'),
		);
		// $data['construction'] =  array(
		// 	'menu_backround' => array('type' => 'text', 'label' => 'Màu nền Menu','class'=> 'jscolor'),
		// );

		return $data;
	}
}