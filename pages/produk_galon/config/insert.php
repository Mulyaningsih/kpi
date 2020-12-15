<?php
include '../../../koneksi.php';

$nama_agen = mysqli_real_escape_string($koneksi, $_POST['nama_agen']);
$nama_kota = mysqli_real_escape_string($koneksi, $_POST['nama_kota']);
$nama_produk = mysqli_real_escape_string($koneksi, $_POST['nama_produk']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$query = "INSERT INTO produk_galon (id, nama_agen, nama_kota, nama_produk, harga) VALUES (NULL,'$nama_agen','$nama_kota', '$nama_produk', '$harga')";
$insertData = mysqli_query($koneksi, $query);

if($insertData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=produk_galon");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=tambah_produk_galon");
}

?>