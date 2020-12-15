<?php
include '../../../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$nama_agen = mysqli_real_escape_string($koneksi, $_POST['nama_agen']);
$nama_kota = mysqli_real_escape_string($koneksi, $_POST['nama_kota']);
$nama_produk = mysqli_real_escape_string($koneksi, $_POST['nama_produk']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$query = "UPDATE produk_galon SET nama_agen='$nama_agen', nama_kota='$nama_kota', nama_produk='$nama_produk', harga='$harga' WHERE id='$id'";
$updateData = mysqli_query($koneksi, $query);

if($updateData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=produk_galon");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=edit_produk_galon&&id='$id'");
}

?>