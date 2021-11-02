<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selesai extends CI_Controller {

	public function __construct()
{
    
   parent::__construct();
   if($this->session->userdata('level') !=='2'){
       redirect('/');
   }
}
	
	public function index()
	{
		$this->load->view('part/userheader');
		$this->load->view('user/finish');
		$this->load->view('part/userfooter');
	}
	public function simpan($id)
	{
		$id_user= $this->session->userdata('id');
		$nama_kandidat= $this->session->userdata('nama_kandidat');
		$data = [
            'id_user'=> $id_user,
			'nama_kandidat'=>$id
        ];
        $this->db->insert('suara', $data);
        redirect('selesai');


	}
	public function tamabah()
	{
		$status=$this->session->userdata('status');
		$data=array(
			'status'=>$status
		);
		$this->db->update('kandidat',$data);
		redirect('selesai');
	}
	public function s()
    {
		$id= $this->session->userdata('id');
        $data = [
			'id' => $id,
            'status' => $this->input->post('status'),
        ];
        
		$this->db->where('id', $id);
		$this->db->update('login',$data);
        redirect('login1/logout');
    }
	

}
