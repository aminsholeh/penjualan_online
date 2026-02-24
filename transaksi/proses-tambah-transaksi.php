<?php
include("../koneksi.php");

if(isset($_POST['tambah'])){

    $kodetrx = $_POST['kode-trx'];
    $kodebrg = $_POST['kode-brg'];
    $nama = $_POST['nama-brg'];
    $harga = $_POST['harga-brg'];
    $jumlah = $_POST['jml-brg'];
    $tothrg = $_POST['tot-hrg'];
    $tgl = $_POST['tgl-trx'];

    $sql = "INSERT INTO transaksi (kode_transaksi, kode_brg, nama_brg, harga, 
            jumlah, total_bayar, tanggal)
            VALUE ('$kodetrx','$kodebrg','$nama','$harga','$jumlah','$tothrg','$tgl')";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: data-transaksi.php?status=sukses');
    }else{
        header('Location: data-transaksi.php?status=gagal');
    }
} else{
    die("Akses dilarang...!");
}

?>