<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('test/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
			<th>Action</th>
			<th>Action</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->user_id ?></td>
			<td><?php echo $u->nama_depan ?></td>
			<td><?php echo $u->nama_belakang ?></td>
			<td>
			      <?php echo anchor('test/edit/'.$u->user_id,'Edit'); ?>
                              <?php echo anchor('test/hapus/'.$u->user_id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>