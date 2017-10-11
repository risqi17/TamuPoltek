<?php
	class login extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('login_model');
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('m_product');
		}
		public function header(){
		$cat['cat']=$this->m_product->read_category()->result();
		$this->load->view('header',$cat);
		}
		public function index(){
			$this->header();
			$this->load->view('login');
			$this->load->view('footer');
		}
		public function logout(){
			if($this->session->has_userdata('email_sess')){
				$this->session->sess_destroy();
				redirect(base_url());
			}
		}
		public function pro_login(){
				$email=$_POST['email'];
				$row=$this->login_model->login();
				if($row==TRUE){
					/*if($row->sell_status == 'blokir'){
						$this->session->set_flashdata("pesan", "<div class='alert alert-danger text-center'>
					<span class='glyphicon glyphicon-warning-sign'></span> &nbsp; anda diblokir</div>");
					redirect('home');
					}else{*/
					
					$this->session->set_userdata('email_sess',$email);
					redirect(base_url());
					//}
				}else{
					$this->session->set_flashdata("pesan", " <p style='color: #f44336;'><i class='fa fa-warning'></i>&nbspPeriksa kembali email dan passwordmu</p>");
					redirect('login');
				}
		}
	}
?>