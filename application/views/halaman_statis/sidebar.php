<script>
$().ready(function(){
  $("#main").click(function(){
    $("#main").addClass("active");
  })
  $("#data").click(function(){
    $("#data").addClass("active");
  })
  $("#absen").click(function(){
    $("#absen").addClass("active");
  })
})
</script>
<div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" id="main" href="<?php echo base_url(); ?>">Main page<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="data" href="<?php echo base_url('dashboard/data_siswa'); ?>">Data siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="absen" href="<?php echo base_url('dashboard/absen_siswa') ?>">Absen siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('dashboard/struktur') ?>">Struktur kelas</a>
            </li>
          </ul>
        </nav>
