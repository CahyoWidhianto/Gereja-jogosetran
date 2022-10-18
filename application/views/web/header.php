<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/Logo/') . $data_gereja['url_logo_gereja'] ?>" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.2.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url('assets/img/Logo/') . $data_gereja['url_logo_gereja'] ?>" alt="">
        <h1><?= $data_gereja['nama_gereja'] ?></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#pastor"> Pastor</a></li>
          <li><a href="#media">Media</a></li>
          <li><a href="#location">Location</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style="background-image: url('<?= base_url('assets/img/tema/') . $tema['gambar'] ?>'); width: 100%;
  min-height: 50vh;
  background-color: var(--color-secondary); 
  background-size: cover;
  background-position: center;
  position: relative;
  padding: 120px 0 60px 0;
  color: rgba(17, 17, 17, 0.8);">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-8"></div>
        <div class="col-lg-4 order-2 order-lg-1 d-flex flex-column content-center">
          <h2 data-aos="fade-up"><?= $tema['judul_tema'] ?></h2>
          <div>
            <h6 data-aos="fade-up"><?= $tema['isi_tema'] ?></h6>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->