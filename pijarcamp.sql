create database pijarcamp;
 
use pijarcamp;
 
CREATE TABLE `produk` (
  `id` int(11) NOT NULL auto_increment,
  `nama_produk` varchar(100),
  `keterangan` varchar(100),
  `harga` varchar(15),
  `jumlah` int(10),
  PRIMARY KEY  (`id`)
);