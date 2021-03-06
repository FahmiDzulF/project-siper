<!DOCTYPE html>
  <html>
  <head>
    <title>Perpustakaan</title>
    <link href="<?php echo base_url('assets/css/styles2.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">

    <!--SCRIPT-->
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
    <script>
    </script>
  </head>
  <body>
    <div class="navbar navbar-default">
      <div class="gambar"></div>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('web');?>">Perpustakaan</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('web');?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li  ><a href="<?php echo site_url('web/anggota');?>"><i class="glyphicon glyphicon-user"></i> Anggota</a></li>
            <li class="active"><a href="<?php echo site_url('web/cari_buku');?>"><i class="glyphicon glyphicon-book"></i> Buku</a></li>
          </ul>
          <div class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('web/cari_buku');?>" method="post">
              <div class="form-group">
                <input type="text" name="cari" class="form-control" placeholder="Cari Buku">
              </div>
              <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
            </form>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  <div class="col-md-8 ">
  </br>
    <legend>Data Buku</legend>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>No.</td>
          <td>Gambar</td>
          <td>Kode Buku</td>
          <td>Judul Buku</td>
          <td>Pengarang</td>
          <td>Klasifikasi</td>
        </tr>
      </thead>
    </body>
    </html>
