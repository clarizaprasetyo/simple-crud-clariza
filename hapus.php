<?php

include_once("config.php");
 

$id = $_GET['id'];
 
$hasil = mysqli_query($mysqli, "DELETE FROM produk WHERE id=$id");
 

header("Location:index.php");
?>