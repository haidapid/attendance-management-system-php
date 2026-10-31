<?php
date_default_timezone_set('Asia/Jakarta');
$servername = "localhost";
$dbname = "rfid_finger";
$username = "root";
$password = "12345678";
$api_key_value = "rahasia";


$api_key= $id_finger = $nama =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $id_rfid = "-";
        $id_finger = test_input($_POST["id_finger"]);
        $nama = test_input($_POST["nama"]);
		$tanggal = date('Y-m-d H:i:s');
        $metode = "Fingerprint";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
		$sql = ("INSERT INTO rfid VALUES ('','".$id_rfid."','".$id_finger."','".$nama."','".$tanggal."','".$metode."')");
        if ($conn->query($sql) === TRUE) {
            echo "Kirim ke Database";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }
}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}