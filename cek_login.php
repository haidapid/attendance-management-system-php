<?php
session_start();
include 'conf/conn.php';
if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($koneksi,$_POST['username']);
    $password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
    
    if ($username != "" && $password != ""){

        $sql_query = "SELECT * FROM user where username='".$username."' and password='".$password."'";
        $result = mysqli_query($koneksi,$sql_query);
		$count=mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
	
		if($count==1){
		$_SESSION['status'] = "login";
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['nim'] = $row['nim'];
		header("location:admin/index.php");
		}
		else {
			header("location:index.php?pesan=gagal");
		}
	}
}
		ob_end_flush();
		?>