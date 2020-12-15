<?php 
include '../koneksi.php';
$query = mysqli_query($koneksi, 'SELECT * FROM produk_elpiji INNER JOIN kota ON produk_elpiji.id_kota = kota.id');
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk Elpiji</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Produk Elpiji</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <?php 
        $id = $_GET['id'];
        while($rowProduk = mysqli_fetch_array($query)){
        ?>
        <form action="./produk_elpiji/config/update.php" method="POST">
        <input type="hidden" name="id" value="<?=$rowProduk['id']?>">
            <div class="form-group">
                <label for="">Nama Agen</label>
                <select name="nama_agen" id="" class="form-control">
                    <option value="">--Pilih--</option>
                    <?php 
                        $queryAgen = "SELECT * FROM agen_elpiji";
                        $agen = mysqli_query($koneksi, $queryAgen);
                        while ($row = mysqli_fetch_array($agen)) {
                            if($rowProduk['id_agen'] == $row['id']){
                                $selected = 'selected';
                            }else{
                                $selected = '';
                            }

                            echo "<option $selected value=".$row['nama'].">" .$row['nama'] . "</option>";
                        }
                    
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Kota</label>
                <select name="nama_kota" id="" class="form-control">
                    <option value="">--Pilih--</option>
                    <?php
                        $queryKota = "SELECT * FROM kota";
                        $kota = mysqli_query($koneksi, $queryKota);
                        while ($row = mysqli_fetch_array($kota)) {
                            if($rowEdit['nama_kota'] == $row['nama_kota']){
                                $selected = 'selected';
                            }else{
                                $selected = '';
                            }
                            echo "<option value=".$row['nama_kota']." $selected>" .$row['nama_kota'] . "</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama_produk" placeholder="Masukan nama" class="form-control" value="<?=$rowProduk['nama_produk']?>">
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="number" name="harga" placeholder="Masukan harga" class="form-control"  value="<?=$rowProduk['harga']?>">
            </div>
            <div class="modal-footer">
                <button type="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        
        </form>
        <?php } ?>
    </div>
</section>