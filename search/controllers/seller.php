<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class seller extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('m_seller');
	$this->load->model('m_product');
	if (isset($_SESSION['email_sess']) == 0) {
		redirect('login');
	}
	
	}
	public function header(){
		$cat['cat']=$this->m_product->read_category()->result();
		$this->load->view('header',$cat);
	}

	public function index(){
		$email = $_SESSION['email_sess'];
		$data['seller'] = $this->m_product->getSeller($email);
		$this->header();
		$this->load->view('acc_seller',$data);
		$this->load->view('footer');
	}

	function up_seller(){
		$data = array(
			'sell_name' => $this->input->post('nama'),
			'sell_email' => $this->input->post('email'),
			'sell_phone' => $this->input->post('telp'),
			'sell_fb' => $this->input->post('fb'),
			'sell_insta' => $this->input->post('insta'),
			'sell_line' => $this->input->post('line'),
			'sell_address' => $this->input->post('alamat'),
			);
		$where = array('SELL_ID'=> $this->input->post('idseller'));
		$this->m_seller->up_sosial($where, $data, 'tb_seller');
		redirect('seller');
	}

}