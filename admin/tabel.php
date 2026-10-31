<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tabel
        <small>Tambah UID dan ID</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tabel</li>
      </ol>
    </section>
	
<section class="content">
	<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header"> 
			<h3 class="box-title">
				<a href="index.php?page=tambah_rfid" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah UID RFID & ID Fingerprint</a>
			</h3>
			<div class="box-body table-responsive">
				<table id="rfid" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>No</th>
					<th>UID RFID</th>
					<th>ID Finger</th>
					<th>Nama</th>
					<th>Aksi</th>
				</tr>
				</thead>
				<tbody>

				<?php
				include "../conf/conn.php";
				$no=0;
				$query=mysqli_query($koneksi,"SELECT * FROM anggota ORDER BY id DESC LIMIT 10");
				while ($row=mysqli_fetch_array($query))
				{
				?>
				<tr>
					<td><?php echo $no=$no+1;?></td>
					<td><?php echo $row['id_rfid'];?></td>
					<td><?php echo $row['id_finger'];?></td>
					<td><?php echo $row['nama'];?></td>
                    <td>
                     <a href="hapusdata.php?id=<?=$row['id'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                 </td>
				</tr>
				<?php } ?>
				</tbody>
				</table>
			</form>
			</div>
		</div>
	</div>
	</div>
	</div>
</section>
  </div>
<script>
  $(function () {
    $("#rfid").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    });
  });
</script>
