<?php
include "conf/conn.php";
$id_finger = $_GET['id_finger'];
$myArray = array();

if ($result = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_finger='$id_finger' limit 1")) {
    	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {   
         $myArray[] = $row['nama'];
    	}
      mysqli_close($koneksi);
      $myArray1 = json_encode($myArray);
      $rev1 = str_replace('["', '', $myArray1);
      $rev2 =str_replace('"]', '', $rev1);
    	echo ($rev2);
  }
?>