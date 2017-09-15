<?php
class Dashboard_model extends CI_Model{

  function get_listsiswa($data){
    $this->db->where($data);
    $query = $this->db->get('data_siswa');
    return $query->result();
  }
  function get_listsiswavs($kelas,$jurusan){
    //Pakek native query ocee, kalo pake AR ribet njir
    if (NULL !==$kelas AND NULL !==$jurusan ){
    $this->db->where(array('kelas'=>$kelas,'jurusan'=>$jurusan));
  }
    $q=$this->db->get('data_siswa');
    return $q;
  }
  function get_detailsiswa($data){
    $this->db->where($data);
    $query = $this->db->get('data_siswa');
    return $query->result();
  }
  function submit_absen($data,$data2,$nis){
    $this->db->set($data2);
    $this->db->where('nis',$nis);
    $this->db->update('data_siswa');

    $this->db->set($data);
    $query = $this->db->insert('absen_siswa');
    return $query;
  }
  function get_absensiswa($data){
    $this->db->select('*');
    $this->db->from('absen_siswa');
    $this->db->join('data_siswa','data_siswa.nis = absen_siswa.nis');
    if (isset($data)){
      $this->db->where($data);
    }else{
      // Do something here!
    }
    $query = $this->db->get();
    return $query->result();
  }
  function pencarian($data){
    $this->db->like('nama',$data);
    $query=$this->db->get('absen_siswa');
    return $query;
  }
  function verif($data,$nis){
    $this->db->set($data);
    $this->db->where('nis',$nis);
    $query=$this->db->update('data_siswa');
    return $query;
  }
}
/* /opt/lampp/htdocs/absen-siswaCI/application/models/Dashboard_model.php */
