<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    function __construct()
    {
        parent::__construct();

        $this->load->model('M_katalog');
		cek_login();
    }

	public function index()
	{
        $data = $this->M_katalog->katalog()->result();
        
		#CONFIG AWAL PAGINATION
		$config['base_url'] = base_url();
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->M_katalog->count();
		$config['per_page'] = 20;
		$config['next_link'] = "Selanjutnya";
		$config['next_tag_open'] = "<div class='btn btn-primary tm-btn-next'>";
		$config['next_tag_close'] = '</div>';
		$config['prev_link'] = "Sebelumnya";
		$config['prev_tag_open'] = "<div class='btn btn-primary tm-btn-prev mb-2'>";
		$config['prev_tag_close'] = "</div>";
		$config['num_tag_open'] = "<div class='tm-paging-link'>";
		$config["num_tag_close"] = "</div>";
		$config["cur_tag_open"] = "<div class='active tm-paging-link'>";
		$config["cur_tag_close"] = "</div>";
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['attributes']['rel'] = FALSE;


		

		#INISIALILASI PAGINATION
		$this->pagination->initialize($config);
		$limit = $config['per_page'];
		$offset = html_escape($this->input->get('per_page'));

		$datas['produk'] = $this->M_katalog->get($config['per_page'], $offset);

        //$datas['produk'] = (array)$data;
        //print_r($offset);
        $this->load->view("layout/header");
        $this->load->view("layout/search");
		$this->load->view("katalog/index_katalog", $datas);
        

        
	}
	public function search()
	{
		$data = $this->input->post('search');
		$datas['produk'] = $this->M_katalog->search($data);

		$this->load->view("layout/header");
        $this->load->view("layout/search");
		$this->load->view("katalog/index_katalog", $datas);
	}

    public function detail($id)
    {
        
        $data = $this->M_katalog->detail($id)->result();

		
        print_r($data);
    }
}
