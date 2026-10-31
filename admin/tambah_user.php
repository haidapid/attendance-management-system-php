<div class="content-wrapper">
    <section class="content-header">
      <h1>
      TAMBAH USER
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH USER</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- ====================================Tambah User==================================== -->
        <div class="col-md-12">
          <div class="box box-primary">
            <form role="form" enctype="multipart/form-data" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control" placeholder="Foto" required>
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
        <!-- ====================================Tambah User==================================== -->
      </div>
    </section>
  </div>

  
<!-- ======================================= BATAS PHP ======================================= -->
<?php
include "../conf/conn.php";
if (isset($_POST['simpan'])){
$folder = "../images/";
$nim = $_POST['nim'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$fototmp = $_FILES['foto']['tmp_name'];
$format = ".png";
$nama_foto_baru = ($nim.$format);

if($foto != "") {	
    if (move_uploaded_file($fototmp,"$folder".$nama_foto_baru) )
    mysqli_query($koneksi, "INSERT INTO user VALUES ('', '".$nim."','".$username."','".$password."','".$nama."','".$nama_foto_baru."')");
    echo '<script>alert("Data Berhasil Ditambahkan !!!");
    window.location.href="index.php?page=data_user"</script>';
    }
    else {
        echo '<script>alert("Data Gagal Ditambahkan !!!");
        window.location.href="index.php?page=data_user"</script>';
        }
    }
?>