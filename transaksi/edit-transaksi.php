<?php
include '../koneksi.php';

if(!isset($_GET['kode_transaksi'])){
    header('Location: data-transaksi.php');
}
$kode = $_GET['kode_transaksi'];

$sql = "SELECT * FROM transaksi WHERE kode_transaksi = $kode";
$query = mysqli_query($db, $sql);
$trx = mysqli_fetch_assoc($query);

$sql2 = "SELECT * FROM barang";
$result = mysqli_query($db, $sql2);

if( mysqli_num_rows($query)< 1){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
</head>
<body>
    <h1>Edit Transaksi</h1>
    <form action="proses-edit-transaksi.php" method="post">
        <fieldset>
        <br>
        Kode Transaksi: <input type="text" name="kode-trx" value="<?php echo $trx['kode_transaksi'] ?>" readonly><br />
        <br>
        Kode Barang:
        <select name="kode-brg" id="kode-brg">
            <?php
            while($barang = mysqli_fetch_array($result)){
                $status = ($barang['kode_brg'] == $trx['kode_brg']) ? "selected" : "";
                echo "<option value=".$barang['kode_brg']
                    ." data-nama = ".$barang['nama_brg']
                    ." data-hrg = ".$barang['harga']." ".$status.">"
                    .$barang['kode_brg']." - ".$barang['nama_brg']."</option>";
            }
            ?>

        </select>
        <br>
        <br>
        Nama Barang: <input type="text" name="nama-brg" id="nama-brg" value="<?php echo $trx['nama_brg'] ?>" readonly><br />
        <br>
        Harga Barang: <input type="number" name="harga-brg" id="harga-brg" value="<?php echo $trx['harga'] ?>" readonly><br />
        <br>
        Jumlah: <input type="number" name="jml-brg" value="<?php echo $trx['jumlah'] ?>" ><br />
        <br>
        Total Harga: <input type="number" name="tot-hrg" value="<?php echo $trx['total_bayar'] ?>" readonly><br />
        <br>
        Tanggal: <input type="date" name="tanggal" value="<?php echo $trx['tanggal'] ?>"><br />
        <br>

        <button type="submit" name="submit">Simpan</button>
        
        </fieldset>
    </form>
</body>
</html>

<script>
    document.querySelector('select').addEventListener('change', function() {
        const selectedOpt = this.options[this.selectedIndex];
        document.getElementById('nama-brg').value = selectedOpt.dataset.nama;
        document.getElementById('harga-brg').value = selectedOpt.dataset.hrg;
    })

    document.querySelector('input[name="jml-brg"]').addEventListener('change', function() {
        const harga = document.getElementById('harga-brg').value;
        const jml = this.value;
        const total_harga = harga * jml;
        document.querySelector('input[name="tot-hrg"]').value = total_harga;
    })
</script>
