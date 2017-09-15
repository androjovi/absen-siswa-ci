<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sidebar.css'); ?>">
    <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">NGNL <span style="font-size:12px;">Beta</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(''); ?>">Main page <span class="sr-only">(current)</span></a>
      </li>

      <?php $q=""; if ($this->session->userdata('status_login')==FALSE){ ?>
        <a class="btn btn-primary" href="<?php echo base_url('login') ?>" role="button">Masuk</a>
        <?php }else{ ?>
          <a class="btn btn-danger" href="<?php echo base_url('logout') ?>" role="button">Keluar</a>
          <?php $q="<a class='nav-link' href='".base_url('akun')."'>Selamat datang #".$this->session->userdata('nama')."  <span class='sr-only'>(current)</span><i class='fa fa-cog' aria-hidden='true'></i></a>"?>
          <?php } ?>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <?php echo $q; ?>
    </div>
  </div>
</nav>
