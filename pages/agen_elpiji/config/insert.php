<?php
include '../../../koneksi.php';

$nama_kota = mysqli_real_escape_string($koneksi, $_POST['nama_kota']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$whatsapp = mysqli_real_escape_string($koneksi, $_POST['whatsapp']);
$bank = mysqli_real_escape_string($koneksi, $_POST['bank']);
$ac = mysqli_real_escape_string($koneksi, $_POST['ac']);

$query = "INSERT INTO agen_elpiji (id, nama_kota, nama, alamat, whatsapp, bank, ac) VALUES (NULL, '$nama_kota', '$nama', '$alamat', '$whatsapp', '$bank', '$ac')";
$insertData = mysqli_query($koneksi, $query);

if($insertData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=agen_elpiji");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=tambah_agen_elpiji");
}

?>