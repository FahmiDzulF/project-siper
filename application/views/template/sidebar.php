    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <span class="glyphicon glyphicon-folder-close"></span> Master</a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
          <table class="table">
            <tr>
              <td>
                <span class="glyphicon glyphicon-pencil text-primary-danger"></span> <a href="<?php echo site_url('anggota');?>" style="text-decoration:none">Anggota</a>
              </td>
            </tr>
            <tr>
              <td>
                <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('buku');?>" style="text-decoration:none">Buku</a>
              </td>
            </tr>
            <tr>
              <td>
                <span class="glyphicon glyphicon-user"></span> <a href="<?php echo site_url('dashboard/petugas');?>" style="text-decoration:none">Petugas</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <span class="glyphicon glyphicon-credit-card">
          </span> Transaksi</a>
        </h4>
      </div>
      <div class="panel-body">
        <table class="table">
          <tr>
            <td>
              <span class="glyphicon glyphicon-saved"></span><a href="<?php echo site_url('peminjaman');?>" style="text-decoration:none"> Peminjaman</a></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <span class="glyphicon glyphicon-file">
          </span> Laporan</a>
        </h4>
      </div>

        <div class="panel-body">
          <table class="table">
            <tr>
              <td>
                <span class="glyphicon glyphicon-user"></span><a href="<?php echo site_url('laporan/anggota');?>"style="text-decoration:none"> Data Anggota</a>
              </td>
            </tr>
            <tr>
              <td>
                <span class="glyphicon glyphicon-book"></span><a href="<?php echo site_url('laporan/buku');?>"style="text-decoration:none"> Data Buku</a>
              </td>
            </tr>
            <tr>
              <td>
                <span class="glyphicon glyphicon-tasks"></span><a href="<?php echo site_url('laporan/peminjaman');?>"style="text-decoration:none"> Data Peminjaman</a>
              </td>
            </tr>
            <tr>
              <td>
                <span class="glyphicon glyphicon-list-alt"></span><a href="<?php echo site_url('laporan/pengembalian');?>"style="text-decoration:none"> Data Pengembalian</a>
              </td>
            </tr>
          </table>
        </div>
      </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="<?php echo site_url('dashboard/logout');?>" style="text-decoration:none"><span class="glyphicon glyphicon-off">
          </span> Logout</a>
        </h4>
      </div>
    </div>
