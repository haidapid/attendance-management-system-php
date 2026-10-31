<?php
include "../conf/conn.php";
$nim = $_GET['nim'];
$format = ".png";
$nama_foto_baru = ($nim.$format);
$query = ("DELETE FROM user WHERE nim ='$nim'");
unlink("../images/".$nama_foto_baru); 
if(!mysqli_query($koneksi, $query)){
die(mysqli_error);
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="index.php?page=data_user"</script>';
}
?>