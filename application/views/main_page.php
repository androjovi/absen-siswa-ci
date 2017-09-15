<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

  <form class="form-inline my-2 my-lg-0" action="<?php echo base_url('dashboard/cari'); ?>" method="post">
    <input class="form-control mr-sm-2" name="cari" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

<h2>Siswa yang tidak masuk hari ini </h2>
<samp><?php date_default_timezone_set('Asia/Jakarta'); echo date('r'); ?></samp>
<p><small><i class='fa fa-check-circle' aria-hidden='true'></i> = Sudah dikonfirmasi oleh guru setempat</small></p>
<table class="table table-hover">
  <thead class="thead-default">
    <tr>
      <th>Nama siswa</th>
      <th>Kelas Jurusan</th>
      <th>Keterangan</th>
      <th>Tanggal masuk</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($get_absenlist as $k) :
      switch ($k->ais){
        case 'i' : $ais = "Izin"; break;
        case 'a' : $ais = "Alpha"; break;
        case 's' : $ais = "Sakit"; break;
        default  : $ais = "Tidak di ketahui"; break;
      }
    ?>
    <tr>
      <th scope="row"><?php
      // :)
      $z=explode(",",$k->status_absen);
        if (isset($z[1])){
          echo "<i class='fa fa-check-circle' aria-hidden='true'></i>&nbsp;&nbsp;";
        }else{

        }
      ?><a href="<?php echo base_url('dashboard/detail_absen/'.$k->nis); ?>" title="Lihat keterangan absennya"><?php echo $k->nama_lengkap; ?></a>

      </th>
      <td><?php echo $k->kelas; ?> <?php echo $k->jurusan ?></td>
      <td><?php echo $ais; ?></td>
      <td><?php echo $k->sampai_tanggal; ?> </td>
    </tr>
  <?php endforeach; ?>

  </tbody>
</table>
</main>
