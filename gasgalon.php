<?php
$koneksi = mysqli_connect("localhost", "root", "", "antar_galon");

$sql = $koneksi->query("select * from tb_about_us");
$tampil = $sql->fetch_assoc();

$sql2 = $koneksi->query("select * from tb_profile");
$tampil2 = $sql2->fetch_assoc();

$sql3 = $koneksi->query("select * from tb_contact_us");
$tampil3 = $sql3->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Antar Galon & Gas LPG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flexor - v2.3.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>AntarGalon.com</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--<a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid" height="20px" width="40px"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li><a href="index.php">Home</a></li>
          <li class="active"><a href="gasgalon.php">Galon & Gas LPG</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="kerjasama.php">Kerja Sama</a></li>
          <li><a href="FAQ.php">FAQ</a></li>
          <li><a href="contacus.php">Contact</a></li>
          <li><a href="./login.php">Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Antar Galon & Gas LPG</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page pt-3">
      <div data-aos="fade-up" data-aos-delay="100" class="container">
        <form action="" method="POST" enctype="multipart/form-data">
          <table align="center" id="tabel-data" class="table table-borderless">
            <thead>
              <tr>

                <th> Id </th>
                <th> Nama Kota </th>
                <th> Nama Agen </th>
                <th> Alamat </th>
                <th> No. Whatsapp </th>
                <th> Bank </th>
                <th> AC </th>
              </tr>
            </thead>
            <?php
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, 'antar_galon');
            $query = "select * from agen_elpiji";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run)) {
            ?>
              <tr>

                <td> <?php echo $row['id']; ?></td>
                <td> <?php echo $row['nama_kota']; ?></td>
                <td> <?php echo $row['nama']; ?></td>
                <td> <?php echo $row['alamat']; ?></td>
                <td> <?php echo $row['whatsapp']; ?></td>
                <td> <?php echo $row['bank']; ?></td>
                <td> <?php echo $row['ac']; ?></td>
              </tr>

            <?php
            }
            ?>
          </table>
        </form>
      </div>
    </section>

    <section class="daftar">
      <div class="container" data-aos="fade-up" data-aos-delay="200">
            <p>Daftarkan diri anda untuk menjadi agen gas dan galon <b>Daftar disini!</b></p>
            <a href="https://api.whatsapp.com/send?phone=+6285385774717&text=Hi" role="button" class="more-btn">Daftar Sekarang<i class="bx bx-chevron-right"></i></a>
         
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>AntarGalon.com</h3>
            <p>
              Jl. Mataram No.13 <br>
              Kec. Margadana <br>
              Kota Tegal, Jawa Tengah <br> <br>
              <strong>Phone:</strong> +62 85385774717<br>
              <strong>Email:</strong> antargalon.com@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="antargalon.php">Galon & Gas LPG</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-us.php">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="kerja-sama.php">Kerja Sama</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="FAQ.php">FAQ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="mr-lg-auto text-center text-lg-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Flexor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
        <a href="https://www.youtube.com/channel/UCv_IwN3-nCjyVNyq4hTig1Q?view_as=subscriber" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="https://web.facebook.com/AntarGalonIDN" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/antargalonidn" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://wa.me/+6285385774717<?php echo $tampil3['wa'];?>?text=Saya%20ingin%20memesan%20galon%20atau%20gas"" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="mailto:antargalon.com@gmail.com" class="Email"><i class="bx bx-envelope"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tabel-data').DataTable();
    });
  </script>
</body>

</html>