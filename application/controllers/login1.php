<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login1 extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');        
    }
    // public function index()
    // {
    //     $this->form_validation->set_rules('nis','Nis','trim|required');
    //     $this->form_validation->set_rules('password','Password','trim|required');
    //    if($this->form_validation->run() == FALSE){
    //        $this->load->view('aunth/login');
    //    }else{
    //        //sukses
    //        $this->_login();
    //    }
    // }

    // private function _login()
    // {
    //     $nis = $this->input->post('nis');
    //     $password = $this->input->post('password');

    //     $user = $this->db->get_where('login',['nis'=> $nis])->row_array();
    //    if($user){
    //        //user ada
    //         if($user['status']== 1){
                
    //             if(password_verify($password, $user['password'])){
    //                 $data= [
    //                     'nis' => $user['nis'],
    //                     'lavel' => $user['level'],
    //                 ];
    //                 $this->session->set_userdata($data);
    //                 redirect('admin');
    //             }else{
    //                 $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah</div>');
    //                 redirect('login1');
    //             }
                
    //         }else{
    //             $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Sudah Memilih</div>');
    //             redirect('login1');
    //         }
    //    }else{
    //        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">data tidak terdaftar</div>');
    //        redirect('login1');
           
    //    }
    // }

    public function login()
    {
        $this->load->library('session');
        $this->form_validation->set_rules('nis','Nis','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
           if($this->form_validation->run() == FALSE){
        $this->load->view('aunth/login');
           }
        $post = $this->input->post(null, true);
        if (isset($post['login'])) {
            $this->load->model('m_login');
            $query = $this->m_login->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id' => $row->id,
                    'level' => $row->level
                );
                if ($params['level'] == '1') { //Akses admin
                    $data_session=[
                        'id' => $row->id,
                        'level' => $row->level
                    ];
                    $this->session->set_userdata($data_session);
                    redirect('admin');
                } else { //akses user
                     
                        $data_session=[
                            'id' => $row->id,
                            'level' => $row->level
                        ];
                    $this->session->set_userdata($data_session);
                    redirect('user');
                }
            } else {
                echo "<script>
                alert('NIS/Password anda salah');
                window.location.href = '" . site_url('login1/login') . "';
                </script>";
            }
        }
    }
    public function register()
    {
        $this->load->view('aunth/register');
        $this->form_validation->set_rules('nis', 'nis', 'trim|required|is_unique[login.nis]', [
            array(
                'required' => '%s masih kosong',
                'is_unique' => 'Nis %s Sudah Ada'
            )
        ]);
        $this->form_validation->set_rules('username', 'username', 'trim|required', [
            'required' => '%s masih kosong'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => '%s masih kosong'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->register();
        } else {
            $data = [
                'nis' => $this->input->post('nis'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password', true),
                'level' => '2'
            ];
            $this->db->insert('login', $data);
            if ($this->db->affected_rows() > 0) {
                echo "<script>
				alert('AKUN BERHASIL DIBUAT');
				window.location.href = '" . site_url('login1/login') . "'
			   </script>";
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        redirect('/');
    }
}
