<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>

  <div class="nav navbar-nav navbar-right">
    <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('buku/cari');?>" method="post">
      <div class="form-group">
        <label>Cari Kode / Judul</label>
        <input type="text" class="form-control" placeholder="Search" name="cari">
      </div>
      <button type="submit" class="btn btn-default">
      </form>
    </div>
    <a href="<?php echo site_url('buku/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
    <hr>

    <?php echo $mesage;?>
    <table class="table table-striped">
      <thead>
        <tr>
        <td>No. </td>
        <td>Image</td>
        <td>Kode BuKU</td>
        <td>Judul</td>
        <td>Pengarang</td>
        <td>Klasifikasi</td>
        <td colspan="2"></td>
      </tr>
    </thead>


</html>
