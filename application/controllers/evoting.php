<?php
defined('BASEPATH') or exit('No direct script access allowed');

class evoting extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
        
    }
    public function index()
    {
        $this->load->view('part/userheader');
        $this->load->view('user/index');
        $this->load->view('part/userfooter');
    }
    public function pilih()
    {
        $this->load->view('part/userheader');
        $this->load->view('user/pilih');
        $this->load->view('part/userfooter');
        
    }
    public function finish()
    {
        $this->load->view('part/userheader');
        $this->load->view('user/finish');
        $this->load->view('part/userfooter');
       
    }
    public function register()
    {
        $this->load->view('aunth/register');
    }
    // public function login()
    // {
    //     $this->load->view('aunth/login');
    // }
    public function hal()
    {
   
        $this->load->view('user/halaman_user',);
    }
   
}
