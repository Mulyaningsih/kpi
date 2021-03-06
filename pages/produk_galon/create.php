<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk Galon</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Produk Galon</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="./produk_galon/config/insert.php" method="POST">
            <div class="form-group">
                <label for="">Nama Agen</label>
                <select name="nama_agen" id="" class="form-control">
                <option value="">--Pilih--</option>
                    <?php 
                        include '../koneksi.php';

                        $queryAgen = "SELECT * FROM agen_galon";
                        $agen = mysqli_query($koneksi, $queryAgen);
                        while ($row = mysqli_fetch_array($agen)) {
                            echo "<option value=".$row['nama'].">" .$row['nama'] . "</option>";
                        }
                    
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Kota</label>
                <select name="nama_kota" id="" class="form-control">
                <option value="">--Pilih--</option>
                <?php
                    include '../koneksi.php';

                    $queryKota = "SELECT * FROM kota";
                    $kota = mysqli_query($koneksi, $queryKota);
                    while ($row = mysqli_fetch_array($kota)) {
                    echo "<option value=".$row['nama_kota'].">" .$row['nama_kota'] . "</option>";
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama_produk" placeholder="Masukan nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="number" name="harga" placeholder="Masukan harga" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        
        </form>
    </div>
</section>