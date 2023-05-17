<?php
include_once("config.php");
 

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $namaproduk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
        

    $hasil = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$namaproduk',keterangan='$keterangan',jumlah='$jumlah',harga='$harga' WHERE id='$id'");
    

    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 
$hasil = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");
 
while($produk_data = mysqli_fetch_array($hasil))
{
    $id = $produk_data['id'];
    $namaproduk = $produk_data['nama_produk'];
    $keterangan = $produk_data['keterangan'];
    $jumlah = $produk_data['jumlah'];
    $harga = $produk_data['harga'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>EDIT Produk</title>
</head>
<body>

    <center>
    <a href="index.php">Kembali</a>
   <br>
    <form action="edit.php" method="post" name="update">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nama_produk" value=<?php echo $namaproduk;?>></td>
        </tr>
        <tr>
            <td>Keterangan Produk</td>
            <td><input type="text" name="keterangan" value="<?php echo $keterangan;?>"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Perbarui"></td>
        </tr>
    </table>
    </form>
    </center>

</body>
</html>