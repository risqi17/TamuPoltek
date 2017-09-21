<?php
 class m_product extends CI_Model{

	 function read_product(){
		 return $this->db->get('tb_product');
	
 }
	 public function tambah($data){     
       	$this->db->insert('tb_product', $data);
       	return true;
    }
	 
	  function get_data($where){		
		$this->db->from('tb_product');
        $this->db->where($where);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() == 1) {
            return $query->row();
        }
	}
	 
	 function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	 function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function product_details($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	 function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
 }
 ?>