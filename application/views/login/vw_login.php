<div class="row">
  <div class="container-fluid">
<main class="col-xs-6 col-md-4 col-xs-6 col-md-4" role="main">
<form action="<?php echo base_url('login/proses_login'); ?>" method="post">
  <div class="form-group">
      <input type="text" name="nis" class="form-control" disabled="true" hidden="true" value="">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="Password anda" required="true">
  </div>
  <button type="submit" class="btn btn-outline-primary my-2 my-sm-">Login</button>
