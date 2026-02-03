<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE barang SET kode_brg='$kode',
            nama_brg='$nama', merk='$merk', 
            harga='$harga', jumlah='$jumlah'
            WHERE kode_brg='$kode'";
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