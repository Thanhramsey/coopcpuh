<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gioithieu extends CI_Controller {
	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->data['com']='gioithieu';
        $this->load->model('frontend/Mcategory');
        $this->load->model('frontend/Mproduct');
		$this->load->model('frontend/Mproducer');
		$this->load->model('backend/Muser');
    }

	public function index(){
        $this->data['title']='OCOP CHƯPƯH - Giới thiệu';
        $this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}
}
