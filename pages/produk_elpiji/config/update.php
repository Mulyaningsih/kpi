<?php
include '../../../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$id_kota = mysqli_real_escape_string($koneksi, $_POST['id_kota']);
$nama_agen = mysqli_real_escape_string($koneksi, $_POST['nama_agen']);
$nama_kota = mysqli_real_escape_string($koneksi, $_POST['nama_kota']);
$nama_produk = mysqli_real_escape_string($koneksi, $_POST['nama_produk']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$query = "UPDATE produk_elpiji SET nama_agen='$nama_agen', nama_kota='$nama_kota', nama_produk='$nama_produk', harga='$harga' WHERE id='$id'";
$updateData = mysqli_query($koneksi, $query);

if($updateData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=produk_elpiji");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=edit_produk_elpiji&&id='$id'");
}

?>