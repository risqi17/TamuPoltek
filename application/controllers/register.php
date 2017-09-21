<?php
	class register extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('register_model');
		}
		public function index(){
			$this->load->view('header');
			$this->load->view('register');
			$this->load->view('footer');
		}
		public function register(){
			if(isset($_POST['submit'])){
				$this->register_model->register();
				redirect('home');
			}
		}
	}
?>