<!DOCTYPE html>
<html>
<head>
	<title> tambah data</title>
</head>
<body>
	<form action="<?php echo site_url('tambahData'); ?>" method="post">
		<input type="text" name="nama" placeholder="nama">
		<br> <br>
		<input type="text" name="pekerjaan" placeholder="pekerjaan"> <br> <br>
		<textarea name="alamat"> </textarea><br> <br>
		<input type="submit" value="tambah">
	</form>
</body>
</html>