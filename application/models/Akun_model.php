<?php
class Akun_model extends CI_Model{
  function get_dataakun($data){
    if (NULL ==! $data){
      $this->db->where('nama',$data);
    }
    $z=$this->db->get('data_login');
    return $z;
  }
  function mdubah_password($data){
    $this->db->set($data);
    $this->db->where('nama',$this->session->userdata('nama'));
    $query=$this->db->update('data_login');
    return $query;
  }
  function mdtambah_akun($data){
    $this->db->set($data);
    return $this->db->insert('data_login');
  }
  function mdhapus_akun($where){
    $this->db->where($where);
    return $this->db->delete('data_login');
  }
  function mdubah_jabatan($data,$where){
    $this->db->set($data);
    $this->db->where('id',$where);
    return $this->db->update('data_login');
  }
}
