<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilih extends CI_Controller {

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
		$this->load->view('part/userheader');
		$this->load->view('user/pilih',$data);
		$this->load->view('part/userfooter');
	}
	
}
