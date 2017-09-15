<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<small>Ket</small>
<p><small><i class='fa fa-times' aria-hidden='true'></i> = Tidak masuk,&nbsp;&nbsp;<i class='fa fa-check-circle-o' aria-hidden='true'></i> = Sudah dikonfirmasi oleh guru</small></p>
  <table class="table table table-hover">
    <thead>
      <tr>
        <th>NIS</th>
        <th>Nama siswa</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list_siswa as $k) : ?>
      <tr>
        <th scope="row"><?php echo $k->nis; ?>
        </th>
        <td><?php echo $k->nama_lengkap; ?>
          <?php
          // :)
          $kl="";
          if ($this->session->userdata('status_login') == TRUE){
            if ($k->status_absen == "tidak"){
              echo "<i class='fa fa-times' aria-hidden='true'></i>";
              $kl="<a class='btn btn-outline-success' href='".base_url('dashboard/verify_siswa/'.$k->nis)."' role='button'>Verify</a>";
            }
            $z=explode(",",$k->status_absen);
              if (isset($z[1])){
                echo "<i class='fa fa-times' aria-hidden='true'></i>&nbsp;<i class='fa fa-check-circle-o' aria-hidden='true'></i>";
              }
          }else{
            // Do somting
          }
          ?></td>
        <td><a class="btn btn-outline-primary" href="<?php echo base_url('dashboard/ket_absen/'.$k->nis); ?>" role="button">Absen</a>&nbsp;&nbsp;<?php echo $kl; ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
