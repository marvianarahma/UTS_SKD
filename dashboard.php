<?php

session_start();

if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UTS SKD - V3420047</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">The Eye</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span> Option </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="vigenere.php"> Vigenere Chiper </a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="logout.php"> Logout </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1> The eye  </h1>
      <h2> Marviana Rahma  </h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>

  <main id="main">

    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3> Data Security </h3>
            <p>
              sebuah prosedur dengan dukungan dari regulasi dan teknologi untuk melindungi data dari perusakan data, modifikasi data, serta penyebaran data baik yang disengaja maupun tidak.
            </p>
            <div class="row">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4> Vigenere chiper </h4>
                <p>metode menyandikan teks alfabet dengan menggunakan deretan sandi Caesar berdasarkan huruf-huruf pada kata kunci. Sandi Vigenère merupakan bentuk sederhana dari sandi substitusi polialfabetik.</p>
              </div>
              <div class="col-md-6">
                <i class="bx bx-cube-alt"></i>
                <h4>Profil</h4>
                <p> Marviana Rahma - V3420047</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>


  

  


  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <script src="assets/js/main.js"></script>

</body>

</html>