<?php
class Home_Controller extends Base_Controller{
	function index(){
		$this->model->load('sanpham');
		$sanpham=$this->model->sanpham->findbyId(3);
		$this->view->load('sanpham/show',['sanpham'=>$sanpham]);
		
	}
}
?>