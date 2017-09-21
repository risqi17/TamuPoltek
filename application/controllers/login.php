<?php
	class login extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('login_model');
			$this->load->library('session');
			$this->load->helper('url');
		}
		public function index(){
			if(isset($_POST['submit'])){
				$email=$_POST['email'];
				$row=$this->login_model->login();
				if($row==TRUE){
					/*if($row->sell_status == 'blokir'){
						$this->session->set_flashdata("pesan", "<div class='alert alert-danger text-center'>
					<span class='glyphicon glyphicon-warning-sign'></span> &nbsp; anda diblokir</div>");
					redirect('home');
					}else{*/
					$this->session->set_userdata('email_sess',$email);
					redirect('home');
					//}
				}else{
					$this->session->set_flashdata("pesan", "<div class='alert alert-danger text-center'>
					<span class='glyphicon glyphicon-warning-sign'></span> &nbsp; email dan password salah</div>");
					redirect('home');
				}
			}
		}
		public function logout(){
			if($this->session->has_userdata('email_sess')){
				$this->session->sess_destroy();
				redirect('home');
			}
		}
	}
?>