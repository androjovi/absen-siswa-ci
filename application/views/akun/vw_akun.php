<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
  <div class="btn-group-vertical">
  <a href="<?php echo base_url('akun/ubah_password'); ?>" class="btn btn-primary" role="button">Ubah password anda</a>
  <?php if ($this->session->userdata('posisi_login') === "m"): ?>
  <a href="<?php echo base_url('akun/tambah_akun'); ?>" class="btn btn-primary" role="button">Tambah akun lain</a>
  <a href="<?php echo base_url('akun/hapus_akun'); ?>" class="btn btn-primary" role="button">Hapus akun lain</a>
  <a href="<?php echo base_url('akun/ubah_jabatan'); ?>" class="btn btn-primary" role="button">Ubah jabatan akun lain</a>
<?php endif; ?>
</div>
<p><p>Jumlah akun terdaftar <?php echo $dataakun; ?></p>
<p>Jumalh siswa di database <?php echo $jumlah_siswa; ?></p>
</main>
