<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        
       parent::__construct();
       if($this->session->userdata('level') !=='2'){
           redirect('/');
       }
    }

    public function index()
    {
        $data ['user'] = $this->db->get_where('login',['id'=> $this->session->userdata('id')])->row();
        $data['total_user'] = $this->db->get('login')->num_rows();
        $this->load->view('user/halaman_user', $data);
    }
}
