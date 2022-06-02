<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketnoicungcau extends CI_Controller {
	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Mproduct');
        $this->load->model('frontend/Mcategory');
        $this->load->model('frontend/Mcontent');
		$this->load->model('frontend/Mproducer');
		$this->load->model('backend/Muser');
		$this->load->model('frontend/Mketnoicungcau');
        $this->data['com']='ketnoicungcau';
    }

	public function index(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mketnoicungcau->cungcau_all_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='ketnoicungcau');
		$this->data['list']=$this->Mketnoicungcau->cungcau_all($limit,$first);
		$this->data['listShop']=$this->Muser->users_banhang_five();
		$this->data['title']="OCOP CHƯPƯH - Liên hệ";
		$this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}

	public function cung(){
		$this->load->library('phantrang');
		$limit=10;

		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$type =1;
		$total=$this->Mketnoicungcau->cungcau_list_count($type);

		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='ketnoicungcau');
		$this->data['list']=$this->Mketnoicungcau->cungcau_list($limit,$first,$type);
		$this->data['listShop']=$this->Muser->users_banhang_five();
		$this->data['title']="OCOP CHƯPƯH - Liên hệ";
		$this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}

	public function cau(){
		$this->load->library('phantrang');
		$limit=10;

		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$type =2;
		$total=$this->Mketnoicungcau->cungcau_list_count($type);

		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='ketnoicungcau');
		$this->data['list']=$this->Mketnoicungcau->cungcau_list($limit,$first,$type);
		$this->data['listShop']=$this->Muser->users_banhang_five();
		$this->data['title']="OCOP CHƯPƯH - Liên hệ";
		$this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}

	public function doitac(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$type =3;
		$total=$this->Mketnoicungcau->cungcau_list_count($type);

		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='ketnoicungcau');
		$this->data['list']=$this->Mketnoicungcau->cungcau_list($limit,$first,$type);
		$this->data['listShop']=$this->Muser->users_banhang_five();
		$this->data['title']="OCOP CHƯPƯH - Liên hệ";
		$this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}


	public function tangview(){
		$id = $_POST['id'];
		$luotxem = $_POST['view'] +1 ;
		$mydata= array(
			'luotxem'=>$luotxem,
		);
		$this->Mketnoicungcau->tangview($mydata, $id);
	}
}
