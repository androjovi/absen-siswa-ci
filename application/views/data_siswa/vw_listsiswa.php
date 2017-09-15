<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NIS</th>
        <th>Nama siswa</th>
        <th>No orangtua</th>
        <th>No siswa</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list_siswa as $k) : ?>
      <tr>
        <th scope="row"><?php echo $k->nis; ?></th>
        <td><a href="<?php echo base_url("dashboard/detail_siswa/".$k->nis); ?>"><?php echo $k->nama_lengkap; ?></a></td>
        <td><?php echo $k->no_telp_ortu; ?></td>
        <td><?php echo $k->nis; ?></td>
        <td><?php echo $k->alamat; ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
