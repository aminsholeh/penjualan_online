<?php
include("../koneksi.php");

$sql = "SELECT * FROM barang";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Transaksi</title>
</head>
<body>
    <header>
        <h3>Form Tambah Transaksi</h3>
    </header>
    <form action="proses-tambah-transaksi.php" method="post">
        <fieldset>
            <p>
                <label for="kode">Kode Transaksi: </label>
                <input type="text" name="kode-transaksi" placeholder="Kode Transaksi" />
            </p>
            <p>
                <label for="kode">Kode Barang: </label>
                <input type="text" name="kode-barang" placeholder="Kode barang" />
            </p>
            <p>
                <label for="kode">Nama Barang: </label>
                <input type="text" name="nama-barang" placeholder="Nama barang" />
            </p>
            <p>
                <label for="kode">Harga Barang: </label>
                <input type="number" name="harga-barang" placeholder="Harga barang" />
            </p>
            <p>
                <label for="kode">Jumlah Pembelian: </label>
                <input type="number" name="jumlah-pembelian" placeholder="Jumlah pembelian" />
            </p>
            <p>
                <label for="kode">Total Bayar: </label>
                <input type="number" name="total-bayar" value="<?php echo $transaksi['jumlah']?>" />
            </p>
            <p>
                <label for="kode">Tanggal Transaksi: </label>
                <input type="date" name="tgl-transaksi" placeholder="Tanggal Transaksi" />
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah">
            </p>
        </fieldset>
    </form>
</body>
</html>