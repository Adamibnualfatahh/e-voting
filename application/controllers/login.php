<?php
defined('BASEPATH') or exit('No direct script access allowed');

// class login extends CI_Controller
// {

//     public function login()
//     {
//         $cek_nis = $this->db->get_where('login', ['nis' => $this->input->post('nis', true)])->row();

//         if ($cek_nis) { //jika nis ada
//             if (password_verify($this->input->post('password'), $cek_nis->password)) {
//                 if ($cek_nis->level == 'admin') {
//                     echo 'admin';
//                     $data_session = [
//                         'id' => $cek_nis->id,
//                         'level' => $cek_nis->level,
//                     ];
//                     $this->session->set_userdata($data_session);
//                     echo $this->session->userdata('level');
//                 } else {
//                     echo 'siswa';
//                 }
//             } else {
//                 echo "<script>
//                 alert('Password anda salah');
//                 window.location.href = '" . site_url('evoting/login') . "';
//             </script>";
//             }
//         } else { //jika tidak
//             echo "<script>
//                 alert('Nis anda salah');
//                 window.location.href = '" . site_url('evoting/login') . "';
//             </script>";
//         }
//     }

// }
