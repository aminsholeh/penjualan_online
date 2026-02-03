<?php include("../koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
</head>
<body>
    <h1>Data Transaksi</h1>
    <a href="../index.php"><-- Kembali</a>
    <br>
    <a href="tambah-transaksi.php">[+] Tambah Transaksi</a>
    <br>
    <br> 
    <table border="1">
        <thead>
            <tr>
                <th>Kode Transaksi</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah Pembelian</th>
                <th>Total Bayar</th>
                <th>Tanggal Pembelian</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM transaksi"; //untuk memilih tabel yg ditampilkan
            $query = mysqli_query($db, $sql);

            while($datatransaksi = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$datatransaksi['kode_transaksi']."</td>";
                echo "<td>".$datatransaksi['kode_brg']."</td>";
                echo "<td>".$datatransaksi['nama_brg']."</td>";
                echo "<td>".$datatransaksi['harga']."</td>";
                echo "<td>".$datatransaksi['jumlah']."</td>";
                echo "<td>".$datatransaksi['total_bayar']."</td>";
                echo "<td>".$datatransaksi['tanggal']."</td>";
                
                echo "<td>";
                echo "<a href='edit-transaksi.php?kode_transaksi=".$datatransaksi['kode_transaksi']."'>Edit</a> | ";
                echo "<a href='hapus-transaksi.php?kode_transaksi=".$datatransaksi['kode_transaksi']."'>Hapus</a> ";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>