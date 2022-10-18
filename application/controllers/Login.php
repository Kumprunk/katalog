<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('M_katalog');
    }

    public function index()
    {
        $this->load->view('layout/login');
    }

    public function cek_log()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $user     = $this->db->get_where('user', ['username' => $username])->row_array();
        // print_r($password);
        if($user != null)
        {
            // echo"jadi";
            if(password_verify($password, $user['password']))
            {
                $this->session->set_userdata('username', $user['username']);
                
                redirect(base_url(""));
            }else{
                echo"gagal login";
                // print_r(password_hash($password, PASSWORD_DEFAULT));
                // print_r($user['password']);
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        
        redirect('login/index');
    }
}