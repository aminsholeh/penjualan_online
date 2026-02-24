<?php
include("../koneksi.php");

if(isset($_GET['kode_transaksi'])){
    $kode_trx = $_GET['kode_transaksi'];

    $sql = "DELETE FROM transaksi WHERE kode_transaksi=$kode_trx";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: data-transaksi.php');
    } else{
        die("gagal menghapus...");
    }
} else{
    die("akses dilarang..");
}

?>