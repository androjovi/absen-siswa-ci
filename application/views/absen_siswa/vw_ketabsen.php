<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
  <?php foreach($get_siswa as $k) :  ?>
  <form action="<?php echo base_url('dashboard/submit_ketabsen/'.$k->nis); ?>" method="post">
    <div class="form-group">
      <input type="text" style="display:none;" name="kel" class="form-control" value="<?php echo $k->kelas; ?>">
      <input type="text" style="display:none;" name="jur" class="form-control" value="<?php echo $k->jurusan; ?>">
        <input type="text" name="nis" class="form-control" disabled="true" hidden="true" value="<?php echo $k->nis; ?>">
      <label for="exampleInputEmail1">Nama siswa</label>
      <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" value="<?php echo $k->nama_lengkap; ?>" readonly="true">
    <?php endforeach; ?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Alasan tidak masuk</label>
      <input type="text" name="alasan" class="form-control" id="exampleInputPassword1" placeholder="Kenapa ?" required="true">
    </div>
    <!-- Start date -->
    <label for="exampleInputPassword1">Dari tanggal</label>
    <div class="form-group form-inline">
      <input type="number" title="Hari" name="d_hari" class="form-control" style="width:7%" value="<?php echo date('d'); ?>" required="true">&nbsp;
      <input type="number" title="Bulan" name="d_bulan" class="form-control" style="width:7%" value="<?php echo date('m'); ?>" required="true">&nbsp;
      <input type="number" title="Tahun" name="d_tahun" class="form-control" style="width:7%" value="<?php echo date('Y'); ?>" required="true">&nbsp;
  </div>
  <label for="exampleInputPassword1">Sampai tanggal</label>
  <div class="form-group form-inline">
    <input type="number" title="Hari"  name="s_hari" class="form-control" style="width:7%" value="<?php echo date('d'); ?>" required="true">&nbsp;
    <input type="number" title="Bulan" name="s_bulan" class="form-control" style="width:7%" value="<?php echo date('m'); ?>" required="true">&nbsp;
    <input type="number" title="Tahun" name="s_tahun" class="form-control" style="width:7%" value="<?php echo date('Y'); ?>" required="true">&nbsp;
</div>
<!-- End form date manually -->

    <!-- start Radio button -->
    <div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" name="mode" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="a"> Alpha
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" name="mode" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="i"> Izin
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" name="mode" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="s"> Sakit
  </label>
</div><br>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</main>
