<?php
	class m_admin extends CI_Model{
		public function data_penjual(){
			return $this->db->get('tb_seller');
		}
		public function data_pembeli(){
			return $this->db->get('tb_buyer');
		}
		public function check($where){
			$data=array('SELL_STATUS'=> 'aktif');
			$were=array('SELL_ID'=>$where);
			$this->db->where($were);
			return $this->db->update('tb_seller', $data);
		}
		public function blok($where){
			$data=array('SELL_STATUS'=> 'blokir');
			$were=array('SELL_ID'=>$where);
			$this->db->where($were);
			return $this->db->update('tb_seller', $data);
		}
		function data_produk(){
			$this->db->select('*');
			$this->db->from('tb_product');
			$this->db->join('tb_seller','tb_product.SELL_ID = tb_seller.SELL_ID');
			$this->db->join('tb_category','tb_product.CAT_ID = tb_category.CAT_ID');
			$query = $this->db->get();
			return $query;
		}
		function data_usertamu(){
			$this->db->select('prod_id');
			$this->db->from('tb_product');
			$query = $this->db->get();
			return $query->num_rows();
		}
		function data_transaksitamu(){
			$this->db->select('ord_id');
			$this->db->from('tb_order');
			$query = $this->db->get();
			return $query->num_rows();
		}
		function data_nominaltrans(){
			$this->db->select('SUM(ord_total) as total');
			$this->db->from('tb_order');
			return $this->db->get()->row()->total;
		}
		function laporan_penjualan_januari(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-01-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_februari(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-02-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_maret(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-03-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_april(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-04-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_mei(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-05-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_juni(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-06-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_juli(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-07-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_agustus(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-08-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_september(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-09-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_oktober(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-10-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_november(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-11-');
			return $this->db->get()->num_rows();
		}
		function laporan_penjualan_desember(){
			$this->db->select('sell_date_reg');
			$this->db->from('tb_seller');
			$this->db->like('sell_date_reg','-12-');
			return $this->db->get()->num_rows();
		}
	}
?>