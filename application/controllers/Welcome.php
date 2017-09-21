<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('m_product');
	$this->load->helper('url');
	}

	public function index()
	{
		$data['product']=$this->m_product->read_product()->result();
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}
}
