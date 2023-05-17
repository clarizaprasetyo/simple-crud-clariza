<?php
include_once("config.php");

$hasil = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style type="text/css">
		center {
			padding-top: 100px;
		}
	</style>
</head>
<body>

<center>
	<h1>SIMPLE CRUD(Create, Read, Update, Delete)</h1>
	<a href="tambah.php">TAMBAH BARU</a><br><br>
	<table border=1 width="100">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Edit</th>
		</tr>
		<?php  
    while($produk_data = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$produk_data['id']."</td>";
        echo "<td>".$produk_data['nama_produk']."</td>";
        echo "<td>".$produk_data['keterangan']."</td>";
        echo "<td>".$produk_data['harga']."</td>";
          echo "<td>".$produk_data['jumlah']."</td>";    
        echo "<td><a href='edit.php?id=$produk_data[id]'>Edit</a> | <a href='hapus.php?id=$produk_data[id]'>Hapus</a></td></tr>";        
    }
    ?>
	</table>
</center>
</body>
</html>