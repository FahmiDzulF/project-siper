<!DOCTYPE html>
  <html>
  <head>
    <title>Perpustakaan</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles2.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
  </head>
  <body>
    <div class="navbar navbar-default navbar">
      <div class="gambar">
      </div>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('web');?>">Perpustakaan</a>
        </div>

          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li><a href="<?php echo site_url('web/anggota');?>"><i class="glyphicon glyphicon-user"></i> Anggota</a></li>
            <li><a href="<?php echo site_url('web/cari_buku');?>"><i class="glyphicon glyphicon-book"></i> Buku</a></li>
            </ul>
          <div class="nav navbar-nav navbar-right">
            </div>

        </div>
      </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-lock"></span> Login
                    </div>
                    <div class="panel-body">
                      <form class="form-horizontal" role="form" action="<?php echo site_url('web/proses');?>" method="post">
                        <?php echo $this->session->flashdata('message');?>

                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">
                            Username</label>
                            <div class="col-sm-9">
                              <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">
                              Password</label>
                              <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                              </div>
                            </div>
                            <div class="form-group last">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-default btn-sm">
                                        Sign in</button>
                                         <button type="reset" class="btn btn-default btn-sm">
                                        Reset</button>
                                      </br>
                                </div>
                            </div>
                        </form>
                    </div>

                    </div>
            </div>
            <div class="col-md-8 ">
                <legend>Selamat Datang di Aplikasi Perpusatakaan</legend>
                <p><i><b>&nbsp;&nbsp;&nbsp;&nbsp; Perpustakaan</b></i> adalah suatu ruang terdapat buku-buku yang disusun berdasarkan sistem tertentu untuk digunakan</p>
                <p>Sebagai media mencari ilmu dan wawasan setiap orang. Seiring dengan bertambahnya waktu maka ilmu juga akan</p>
                <p>Berkembang dengan pesat sehingga inventaris buku pada perpustakaan juga akan semakin bertambah, begitu pula</p>
                <p>Dengan anggota perpustakaan yang secara linier juga akan bertambah. Maka di perlukan suatu sistem informasi yang </p>
                <p>Dapat menampung dan mengakses semua data data tersebut dibuat komputerasi dengan menggunakan sistem</p>
                <p>Informasi perpustakaan yang data-datanya dapat dimasukkan ke dalam database sehingga memudahkan pengguna </p>
                <p>Perpustakaan dalam mencari informasi buku yang diinginkan dan pendataan buku-buku yang dilakukan, semuanyaa</p>
                <p>Dengan komputerisasi. Sistem informasi dikembangkan dari pemikiran dasar bagaimana otomatis terhadap berbagai</p>
                <p>Proses dalam perpustakaan. Sistem informasi perpustakaan juga merupakan sebuah sistem yang terintegerasi untuk  </p>
                <p>Menyediakan informasi guna mendukung operasi, manajement, dan fungsi pengembalian di perpustakaan. Sistem </p>
                <p>Informasi pada perpustakaan merupakan perangkat lunak yang di desain khusus untuk mempermudah pendataan </p>
                <p>Catalog, data anggota/peminjam, pengembalian perpustakaan dan Keseluruhannya bekerja.</p>
            </div>
        </div>
    </div>
  </nav>

</body>
</html>
