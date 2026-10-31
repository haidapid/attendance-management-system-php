<?php
include "../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM anggota WHERE id ='$id'");
mysqli_query($koneksi, $query); 
echo '<script>alert("Data Berhasil dihapus !!!");
window.location.href="index.php?page=tabel"</script>';
// echo "<meta http-equiv='refresh' content='1; url=index.php?page=tabel'>";// mengalihkan halaman kembali ke index.php
?>