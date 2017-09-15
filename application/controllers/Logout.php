<?php
class Logout extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library(array('session'));
  }
  function index(){
    $this->session->sess_destroy();
    echo "<script>alert('Anda berhasil logout');window.location.href='".base_url('dashboard')."'</script>";
  }
}
