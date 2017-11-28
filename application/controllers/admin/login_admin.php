<?php
	class login_admin extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('admin/m_login_admin');
			$this->load->library('session');
			$this->load->helper('url');
		}
		public function index(){
			$this->load->view('admin/v_login_admin');
		}
		public function logout(){
			if($this->session->has_userdata('user_adm')){
				$this->session->sess_destroy();
				redirect('admin/login_admin');
			}
		}
		public function adm_login(){
				$user=$_POST['user'];
				$row=$this->m_login_admin->login();
				if($row == TRUE){
					/*if($row->sell_status == 'blokir'){
						$this->session->set_flashdata("pesan", "<div class='alert alert-danger text-center'>
					<span class='glyphicon glyphicon-warning-sign'></span> &nbsp; anda diblokir</div>");
					redirect('home');
					}else{*/
					$this->session->set_userdata('user_adm',$user);
					redirect('admin/admin');
					//}
				}else{
					$this->session->set_flashdata("pesan", " <p style='color: #f44336;'><i class='fa fa-warning'></i>&nbspPeriksa kembali email dan passwordmu</p>");
					redirect('admin/login_admin');
				}
		}
	}
?>