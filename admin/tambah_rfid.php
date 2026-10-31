<div class="content-wrapper">
    <section class="content-header">
      <h1>
      TAMBAH RFID DATA RFID & FINGERPRINT
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH ID </li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <form role="form" enctype="multipart/form-data" method="post" action="">
              <div class="box-body">

                <div class="form-group">
                  <label>UID RFID</label>
                  <input type="text" name="id_rfid"   class="form-control" placeholder="UID RFID" id="id_rfid">
                </div>

                <div class="form-group">
                  <label>ID Finger</label>
                  <input type="text" name="id_finger" class="form-control" placeholder="ID Finger" required>
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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
  
  
$id_rfid = $_POST['id_rfid'];
$id_finger = $_POST['id_finger'];
$nama = $_POST['nama'];

  mysqli_query($koneksi, "INSERT INTO anggota VALUES ('', '".$id_rfid."','".$id_finger."','".$nama."')");
  echo '<script>alert("Data Berhasil Ditambahkan !!!");
  window.location.href="index.php?page=tabel"</script>';
  }
?>