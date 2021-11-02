<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminkandidat extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('KandidatModel');
        if ($this->session->userdata('level') !== '1') {
            redirect('login1');
        }
    }
    public function index()
    {
        $data['title'] = 'Kandidat';
        $data['rows'] = $this->db->get('kandidat')->result();
        $this->load->view('admin/kandidat', $data);
    }
}

