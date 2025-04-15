<?php
//koneksi database
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$PelayananID = $_POST['PelangganID'];

// mengalihkan halaman kembeli ke pembelian.php
header("location:pembelian.php?pesan=hapus");

?>