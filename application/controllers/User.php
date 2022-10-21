<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    function __construct()
    {
        parent::__construct();

        //$this->load->model('M_katalog');
		cek_login();
    }

    public function profile()
    {
        
		$this->load->view("layout/header");
        $this->load->view("layout/search");
        $this->load->view('user/profile');
       
    }


}