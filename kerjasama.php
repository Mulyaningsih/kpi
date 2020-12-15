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

  <title>Kerja Sama</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style3.css" rel="stylesheet">

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
        <!--<a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid" height="20px" width="40px"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="gasgalon.php">Galon & Gas LPG</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li class="active"><a href="#">Kerja Sama</a></li>
          <li><a href="FAQ.php">FAQ</a></li>
          <li><a href="contacus.php">Contact</a></li>
          <li><a href="./login.php">Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- judul -->
    <section class="judul" id="judul">
      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <h1>Kerja Sama</h1>
        <hr>
      </div>
    </section>
    <!-- end -->

    <!-- ketentuan -->
    <section class="ketentuan" id="ketentuan">
      <div class="row ">
        <div data-aos="fade-up" data-aos-delay="100" class="container text-center">
          <h3>Ketentuan Kerja Sama Sebagai Agen LPG</h3>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-12">
              <p>
                1. Kerja Sama dilakukan dengan mendaftarkan diri ke Admin AntarGalon.com <br>
                2. Persyaratan Umum Kerja Sama sebagai berikut: <br>
                    a. Nomor Pokok Wajib Pajak (NPWP) <br>
                    b. Akta Pendirian Badan Usaha beserta perubahannya <br>
                    c. Surat Izin Usaha Perdagangan (SIUP) <br>
                    d. Surat Referensi Bank <br>
                    e. Tanda Daftar Perusahaan (TDP) untuk badan hukum <br>
                    f. Surat Izin Mendirikan Bangunan (IMB) <br>
                    g. Izin Gangguan Sesuai Dengan Ketentuan Pemda Setempat <br>
                
                 <br>
                 <section class="ketentuan" id="ketentuan">
      <div class="row ">
        <div data-aos="fade-up" data-aos-delay="100" class="container text-center">
          <h3>Ketentuan Kerja Sama Sebagai Agen Galon</h3>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-12">
              <p>
            </p>
            1. Kerja Sama dilakukan dengan mendaftarkan diri ke Admin AntarGalon.com <br>
            2. Persyaratan Umum Kerja Sama sebagai berikut: <br>
                a. Persiapkan Lokasi Penjualan. Lokasi selalu menjadi salah satu hal yang harus anda perhatikan dengan baik <br>
                b. Kerjasama Dengan Agen Atau Distributor Besar. Kerjasama dengan agen atau distributor resmi sangat penting dilakukan. <br>
                c. Siapkan Peralatan Transportasi Pendukung <br>
                d. Siapkan Nomor Telepon <br>
                e. Manajemen Keuangan. <br>
                
              <br>
              <p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end-->

    <!-- Daftar -->
    <section class="daftar text-center" id="daftar" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="text-center">
          <h1>Daftar Sekarang</h1>
        </div>
        <br>
        <div class="row daftar-button">
          <div class="col-md-6">
          <a href="https://api.whatsapp.com/send?phone=+6285385774717&text=Halo+saya+tertarik+untuk+menjadi+Agen+Galon" class="gasgalon"><i class="icofont-pen-alt-2"></i> Daftar Agen Galon</a>
          </div>
          <div class="col-md-6">
          <a href="https://api.whatsapp.com/send?phone=+6285385774717&text=Halo+saya+tertarik+untuk+menjadi+Agen+Gas+Elpiji" class="gasgalon"><i class="icofont-pen-alt-2"></i> Daftar Agen Gas LPG</a>
          </div>
        </div>
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
              <strong>Email:</strong> AntarGalon.com@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="gasgalon.php">Galon & Gas LPG</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="aboutus.php">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="kerjasama.php">Kerja Sama</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="FAQ.php">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactus.php">Contact</a></li>
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
        <a href="https://wa.me/+6285385774717<?php echo $tampil3['wa'];?>" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
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

</body>

</html>