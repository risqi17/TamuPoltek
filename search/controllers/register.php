<?php
	class register extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('register_model');
			$this->load->model('m_product');
		}
		public function header(){
		$cat['cat']=$this->m_product->read_category()->result();
		$this->load->view('header',$cat);
		}
		public function index(){
			$this->header();
			$this->load->view('register');
			$this->load->view('footer');
		}
		public function register(){
				$email = array(
					'SELL_EMAIL' => $this->input->post('email')
				);
				$cek = $this->register_model->cek_email('tb_seller', $email)->num_rows();
				if ($cek > 0) {
					$this->session->set_flashdata("terdaftar", " <p style='color: #f44336;'><i class='fa fa-warning'></i>&nbspEmailmu telah terdaftar</p>");
					redirect('register');
				} else {
					$this->register_model->register();
					redirect(base_url());
				}
		}
	}
?>