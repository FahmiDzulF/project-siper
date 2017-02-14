<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Anggota | Perpustakaan</title>

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

    <div class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('anggota/cari');?>" method="post">
        <div class="form-group">
            <label>Cari Nama</label>
            <input type="text" class="form-control" placeholder="Search" name="cari">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari Anggota</button>
        </form>
      </div>
      <a href="<?php echo site_url('anggota/tambah');?>"class ="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Tambah Anggota</a>



      <?php echo $message;?>
        <table class="table table-striped">
          <thead>
            <tr>
              <td>No.</td>
            <td>Gambar</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>JK</td>
            <td>Tanggal Lahir</td>
            <td>Kelas</td>
            <td colspan="2"></td>
        </tr>
    </thead>
    <?php $no=0; foreach($anggota as $row ): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><img src="<?php echo base_url('assets/img/anggota/'.$row->image);?>" height="100px" width="100px"></td>
        <td><?php echo $row->nis;?></td>
        <td><?php echo $row->nama;?></td>
        <td><?php echo $row->jk;?></td>
        <td><?php echo $row->ttl;?></td>
        <td><?php echo $row->kelas;?></td>
        <td><a href="<?php echo site_url('anggota/edit/'.$row->nis);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
        <td><a href="#" class="hapus" kode="<?php echo $row->nis;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
    <?php endforeach;?>
</Table>
<?php echo $pagination;?>

<script>
    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");

            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });

        $("#konfirmasi").click(function(){
            var kode=$("#idhapus").val();

            $.ajax({
                url:"<?php echo site_url('anggota/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('anggota/index/delete_success');?>";
                }
            });
        });
    });
</script>
