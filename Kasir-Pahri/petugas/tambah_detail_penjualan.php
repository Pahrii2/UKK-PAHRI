<?php
// koneksi database
include '../koneksi.php';

//menangkap data dikirim dari form
$PelangganID = $_POST['PelangganID'];
$PenjualanID = $_POST['PenjualanID'];

// menginput data ke database
mysqli_query($koneksi,"insert into detailpenjualan values('','$PenjualanID','','','')");

// mengalihkan halaman kembali ke detail_pembelian.php
header("location:detail_pembelian.php?PelangganID=$PelangganID");

?>