<?php
class M_feedback extends CI_Model{
 public function addFeedback($data){     
       	$this->db->insert('tb_feedback', $data);
       	return true;
    }

}
?>