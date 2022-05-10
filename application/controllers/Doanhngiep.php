<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doanhngiep extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Mproduct');
		$this->load->model('frontend/Mproducer');
        $this->load->model('frontend/Mcategory');
		$this->load->model('frontend/Mevaluate');
		$this->load->model('backend/Muser');
        $this->data['com']='doanhngiep';
        $this->load->library('session');
        $this->load->library('phantrang');
    }

    public function detail($link){
		$row = $this->Muser->user_detail_id_fg($link);
		$this->load->library('phantrang');
        $limit=10;
        $current= 1;
        $first=$this->phantrang->PageFirst($limit, $current);
        $total=$this->Mproduct->product_sanpham_id_count($row['id']);
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='doanhngiep');
		$this->data['list'] = $this->Mproduct->product_sanpham_id($limit,$first,$row['id']);
		$this->data['row']=$row;
        $this->data['title']='OCOP CHƯPƯH - Giới thiệu';
        $this->data['view']='detail';
		$this->load->view('frontend/layout',$this->data);
	}
}
