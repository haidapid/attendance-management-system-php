<?php
  ob_start();
			session_start();
      if($_SESSION['status']!="login"){
        echo "Anda tidak punya akses pada halaman admin";
        exit(header("Location:../logout.php"));
        exit;
      }
 ob_end_flush();
?>
<?php  include "header.php"; ?>

  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../images/<?php echo $_SESSION['nim']; ?>.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
	  
      <ul class="sidebar-menu">
      <li class="header">MENU</li>

        <li class="treeview">
            <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> <span>Beranda</span></a></li>
        </li>

        <li class="treeview">
        <li><a href="index.php?page=tabel"><i class="fa fa-table"></i> <span>Tabel</span></a></li>
        </li>

        <li class="treeview">
          <li><a href="index.php?page=data_user"><i class="glyphicon glyphicon-user"></i> <span>Data Admin</span></a>
        </li> 

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Content -->
<?php include "page.php"; ?>
<!-- /Content -->

<?php include "footer.php"; ?>
