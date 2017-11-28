<?php
	class m_login_admin extends CI_Model{
		public function login(){
			$query=$this->db->get_where('tb_admin',array('adm_id'=>$this->input->post('user'),
														 'adm_pass'=>$this->input->post('pass')));
			return $query->result();
		}
	}
?>