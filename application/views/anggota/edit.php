<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update</title>

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
    <?php echo validation_errors();?>
    <?php echo $message;?>

    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-lg-2 control-label">Nis</label>
            <div class="col-lg-5">
                <input type="text" name="nis" class="form-control" value="<?php echo $anggota['nis'];?>" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Nama</label>
            <div  class="col-lg-5">
                <input type="text" name="nama" class="form-control" value="<?php echo $anggota['nama'];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Jenis Kelamin</label>
            <div class="col-lg-5">
                <select name="jk" class="form-control">
                    <option value="<?php echo $anggota['jk'];?>"><?php echo $anggota['jk'];?></option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Tanggal Lahir</label>
            <div class="col-lg-5">
                <input type="text" name="ttl" id="tanggal" class="form-control" value="<?php echo $anggota['ttl'];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Kelas</label>
            <div class="col-lg-5">
                <input type="text" name="kelas" class="form-control" value="<?php echo $anggota['kelas'];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Image</label>
            <div class="col-lg-5">
                <img src="<?php echo base_url('assets/img/anggota/'.$anggota['image']);?>" width="200px" height="200px">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label"></label>
            <div class="col-lg-5">
                <input type="file" name="gambar" class="form-control">
            </div>
        </div>
        <div class="form-group well">
            <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
            <a href="<?php echo site_url('anggota');?>" class="btn btn-default">Kembali</a>
        </div>
    </form>
