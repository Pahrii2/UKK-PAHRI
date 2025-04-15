<!DOCTYPE html>
<html>

<head>
    <title> Laporan Kasir</title>
</head>

<body>

    <center>

        <h2>DATA Laporan Kasir</h2>
    </center>

    <?php
    include '../koneksi.php';
    ?>

    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>ID penjualan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th width="5%">Total Harga</th>
        </tr>
        <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.PelangganID=penjualan.PelangganID");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['PelangganID']; ?></td>
            <td><?php echo $data['NamaPelanggan']; ?></td>
            <td><?php echo $data['Alamat']; ?></td>
            <td><?php echo $data['TotalHarga']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <script>
    window.print();
    </script>

</body>

</html>