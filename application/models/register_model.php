<?php
	class register_model extends CI_Model{
		public function register(){
			$q = $this->db->query("SELECT MAX(RIGHT(sell_id,4)) AS idmax FROM tb_seller");
			$kd = ""; //kode awal
			if($q->num_rows()>0){ //jika data ada
				foreach($q->result() as $k){
					$tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
					$kd = sprintf('%04s', $tmp); //kode ambil 4 karakter terakhir
				}
			}else{ //jika data kosong diset ke kode awal
				$kd = "0001";
			}
			$kar = "SEL"; //karakter depan kodenya
			//gabungkan string dengan kode yang telah dibuat tadi
			$data=array('sell_id' => $kar.$kd,
						'sell_email' => $this->input->post('email'),
						'sell_name' => $this->input->post('nama'),
						'sell_pass' => $this->input->post('pass'),
						'sell_phone' => $this->input->post('telp'),
						'sell_status' => 'aktif',
			);
			$this->db->set('sell_date_reg', 'NOW()', FALSE);
			$this->db->insert('tb_seller',$data);
		}
	}
?>