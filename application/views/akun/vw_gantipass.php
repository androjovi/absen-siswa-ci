<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
  <form action="<?php echo site_url('akun/proses_ubahpassword'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputPassword1">Password baru</label>
    <input type="password" name="cg_pass" class="form-control" placeholder="Password baru">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ulangi password</label>
    <input type="password" name="ret_pass" class="form-control" placeholder="Ulangi password baru">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password lama</label>
    <input type="password" name="old_pass" class="form-control" placeholder="Masukkan password lama anda">
  </div>
  <button type="submit" class="btn btn-success">Ganti</button>
</form>
</main>
