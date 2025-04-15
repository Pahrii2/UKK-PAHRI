<?php
// koneksi database
include '../koneksi.php';
// menangkap data id yang di kitim dari url
$DetailID = $_POST['DetailID'];
$php_PelayananID = $_POST['PelangganID'];
// menghapus data dari database
mysqli_query($koneksi,"delete from detailpenjualan where DetailID='$DeatailID'");
// mengalihkan halaman kembali ke data_barang.php
header("location:detail_pembelian.php?$PelangganID");
?>