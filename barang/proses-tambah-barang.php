<?php
include("../koneksi.php");

if(isset($_POST['tambah'])){

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO barang (kode_brg, nama_brg, merk, harga, jumlah)
            VALUE ('$kode','$nama','$merk','$harga','$jumlah')";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: data-barang.php?status=sukses');
    }else{
        header('Location: data-barang.php?status=gagal');
    }
} else{
    die("Akses dilarang...!");
}

?>