<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {

case 'tambah_rfid';
	include 'tambah_rfid.php';
	break;

case 'tabel';
	include 'tabel.php';
	break;

case 'hapusdata';
	include 'hapusdata.php';
	break;

case 'about';
	include 'about.php';
	break;

case 'data_user';
	include 'data_user.php';
	break;

case 'tambah_user':
	include 'tambah_user.php';
	break;

case 'ubah_user';
	include 'ubah_user.php';
	break;

  }
}else{
    include "beranda.php";
  }
?>