<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nis extends CI_Controller {

	public function index()
	{
        $data['total_nis'] = $this->db->get('nis')->num_rows();
        $data['title'] ='Nis Siswa';
        $data['rows'] = $this->db->get('nis')->result();
        $this->load->view('part/adminheader', $data);
        $this->load->view('admin/nis', $data);
        $this->load->view('part/adminfooter');

    }
    public function tambah()
    {
        $data = [
            'nis' => $this->input->post('nis'),
        ];
        $this->db->insert('nis', $data);
        redirect('nis');
    }
    public function hapus($id)
    {
       $this->db->delete('nis',['id'=> $id]);
       redirect('nis');
    }
}
