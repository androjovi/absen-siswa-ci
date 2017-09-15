<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library(array('session','form_validation'));
    $this->load->model('login_model');
    if ($this->session->userdata("status_login")){
      echo "<script>alert('Anda sudah masuk');window.location.href='".base_url('dashboard')."'</script>";
    }
    $this->load->view('halaman_statis/navbar_dashboard');
  }
  private function hash_password($pass){
    // $hash = md5(sha1(md5(md5($pass))));
    // md5($pass);
    // return crypt('$2y$',$pass);
    return md5($pass);
  }
  function index(){
    $this->load->view('login/vw_login');
  }
  function proses_login(){
    $this->form_validation->set_rules('pass','Password','required');

    if ($this->form_validation->run()){
      $encrypt=$this->hash_password($this->input->post('pass'));
       // echo $encrypt;
      $data_pass=array(
        'password' => $encrypt
      );

      $cek=$this->login_model->cek_pass($data_pass);

      if ($cek->num_rows()==1){
        $data_pos=$cek->result();
          foreach ($data_pos as $value) :
            $input_sesi=array(
              'status_login' => TRUE,
              'posisi_login' => $value->posisi,
              'nama'         => $value->nama
            );
            
          endforeach;


          $this->session->set_userdata($input_sesi);

        redirect("dashboard");
      }else{
         // echo "Tidak berhasil";
        echo "<script>alert('Password tidak terdaftar');window.location.href='".base_url('login')."'</script>";
      }
    }else{
      echo "Kesalahan";
    }
  }
}

/* End of file Login.php
 * Location application/controllers/Login.php
 */
