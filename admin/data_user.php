  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Data Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">Data Admin</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
         <div class="box box-primary">
          <div class="box-header"> <!-- /.box-header -->
            <h3 class="box-title">
            <a href="index.php?page=tambah_user" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Admin</a>
            </h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div><!-- /.box-header -->

          <div class="box-body table-responsive collapsed-box">
              <table id="user" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>USERNAME</th>
                  <th>NAMA</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "../conf/conn.php";
                $no=0;
                $query=mysqli_query($koneksi,"SELECT * FROM user ORDER BY nim DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>
                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['nama'];?></td>
                        <td>
                    <a href="index.php?page=ubah_user&nim=<?=$row['nim'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="hapus_user.php?nim=<?=$row['nim'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>      
    </div>
  </section>

<script type="text/javascript">
  $(document).ready(function(){
    $('#user',).DataTable();
  });
</script>