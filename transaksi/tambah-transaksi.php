<?php
include("../koneksi.php");

$sql = "SELECT kode_brg, nama_brg, harga FROM barang";
$query = mysqli_query($db, $sql);


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
                <label for="kode-trx">Kode Transaksi: </label>
                <input type="text" name="kode-trx" />
            </p>
            <p>
                <label for="kode-brg">Kode Barang: </label>
                <select name="kode-brg" id="kode-brg">
                    <option value="" disabled selected> --- Pilih Barang --- </option>
                    <?php
                    while($barang = mysqli_fetch_array($query)){
                        echo "<option value=".$barang['kode_brg']
                            ." data-nama = ".$barang['nama_brg']
                            ." data-hrg = ".$barang['harga'].">"
                            .$barang['kode_brg']." - " .$barang['nama_brg']
                            ."</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                <label for="nama-brg">Nama Barang: </label>
                <input type="text" name="nama-brg" id="nama-brg" readonly/>
            </p>
            <p>
                <label for="harga-brg">Harga Barang: </label>
                <input type="number" name="harga-brg" id="harga-brg" readonly/>
            </p>
            <p>
                <label for="jml-brg">Jumlah Pembelian Barang: </label>
                <input type="number" name="jml-brg" id="jml-brg" placeholder="Jumlah pembelian" />
            </p>
            <p>
                <label for="tot-hrg">Total Harga: </label>
                <input type="number" name="tot-hrg" id="tot-hrg" readonly />
            </p>
            <p>
                <label for="kode">Tanggal Transaksi: </label>
                <input type="date" name="tgl-trx" placeholder="Tanggal Transaksi" />
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah">
            </p>
        </fieldset>
    </form>
</body>
</html>

<script>
    document.querySelector('select').addEventListener('change', function(){
        const selectedOpt = this.options[this.selectedIndex];
        document.getElementById('nama-brg').value = selectedOpt.dataset.nama;
        document.getElementById('harga-brg').value = selectedOpt.dataset.hrg;
    })
    document.querySelector('input[name="jml-brg"]').addEventListener('change', function(){
        const harga = document.getElementById('harga-brg').value;
        const jml = this.value;
        const total_harga = harga * jml;
        document.querySelector('input[name="tot-hrg"]').value = total_harga;
    })
</script>