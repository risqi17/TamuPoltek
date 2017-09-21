<?php
	class register_model extends CI_Model{
		public function register(){
			$data=array('sell_id' => '',
						'sell_email' => $this->input->post('email'),
						'sell_name' => $this->input->post('nama'),
						'sell_pass' => $this->input->post('pass'),
						'sell_phone' => $this->input->post('telp'),
						'sell_status' => 'aktif',
			);
			$this->db->insert('tb_seller',$data);
		}
	}
?>