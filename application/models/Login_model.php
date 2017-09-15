<?php
class Login_model extends CI_Model{
  function cek_pass($data){
    $this->db->where($data);
    $query=$this->db->get('data_login');
    return $query;

  }
}
