<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

    function __construct()
    {
        parent::__construct();

       cek_login();
    }

    public function keranjang_lama()
    {
        $this->load->view('keranjang/keranjang');
    }
    public function index()
    {
        //$this->load->view('keranjang/keranjang');
        $this->load->view('layout/header');
        $this->load->view('keranjang/keranjang_baru');
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        
        $data = array(
            'id'      => $this->input->post('kd_produk'),
            'qty'     => 1,
            'price'   => $this->input->post('harga'),
            'name'    => $this->input->post('nama_produk'),
            'options' => array('kategori' => $this->input->post('kategori'), 'deskripsi' => $this->input->post('deskripsi'))
        );

        $this->cart->insert($data);
        echo $this->index();
    }

    public function invoice()
    {
        $mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('keranjang/invoice', [], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
    }

    public function hapus()
    {
        $data = array(
			'rowid' => $this->input->post('rowid'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->index();
        //print_r($data);
    }

    public function tambah_stok()
    {   
        //$no = 5;
        $data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => $this->input->post('qty') + 1, 
		);
		return $this->cart->update($data);
        // print_r($data);
    }
    public function kurang_stok()
    {   
        //$no = 5;
        $data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => $this->input->post('qty') - 1, 
		);
		return $this->cart->update($data);
        // print_r($data);
    }

}