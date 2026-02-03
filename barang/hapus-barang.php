<?php
include("../koneksi.php");

if(isset($_GET['kode_brg'])){
    $kode = $_GET['kode_brg'];
    $sql = "DELETE FROM barang WHERE kode_brg=$kode";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: data-barang.php');
    } else{
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang");
}

?>