<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

public function __construct()
{
    
   parent::__construct();
   if($this->session->userdata('level') !=='1'){
       redirect('/');
   }
}
    public function index()
    {
        $data['total_user'] = $this->db->get('login')->num_rows();
        $data['title'] ='Dashboard';
        $data['username'] = $this->db->get_where('login',['id'=>
        $this->session->userdata('username')])->row_array();
        $this->load->view('part/adminheader', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('part/adminfooter');
    }

    public function Datasiswa()
    {
        $this->load->model('m_login');
        $data['login'] = $this->m_login->getData();
        $data['title'] ='Data Siswa';
        $this->load->view('part/adminheader', $data);
        $this->load->view('admin/data', $data);
        $this->load->view('part/adminfooter');
    }
    public function hapus($id)
    {
        $this->load->model('m_login');
        $data = array('id' => $id);
        $this->m_login->hapusData($data, 'login');
        redirect('admin/Datasiswa');
    }
}
