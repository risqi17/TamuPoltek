<?php
	class home extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->library('session');
			$this->load->helper('url');$this->load->model('m_product');
		}
		public function header(){
		$cat['cat']=$this->m_product->read_category()->result();
		$this->load->view('header',$cat);
		}
		public function index(){
			$this->header();
			$this->load->view('home');
			$this->load->view('footer');
		}
	}
?>