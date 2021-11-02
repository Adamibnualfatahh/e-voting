<?php
class m_login extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('nis', $post['nis']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }
    public function getData()
    {
        return $this->db->get('login')->result_array();
    }
    public function hapusData($data)
    {
        $this->db->delete('login', $data);
    }
    private $table = 'tb_admin';

    private $id = 'id_admin';

    
    public function cekAdmin($nis){
        return $this->db->get_where($this->table,['login'=>$nis])->row_array();
    }

    public function cekUser($username){
        return $this->db->get_where('login',['nis'=>$username])->row_array();
    }

    public function getCount($table){
        return $this->db->count_all($table);
    }

    public function getConfig(){
        return $this->db->get('')->row_array();
    }

}
