<?php
	class login_model extends CI_Model{
		public function login(){
			$query=$this->db->get_where('tb_seller',array('sell_email'=>$this->input->post('email'),
			'sell_pass'=>$this->input->post('pass')));
			return $query->result();
		}
	}
?>