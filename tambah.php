<!DOCTYPE html>
<html>
<head>
	<title>Tambah Baru</title>
		<style type="text/css">
		center {
			padding-top: 100px;
		}
	</style>
</head>
<body>
	<center>
	<a href="index.php">Kembali</a>
	<br>
	<form action="tambah.php" method="post" name="form">
	<table>
		<tr>
			<td>Nama Produk</td>
			<td><input type="text" name="nama_produk"></td>
		</tr>
		<tr>
			<td>Keterangan Produk</td>
			<td><input type="text" name="keterangan"></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="text" name="jumlah"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td><input type="submit" name="Submit" value="Tambah"></td>
		</tr>
	</table>
	</form>

	<?php

	if (isset($_POST['Submit'])) {
		$namaproduk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$jumlah = $_POST['jumlah'];
		$harga = $_POST['harga'];

		include_once("config.php");

		$hasil = mysqli_query($mysqli, "INSERT INTO produk(nama_produk,keterangan,jumlah,harga) VALUES('$namaproduk','$keterangan','$jumlah','$harga')");
		echo "<br><br>Berhasil ditambahkan. <a href='index.php'>Lihat Produk</a>";
	}
	?>
</center>
</body>
</html>