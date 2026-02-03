<?php
include("../koneksi.php");

if(!isset($_GET['kode_brg'])){
    header('Location: data-barang.php');
}
$kode = $_GET['kode_brg'];

$sql = "SELECT * FROM barang WHERE kode_brg=$kode";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die("data tidak ditemukan..");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Barang</title>
</head>
<body>
    <header>
        <h3>Form Edit Barang</h3>
    </header>
    <form action="proses-edit-barang.php" method="post">
        <fieldset>
            <input type="hidden" name="kode" value="<?php echo $barang['kode_brg'] ?>" />
            <p>
                <label for="nama">Nama Barang: </label>
                <input type="text" name="nama" value="<?php echo $barang['nama_brg']?>"/>
            </p>
            <p>
                <label for="merk">Merk Barang: </label>
                <input type="text" name="merk" value="<?php echo $barang['merk']?>" />
            </p>
            <p>
                <label for="harga">Harga Barang: </label>
                <input type="number" name="harga" value="<?php echo $barang['harga']?>" />
            </p>
            <p>
                <label for="jumlah">Jumlah Barang: </label>
                <input type="number" name="jumlah" value="<?php echo $barang['jumlah']?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan">
            </p>
        </fieldset>
    </form>
</body>
</html>