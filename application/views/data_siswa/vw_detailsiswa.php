<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<?php foreach ($detail_siswa as $k) : ?>
  <div class="card border-primary mb-3 bg-light mb-3">
  <h4 class="card-header">Detail siswa</h4>
  <div class="card-body text-dark">
    <h4 class="card-title"><?php echo $k->nama_lengkap; ?></h4>
    <p class="card-text">Nomor Induk Siswa : <?php echo $k->nis; ?></p>
    <p class="card-text">Nama Lengkap : <?php echo $k->nama_lengkap; ?></p>
    <p class="card-text">Alamat : <?php echo $k->alamat; ?></p>
    <p class="card-text">No telp orangtua : <?php echo $k->no_telp_ortu; ?></p>
    <p class="card-text">No telp siswa : <?php echo $k->no_telp_siswa; ?></p>
    <p class="card-text">Kelas : <?php echo $k->kelas; ?></p>
    <p class="card-text">Jurusan : <?php echo $k->jurusan; ?></p>
    <p class="card-text">Tempat lahir : <?php echo $k->tempat_lahir; ?></p>
    <p class="card-text">Tanggal lahir : <?php echo $k->tgl_lahir; ?></p>
    <p class="card-text">Golongan darah : <?php echo $k->golongan_dar; ?></p>
  </div>
</div>
<?php endforeach; ?>
</main>
