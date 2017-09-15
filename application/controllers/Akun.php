<?php
class Akun extends CI_Controller{
  public $hhs="sadsad";
  function __construct(){
    parent::__construct();
    $this->load->library(array('session','form_validation'));
    if ($this->session->userdata('status_login')!==TRUE):
      redirect('login');
    endif;
    $this->load->model('akun_model');
    $this->load->model('dashboard_model');

    $this->load->view('halaman_statis/navbar_dashboard');
    $this->load->view('halaman_statis/sidebar');
  }
  function index(){
    $data['dataakun']=$this->akun_model->get_dataakun(NULL)->num_rows();
    $data['jumlah_siswa']=$this->dashboard_model->get_listsiswavs(NULL,NULL)->num_rows();
    $this->load->view('akun/vw_akun',$data);
  }
  function ubah_password(){
    $this->load->view('akun/vw_gantipass');
  }
  function proses_ubahpassword(){
    $this->form_validation->set_rules('cg_pass','Password baru','required');
    $this->form_validation->set_rules('ret_pass','Ulangi password baru','required|matches[cg_pass]');


    if ($this->form_validation->run()){
      foreach ($this->akun_model->get_dataakun($this->session->userdata('nama'))->result() as $k):
      if ($k->password === md5($this->input->post('old_pass'))){
        $data=array(
          'password' => md5($this->input->post('ret_pass')),
        );
        $cek=$this->akun_model->mdubah_password($data);
        if ($cek !== FALSE){
          echo "<script>alert('Berhasil mengubah password');window.location.href='".base_url('akun')."'</script>";
        }
      }else{
          echo "<script>alert('Password yang anda masukkan salah');window.location.href='".base_url('akun/ubah_password')."'</script>";
      }
      endforeach;
    }else{
      echo "<script>alert('Bagian Ulangi password baru tidak sama dengan bagian Password baru');window.location.href='".base_url('akun/ubah_password')."'</script>";
    }
  }
  function tambah_akun(){
    $this->load->view('akun/vw_tambahakun');
  }
  function proses_tambahakun(){
    $this->form_validation->set_rules('nama','Nama lengkap','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('ret_password','Password','required|matches[password]');

    if ($this->form_validation->run()){
      $data=array(
        'nama'     => $this->input->post('nama'),
        'password' => md5($this->input->post('ret_password')),
        'posisi'   => $this->input->post('posisi'),
      );
      $insert=$this->akun_model->mdtambah_akun($data);

      if ($insert !== FALSE){
        echo "<script>alert('Berhasil menambah akun baru dan siap login');window.location.href='".base_url('akun')."'</script>";
      }else{
        echo "<script>alert('Gagal, kesalahan tidak diketahui');window.location.href='".base_url('akun/tambah_akun')."'</script>";
      }
    }else{
      $r=validation_errors();
      echo "<script>alert($r);window.location.href='".base_url('akun/tambah_akun')."'</script>";
    }
  }
  function hapus_akun(){
    $data['get_akun']=$this->akun_model->get_dataakun(NULL)->result();
    $this->load->view('akun/vw_hapusakun',$data);
  }
  function proses_hapus($id){
    $where=array(
      'id' => $id
    );

    $z=$this->akun_model->mdhapus_akun($where);

    if ($z !== FALSE){
      echo "<script>alert('Berhasil menghapus akun');window.location.href='".base_url('akun/hapus_akun')."'</script>";
    }else{
      echo "<script>alert('Gagal, benar benar gagal');window.location.href='".base_url('akun/hapus_akun')."'</script>";
    }
  }
  function ubah_jabatan(){
    $data['get_akun']=$this->akun_model->get_dataakun(NULL)->result();
    $this->load->view('akun/vw_ubahjabatan',$data);
  }
  function proses_ubahjabatan($id,$pos){
    switch ($pos){
      case 'admin' : $l="a";break;
      case 'master' : $l="m";break;
    }
    $data=array(
      'posisi' => $l
    );

    $update=$this->akun_model->mdubah_jabatan($data,$id);

    if ($update !== FALSE){
      echo "<script>alert('Berhasil mengubah posisi');window.location.href='".base_url('akun/ubah_jabatan')."'</script>";
    }else{
      echo "<script>alert('Gagal, Hontoni gagal');window.location.href='".base_url('akun/ubah_jabatan')."'</script>";
    }
  }
}
