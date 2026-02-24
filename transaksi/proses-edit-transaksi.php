<?php
include "../koneksi.php";

if(isset($_POST['submit'])) {
    $kodetrx = $_POST['kode-trx'];
    $kodebrg = $_POST['kode-brg'];
    $nama = $_POST['nama-brg'];
    $harga = $_POST['harga-brg'];
    $jml = $_POST['jml-brg'];
    $total = $_POST['tot-hrg'];
    $tgl = $_POST['tanggal'];


$sql = "UPDATE transaksi SET kode_brg='$kodebrg', nama_brg='$nama', 
        harga='$harga', jumlah='$jml', total_bayar='$total', tanggal='$tgl' 
        WHERE kode_transaksi='$kodetrx'";

$query = mysqli_query($db, $sql);

if ($query) {
    echo "<script>alert('Data Berhasil di Simpan');</script>";
    header("Location: data-transaksi.php");
} else {
   echo "<script>alert('Data Gagal di Simpan');</script>";
    header("Location: form-edit-transaksi.php");
}
}
?>