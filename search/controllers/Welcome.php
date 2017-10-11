<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('m_product');
	$this->load->helper('url');
	}
	public function header(){
		$cat['cat']=$this->m_product->read_category()->result();
		$this->load->view('header',$cat);
	}
	public function index()
	{
		
		$data['product']=$this->m_product->read_product()->result();
		$this->header();
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}
}
