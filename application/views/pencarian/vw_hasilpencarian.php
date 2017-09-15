<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
  <form class="form-inline my-2 my-lg-0" action="<?php echo base_url('dashboard/cari'); ?>" method="post">
    <input class="form-control mr-sm-2" name="cari" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
<h2>Hasil pencarian dari : <em> <?php echo $what; ?></em></h2>
<h6>Ditemukan :<em> <?php echo $jumlah; ?></em></h6>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Nama siswa</th>
      <th>Alasan</th>
      <th>Keterangan</th>
      <th>Tanggal masuk</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hasil as $k):
      switch($k->ais){
        case 'i' : $z="Izin";break;
        case 's' : $z="Sakit";break;
        case 'a' : $z="Alpha";break;
      }
     ?>
    <tr>
      <th scope="row"><a href="<?php echo base_url('dashboard/detail_absen/'.$k->nis); ?>"><?php echo $k->nama; ?></a>
        <?php
        // :)
          if ($k->status){
            echo "<i class='fa fa-camera-retro</i>'>";
          }else{
            echo "Tidak";
          }
        ?></th>
      <td><?php echo $k->alasan; ?></td>
      <td><?php echo $z; ?></td>
      <td><?php echo $k->sampai_tanggal; ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</main>
