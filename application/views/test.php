<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'test/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>User id</td>
				<td><input type="number" name="user_id"></td>
			</tr>
			<tr>
				<td>nama depan</td>
				<td><input type="text" name="nama_depan"></td>
			</tr>
			<tr>
				<td>nama belakang</td>
				<td><input type="text" name="nama_belakang"></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="mail" name="email"></td>
			</tr>

			<tr>
				<td>no hp</td>
				<td><input type="number" name="no_telp"></td>
			</tr>
			<tr>
				<td>tgl masuk</td>
				<td><input type="date" name="tgl_masuk" type="hidden"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>