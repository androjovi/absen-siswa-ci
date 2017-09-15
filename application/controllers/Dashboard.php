<?php

      /*
      * Build with CI
      * Programmer : Joviandro
      * Only set config/database.php, Dont change anything config
      * Enjoying with my script hahahaha
      */

class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','session'));
    $this->load->view('halaman_statis/navbar_dashboard');
    $this->load->view('halaman_statis/sidebar');
    $this->load->model('dashboard_model');

  }
  /*
  private function hitung_selisih($tgl1,$tgl2){
    $awal  = date_create($tgl1);
    $akhir = date_create($tgl2);

    // Hitung
    $diff = date_diff($awal,$akhir);
    return $diff;
  }
  */

  function index(){
    $data['get_absenlist']=$this->dashboard_model->get_absensiswa(NULL);

    $this->load->view('main_page',$data);
  }

  function data_siswa(){
    $this->load->view('data_siswa/vw_datasiswa');
  }

  function struktur(){
    $this->load->view('halaman_statis/struktur_kelas');
  }

  function list_siswa($kelas,$jurusan){
    $list_siswa=array(
      'kelas'   => $kelas,
      'jurusan' => $jurusan
    );
    $data['list_siswa']=$this->dashboard_model->get_listsiswa($list_siswa);
    $this->load->view('data_siswa/vw_listsiswa',$data);
  }

  function absen_siswa(){
    $this->load->view('absen_siswa/vw_absensiswa');
  }

  function absen_list($kelas,$jurusan){

    $data['list_siswa']=$this->dashboard_model->get_listsiswavs($kelas,$jurusan)->result();
    $this->load->view('absen_siswa/vw_listsiswa',$data);
  }

  function ket_absen($nis){
    if ($this->session->userdata('status_login') !== FALSE AND $this->session->userdata('posisi_login') === "m"){
    $list_siswa=array(
      'nis'   => $nis,
    );
    $data['get_siswa']=$this->dashboard_model->get_listsiswa($list_siswa);
    $this->load->view('absen_siswa/vw_ketabsen',$data);
  }else{
  echo "<script>alert('Anda tidak memiliki akses ke halaman web ini, Hubungi administrator');window.location.href='".base_url('login')."'</script>";
 }
}

  function submit_ketabsen($nis){
    date_default_timezone_set('Asia/Jakarta');
    $dari_tanggal=$this->input->post('d_tahun')."-".$this->input->post('d_bulan')."-".$this->input->post('d_hari');
    $sampai_tanggal=$this->input->post('s_tahun')."-".$this->input->post('s_bulan')."-".$this->input->post('s_hari');
    $ket_data=array(
      'nis'            => $nis,
      'nama'     => $this->input->post('nama_lengkap'),
      'alasan'         => $this->input->post('alasan'),
      'dari_tanggal'   => $dari_tanggal,
      'sampai_tanggal' => $sampai_tanggal,
      'ais'            => $this->input->post('mode'),
      'waktu_submit'   => date('H:i:s'),
      'kelas'          => $this->input->post('kel'),
      'jurusan'        => $this->input->post('jur'),
    );
    $ket_data2=array(
      'status_absen'         => 'tidak',
    );
    $submit=$this->dashboard_model->submit_absen($ket_data,$ket_data2,$nis);
    if ($submit !== FALSE){
    redirect('dashboard');
    }else{

    }

  }

  function detail_absen($nis){
    $ket_nis=array(
      // Column 'nis' in where clause is ambiguous
      'absen_siswa.nis' =>$nis
    );
    $data['get_ketabsen']=$this->dashboard_model->get_absensiswa($ket_nis);
    $this->load->view('absen_siswa/vw_detailabsensiswa',$data);
  }
  function detail_siswa($nis){
    $nama_siswa=array(
      'nis' => $nis
    );
    $data['detail_siswa']=$this->dashboard_model->get_detailsiswa($nama_siswa);
    $this->load->view('data_siswa/vw_detailsiswa',$data);
  }
  function cari(){
    $data['what']=$this->input->post('cari');
    $data['hasil']=$this->dashboard_model->pencarian($data['what'])->result();
    $data['jumlah']=$this->dashboard_model->pencarian($data['what'])->num_rows();
    $this->load->view('pencarian/vw_hasilpencarian',$data);
  }
  function verify_siswa($nis){
    $data=array(
      'status_absen' => 'tidak,verif',
    );
    $cek=$this->dashboard_model->verif($data,$nis);
    if ($cek !== FALSE){
      echo "<script>alert('Siswa sudah terverifikasi, Terimakasih');window.location.href='".base_url('dashboard')."'</script>";
    }else{
      echo "szz";
    }
  }
}


/* End of file Dashboard.php
 * Location application/controllers/Dashboard.php
 */
