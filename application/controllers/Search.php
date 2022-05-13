<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Mcontent');
		$this->load->model('frontend/Mcategory');
		$this->load->model("frontend/Mproduct");
		$this->load->model('frontend/Mproducer');
		$this->load->model('backend/Muser');
		$this->data['com']='search';
	}
	public function index(){
		$this->load->library('phantrang');
		$key = $_GET['search'];
		if (!empty($_GET['option'])) {
			$option = $_GET['option'];
		  }
		else{
			$option = 0;
		}

		$aurl= explode('/',uri_string());
		echo "<pre>---In ra---\n".print_r($key)."</pre>";
		$url = $aurl[0].'?search='.str_replace(' ', '+', $key);
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		//tìm theo sp
		if($option == 0){
			$total = $this->Mproduct->product_search_count($key);
			$this->data['list'] = $this->Mproduct->product_search($key,$limit,$first);
			$this->data['search_name']='sản phẩm';
		}else if ($option == 1){
			// timm doanh nghiep
			$total = $this->Muser->doanhnghiep_search_count($key);
			$this->data['list'] = $this->Muser->doanhnghiep_search($key,$limit,$first);
			$this->data['search_name']='doanh nghiệp';
		}else if($option == 2){
			// timm dia phuong
			$total = $this->Mproducer->xa_search_count($key);
			$this->data['list'] = $this->Mproducer->xa_search($key,$limit,$first);
			$this->data['search_name']='địa phương';
		}

		$this->data['title']='OCOP CHƯPƯH - Bạn muốn tìm gì ?';
		$this->data['option'] =$option;
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url= $url);
		$this->data['view']='index';
		$this->data['count'] = $total;
		$this->data['key'] =$key;
		$this->load->view('frontend/layout',$this->data);
	}
}