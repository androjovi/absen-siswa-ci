<style>
.table {
width: 40%;
}

</style>
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
  <table class="table">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Posisi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($get_akun as $k): ?>
    <tr>
      <td><?php echo $k->nama; ?></td>
      <td><?php echo $k->posisi; ?></td>
      <td><a class="btn btn-warning" href="<?php echo site_url('akun/proses_hapus/'.$k->id); ?>" role="button">Hapus</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</main>
