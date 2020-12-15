<?php
include '../koneksi.php';
$query = mysqli_query($koneksi, 'SELECT * FROM agen_galon INNER JOIN kota ON agen_galon.id_kota = kota.id');
?>


<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Agen Galon</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Agen Galon</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <button type="button" class="btn btn-sm float-right" data-toggle="modal" data-target="#modal-tambah">
    <a href="index.php?page=tambah_agen_galon" class="btn btn-success">Tambah Data</a>
  </button>
  <br>
  <br>
  
  <div class="container-fluid">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kota</th>
          <th>Nama Agen</th>
          <th>Alamat Agen</th>
          <th>Whatsapp Agen</th>
          <th>Bank Agen</th>
          <th>AC Agen</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          while ($agen_galon = mysqli_fetch_array($query)) {
            if (mysqli_num_rows($query)) {
        ?>
        <tr>
          <td><?=$no++?></td>
          <td><?=$agen_galon['nama_kota']?></td>
          <td><?=$agen_galon['nama']?></td>
          <td><?=$agen_galon['alamat']?></td>
          <td><?=$agen_galon['whatsapp']?></td>
          <td><?=$agen_galon['bank']?></td>
          <td><?=$agen_galon['ac']?></td>
          <td>
            <a href="index.php?page=edit_agen_galon&&id=<?=$agen_galon['id']?>" class="btn btn-warning btn-sm">Edit</a>
            <button type="button" class="btn btn-danger btn-sm"
                onclick="return deleteData(<?=$agen_galon['id']?>)">
                Hapus
            </button>
            <form action="./agen_galon/config/destroy.php" method="post" id="form-delete-<?=$agen_galon['id']?>">
              <input type="hidden" name="id" value="<?=$agen_galon['id']?>">
            </form>
          </td>
        </tr>
        <?php
          }else{
            echo '<tr><td colspan="3">Tidak ada Data</td></tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</section>
<!-- /.content -->

<script>
  $(function(){
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    let pesan = localStorage.getItem('pesan');
    if(pesan == 'success'){
        Toast.fire({
        icon: 'success',
        title: 'Berhasil.'
      })
      localStorage.removeItem('pesan')
    }else if(pesan == 'warning'){
        Toast.fire({
        icon: 'warning',
        title: 'Gagal.'
      })
      localStorage.removeItem('pesan')
    }
  })

  function deleteData(id){
    let deleteConfirm = confirm('Apakah anda yakin?');
    if(deleteConfirm == true){
      document.querySelector('#form-delete-'+id).submit();
    }else{
      return false;
    }

  }
</script>