<?php
	include "../conf/conn.php";
    $sql    = mysqli_query($koneksi,"SELECT * FROM rfid WHERE YEAR(tanggal) = YEAR(NOW()) AND MONTH(tanggal) = MONTH(NOW()) AND DAY(tanggal) = DAY(NOW()) ORDER BY tanggal DESC");
    $result    =array();
    while ($row    =mysqli_fetch_assoc($sql)) {
        $data[]    =$row;
    }
    echo json_encode(array("result" => $data));
?>
