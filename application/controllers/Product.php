<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	function __construct(){
	parent::__construct();
	$this->load->model('m_product');
	$this->load->helper('url');
	}	
 
	public function index()
	{
		$data['product']=$this->m_product->read_product()->result();
		$this->load->view('header', $data);
		$this->load->view('product_all', $data);
		$this->load->view('footer', $data);
	}
	function add_product(){
		$this->load->view('header');
		$this->load->view('product');
	}
	function product_details($id){
		$where = array('PROD_ID' => $id);
		$data['product'] = $this->m_product->product_details($where,'tb_product')->result();
		$this->load->view('header', $data);
		$this->load->view('product_details', $data);
		$this->load->view('footer', $data);
	}
	function act_add(){
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
					'prod_id' => $this->input->post('idproduk'),
                  	'sell_id' =>$this->input->post('idseller'),
					'cat_id' =>$this->input->post('kategori'),
					'prod_name' =>$this->input->post('nama'),
					'prod_stock' =>$this->input->post('stok'),
					'prod_description' => $this->input->post('deskripsi'),
					'prod_image' =>$gbr['file_name'],
					'prod_price' => $this->input->post('harga'),
					'prod_condition' => $this->input->post('kondisi'),
					'prod_weight' => $this->input->post('berat'),
					'prod_other_desc' => $this->input->post('DeskripsiTambah'),
					'prod_note' => $this->input->post('catatan')
                   
                );
 
                $this->m_product->tambah($data); //akses model untuk menyimpan ke database
                
                redirect(base_url('index.php/product')); //jika berhasil maka akan ditampilkan view vupload
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
}