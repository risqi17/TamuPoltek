<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	function __construct(){
	parent::__construct();
	$this->load->model('m_product');
	$this->load->helper('url');
	
	if (isset($_SESSION['email_sess']) == 0) {
		redirect('login');
	}

	}	
	public function header(){
		$cat['cat']=$this->m_product->read_category()->result();
		$this->load->view('header',$cat);
	}
 
	public function index()
	{
		$email = $_SESSION['email_sess'];
		$data['product']=$this->m_product->getProduct($email);
		$data['count']=$this->m_product->getCountProduct($email);
		$data['seller'] = $this->m_product->getSeller($email);
		$this->header();
		$this->load->view('product_all', $data);
		$this->load->view('footer', $data);
	}
	public function pilih_cat()
	{
		$id=$this->input->get('id');
		$data['data']=$this->m_product->cari_cat($id);
		$this->header();
		$this->load->view('product_search', $data);
		$this->load->view('footer', $data);
	}
	public function search_prod()
	{
		$id=$this->input->post('name');
		$data['data']=$this->m_product->cari_prod($id);
		$this->header();
		$this->load->view('product_search', $data);
		$this->load->view('footer', $data);
	}
	public function suggest_prod(){
		$kode = $_GET['term'];
        $query = $this->m_product->suggest_prod($kode);
        $searchData=array();
        foreach ($query as $key) {                
                $searchData[] = array('id'=>$key->PROD_ID,'label'=>$key->PROD_NAME,'value'=>$key->PROD_NAME);
        }
        echo json_encode($searchData);
	}
	function add_product(){
		$email = $_SESSION['email_sess'];
		$data['seller'] = $this->m_product->getSeller($email);
		$data['category'] = $this->m_product->getCategory();
		$this->header();
		$this->load->view('product', $data);
		$this->load->view('footer');
	}
	function d_product(){
		$this->header();
		$this->load->view('product_details');
		$this->load->view('footer');
	}
	function product_details($id){
		$where = array('PROD_ID' => $id);
		$data['product'] = $this->m_product->product_details($where,'tb_product')->result();
		$this->header();
		$this->load->view('product_details', $data);
		$this->load->view('footer', $data);
	}
	function act_add(){
		$q = $this->db->query("SELECT MAX(RIGHT(prod_id,3)) AS idmax FROM tb_product");
			$kd = ""; //kode awal
			if($q->num_rows()>0){ //jika data ada
				foreach($q->result() as $k){
					$tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
					$kd = sprintf('%03s', $tmp); //kode ambil 3 karakter terakhir
				}
			}else{ //jika data kosong diset ke kode awal
				$kd = "001";
			}
			$kar = "PROD"; //karakter depan kodenya
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/product/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '5024'; //maksimum besar file 2M
        $config['max_width']  = '2000'; //lebar maksimum 1288 px
        $config['max_height']  = '2000'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
					'prod_id' => $kar.$kd,
                  	'sell_id' => $this->input->post('idseller'),
					'cat_id' =>$this->input->post('kategori'),
					'prod_name' =>$this->input->post('nama'),
					'prod_stock' =>$this->input->post('stok'),
					'prod_description' => $this->input->post('deskripsi'),
					'prod_image' =>$gbr['file_name'],
					'prod_price' => $this->input->post('harga'),
					'prod_condition' => $this->input->post('kondisi'),
					'prod_weight' => $this->input->post('berat'),
					'prod_other_desc' => $this->input->post('DeskripsiTambah')
                   
                );
 
                $this->m_product->tambah($data); //akses model untuk menyimpan ke database
                
                if(isset($_POST['submit1'])){
				redirect(base_url('index.php/product/add_product')); 
				}else{
				redirect(base_url('index.php/product')); //jika berhasil maka akan ditampilkan view vupload	
				}
                
            }else{
                
                echo "gagal"; //jika gagal maka akan ditampilkan form upload
            }
        }
	}

	function delete($id){
		$where = array('PROD_ID' => $id);
		$path= './assets/product/';
		$data = $this->m_product->get_data($where);
		@unlink($path.$data->PROD_IMAGE);
		
		
		$this->m_product->hapus($where,'tb_product');
		redirect(base_url('index.php/product'));
		
	}
	function EditProduct($id){
		$email = $_SESSION['email_sess'];
		$where = array(
			'PROD_ID' => $id
		);
		$data['seller'] = $this->m_product->getSeller($email);
		$data['category'] = $this->m_product->getCategory();
		$data['product'] = $this->m_product->edit_data('tb_product',$id);
		$this->header();
		$this->load->view('EditProduct',$data);
		$this->load->view('footer',$data);
	}
	function UpdateProduct(){
		
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/product/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '5024'; //maksimum besar file 2M
        $config['max_width']  = '2000'; //lebar maksimum 1288 px
        $config['max_height']  = '2000'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        $image = $this->input->post('lama');
        $path = './assets/product/';

		if ($_FILES['gambar']['name']) {
			if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
               $data = array(
                  	'prod_name' =>$this->input->post('nama'),
					'prod_stock' =>$this->input->post('stok'),
					'prod_description' => $this->input->post('deskripsi'),
					'prod_price' => $this->input->post('harga'),
					'prod_condition' => $this->input->post('kondisi'),
					'prod_weight' => $this->input->post('berat'),
					'prod_other_desc' => $this->input->post('DeskripsiTambah'),
					'prod_image' => $gbr['file_name']
			);
				$where = array('PROD_ID'=> $this->input->post('prod_id'));
 			
				@unlink($path.$image);
				
				$this->m_product->UpdateProduct($where,$data,'tb_product');
                
                
                redirect('product'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                
                echo 'gagal';
            }
		} else {
			$data = array(
                  	'prod_name' =>$this->input->post('nama'),
					'prod_stock' =>$this->input->post('stok'),
					'prod_description' => $this->input->post('deskripsi'),
					'prod_price' => $this->input->post('harga'),
					'prod_condition' => $this->input->post('kondisi'),
					'prod_weight' => $this->input->post('berat'),
					'prod_other_desc' => $this->input->post('DeskripsiTambah')
			);
			$where = array('PROD_ID'=> $this->input->post('prod_id'));
			$this->m_product->UpdateProduct($where, $data, 'tb_product');
			redirect('product');
		}
	}

}