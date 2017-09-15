<style>
.table {
width: 70%;
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
      <?php switch ($k->posisi) {
        case 'm':
          $kd='Master';
          break;
          case 'a':
            $kd='Admin';
            break;

        default:
          $kd="Tidak diketahui";
          break;
      } ?>
      <td><?php echo $kd; ?></td>
      <td>
          <?php if ($k->posisi == "a"){ ?>
<i class="fa fa-long-arrow-up" aria-hidden="true"></i>&nbsp;<a class="btn btn-outline-success" href="<?php echo base_url('akun/proses_ubahjabatan/'.$k->id.'/master'); ?>" role="button">Master</a>
        <?php }else{ ?>
<i class="fa fa-long-arrow-down" aria-hidden="true"></i>&nbsp;<a class="btn btn-outline-danger" href="<?php echo base_url('akun/proses_ubahjabatan/'.$k->id.'/admin'); ?>" role="button">Admin</a>
        <?php } ?>

      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</main>
