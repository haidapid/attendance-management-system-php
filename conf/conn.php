<?php
//rubah juga pada file terima_data.php dan folder tombol
$koneksi=mysqli_connect('localhost','root','12345678') or die('Connect Failed !!!');
mysqli_select_db($koneksi,'rfid_finger') or die('Database Not Found !!!');
?>

