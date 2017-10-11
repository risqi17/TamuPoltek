<?php
 class m_product extends CI_Model{

	 function read_product(){
		 return $this->db->get('tb_product');
	
	}
	function read_category(){
		 return $this->db->get('tb_category');
	}
	function cari_cat($id){
		$this->db->select('*');
		$this->db->from('tb_product');
		$this->db->where('CAT_ID', $id);
		$query = $this->db->get();
		return $query->result();
	}
	function cari_prod($id){
		$this->db->select('*');
		$this->db->from('tb_product');
		$this->db->like('prod_name', $id);
		$query = $this->db->get();
		return $query->result();
	}
	function suggest_prod($kode) {
		$this->db->select('*');
		$this->db->from('tb_product');
		$this->db->like('prod_name', $kode);
		$query = $this->db->get();
        return $query->result();
		/*$this->db->select('*');
		$this->db->from('tb_product');
		$this->db->like('prod_name', $kode);
 
        //cek apakah ada data
        if ($query->num_rows() > 0) { //jika ada maka jalankan
            return $query->result();
        }*/
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
	 function edit_data($table,$where){		
		$this->db->select('*');
		$this->db->from('tb_product');
		$this->db->where('PROD_ID', $where);
		$query = $this->db->get();
		return $query->result();
	}

	function product_details($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	 function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function getProduct($email){
		$this->db->select('*');
		$this->db->from('tb_product');
		$this->db->join('tb_seller','tb_product.SELL_ID = tb_seller.SELL_ID');
		$this->db->join('tb_category','tb_product.CAT_ID = tb_category.CAT_ID');
		$this->db->where('tb_seller.SELL_EMAIL', $email);
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			$q = $query->num_rows();
			return $q;
		}else{
			return $query->result();	
		}
		
	}
	function getCountProduct($email){
		$this->db->select('*');
		$this->db->from('tb_product');
		$this->db->join('tb_seller','tb_product.SELL_ID = tb_seller.SELL_ID');
		$this->db->join('tb_category','tb_product.CAT_ID = tb_category.CAT_ID');
		$this->db->where('tb_seller.SELL_EMAIL', $email);
		$query = $this->db->get();
		$q = $query->num_rows();
		return $q;	
		
	}
	function isThereTelp($email){
		$this->db->select('*');
		$this->db->from('tb_seller');
		$this->db->where('SELL_EMAIL', $email);
		$query = $this->db->get();
		$q = $query->num_rows();
		return $q;	
	}

	function getSeller($email){
		$this->db->select('*');
		$this->db->from('tb_seller');
		$this->db->where('SELL_EMAIL', $email);
		$query = $this->db->get();
		return $query->result();
	}
	 function getCategory(){		
		$this->db->from('tb_category');
        $query = $this->db->get();
        return $query->result();
    }
    function UpdateProduct($where,$data,$table){
    	$this->db->where($where);
		$this->db->update($table,$data);
	}
 }
 ?>