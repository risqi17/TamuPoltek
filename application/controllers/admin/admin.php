<?php
	class admin extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('admin/m_admin');
			$this->load->library('session');
			$this->load->helper('url');
		}
		public function index(){
			$_GET['aksi']='beranda';
			$row['data']=$this->m_admin->data_usertamu();
			$row['trans']=$this->m_admin->data_transaksitamu();
			$row['nominal']=$this->m_admin->data_nominaltrans();
			$row['l_jan']=$this->m_admin->laporan_penjualan_januari();
			$row['l_feb']=$this->m_admin->laporan_penjualan_februari();
			$row['l_mar']=$this->m_admin->laporan_penjualan_maret();
			$row['l_apr']=$this->m_admin->laporan_penjualan_april();
			$row['l_mei']=$this->m_admin->laporan_penjualan_mei();
			$row['l_jun']=$this->m_admin->laporan_penjualan_juni();
			$row['l_jul']=$this->m_admin->laporan_penjualan_juli();
			$row['l_ags']=$this->m_admin->laporan_penjualan_agustus();
			$row['l_sep']=$this->m_admin->laporan_penjualan_september();
			$row['l_okt']=$this->m_admin->laporan_penjualan_oktober();
			$row['l_nov']=$this->m_admin->laporan_penjualan_november();
			$row['l_des']=$this->m_admin->laporan_penjualan_desember();
			$this->load->view('admin/header');
			$this->load->view('admin/beranda', $row);
			$this->load->view('admin/footer');
		}
		public function data_penjual(){
			$_GET['aksi']='penjual';
			$data['penjual']=$this->m_admin->data_penjual()->result();
			$this->load->view('admin/header');
			$this->load->view('admin/data_penjual', $data);
			$this->load->view('admin/footer');
		}
		public function data_pembeli(){
			$_GET['aksi']='pembeli';
			$data['pembeli']=$this->m_admin->data_pembeli()->result();
			$this->load->view('admin/header');
			$this->load->view('admin/data_pembeli', $data);
			$this->load->view('admin/footer');
		}
		public function blok(){
			if(isset($_POST['submit'])){
				$where=$_POST['id'];
				$this->m_admin->blok($where);
				redirect('admin/admin/data_penjual');
			}
			if(isset($_POST['aktif'])){
				$where=$_POST['id2'];
				$this->m_admin->check($where);
				redirect('admin/admin/data_penjual');
			}
		}
		public function data_produk(){
			$_GET['aksi']='produk';
			$data['produk']=$this->m_admin->data_produk()->result();
			$this->load->view('admin/header');
			$this->load->view('admin/data_produk', $data);
			$this->load->view('admin/footer');
		}
		public function data_transaksi(){
			$_GET['aksi']='transaksi';
			$this->load->view('admin/header');
			$this->load->view('admin/data_transaksi');
			$this->load->view('admin/footer');
		}
	}
?>