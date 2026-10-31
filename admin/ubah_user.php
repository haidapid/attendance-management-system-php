<?php
include "../conf/conn.php";
$query=mysqli_query($koneksi, "SELECT * FROM user WHERE nim='".$_GET['nim']."'");
$row = mysqli_fetch_array($query);
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      UBAH USER
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH USER</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <form role="form" enctype="multipart/form-data"  method="post" action="">
              <div class="box-body">
                <input type="hidden" name="nim" value="<?php echo $row['nim']; ?>">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" readonly required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" placeholder="Password" value="">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" required>
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control" placeholder="Foto" >
                </div>
              </div>
              <div class="box-footer">
                <button type="submit"  name="simpan" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
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
$password_tanpa_encrypt = $_POST['password'];
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$fototmp = $_FILES['foto']['tmp_name'];
$format = ".png";
$nama_foto_baru = ($nim.$format);
$level = $_POST['level'];

if($password_tanpa_encrypt != "" && $foto != "" ) {	//password di rubah foto di rubah
    unlink('../images/'.$nama_foto_baru); //hapus foto lama
    if (move_uploaded_file($fototmp,"$folder".$nama_foto_baru) )
    mysqli_query($koneksi, "UPDATE user SET username='$username',password='$password',nama='$nama',foto='$nama_foto_baru'  WHERE nim ='$nim'");
    echo '<script>alert("Data dan foto Berhasil Diubah !!!");
    window.location.href="index.php?page=data_user"</script>';
} 
else
if($password_tanpa_encrypt == "" && $foto != "" ) {	//password tidak di rubah foto di rubah
    unlink('../images/'.$nama_foto_baru); //hapus foto lama
    if (move_uploaded_file($fototmp,"$folder".$nama_foto_baru) )
    mysqli_query($koneksi, "UPDATE user SET username='$username',nama='$nama',foto='$nama_foto_baru'  WHERE nim ='$nim'");
    echo '<script>alert("Foto Berhasil Diubah !!!");
    window.location.href="index.php?page=data_user"</script>';
    }
else
if($password_tanpa_encrypt != "" && $foto == "" ) {	//password di rubah foto tidak di rubah
    mysqli_query($koneksi, "UPDATE user SET username='$username',password='$password',nama='$nama'  WHERE nim ='$nim'");
    echo '<script>alert("Data Berhasil Diubah !!!");
    window.location.href="index.php?page=data_user"</script>';
    }

else { // jika password tidak di rubah
mysqli_query($koneksi, "UPDATE user SET username='$username',nama='$nama'  WHERE nim ='$nim'");
echo '<script>alert("Data Berhasil Diubah Tanpa Password !!!");
window.location.href="index.php?page=data_user"</script>';
}
}
?>