<?php
 class M_seller extends CI_Model{

 function up_sosial($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>