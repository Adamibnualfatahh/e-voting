<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kandidat extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('KandidatModel');
    }
    public function index()
    {
        $data['title'] = 'Kandidat';
        $data['rows'] = $this->db->get('kandidat')->result();
        $this->load->view('part/adminheader', $data);
        $this->load->view('admin/kandidat', $data);
        $this->load->view('part/adminfooter', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Kandidat Edit';
        $data['row'] = $this->db->get_where('kandidat',['id' => $id])->row();
        $this->load->view('part/adminheader', $data);
        $this->load->view('admin/edit_kandidat', $data);
        $this->load->view('part/adminfooter', $data);
    }
    public function update()
    {
        $this->KandidatModel->update();
        if($this->db->affected_rows()>0){
          $this->session->flashdata('message','
          <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4>suksen diupdate</h4>
          </div>
          ');
          redirect('Kandidat');
          
        }
    }
}
