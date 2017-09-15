<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
  <form action="<?php echo site_url('akun/proses_tambahakun'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama lengkap">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="password" class="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ulangi password</label>
    <input type="text" name="ret_password" class="form-control" placeholder="Ulangi password anda">
  </div>
  <div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" name="posisi" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="m"> Master
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" name="posisi" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="a"> Admin
  </label>
</div>
<div class="form-group">
  <button type="submit" class="btn btn-success">Tambah</button>
</div>
</form>
</main>
