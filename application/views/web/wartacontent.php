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


<!-- ======= Features Section ======= -->
<div class="container-fluid mt-3 pd-top-5">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Profile Gembala</h3>
        </div>
        <div class="card-body ">
            <a class="btn btn-outline-primary mb-3" href="<?= base_url("profile/tambah") ?>">
                <i class="fa fa-plus"></i>
                Tambah Data Gembala
            </a>
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="<?= base_url() . '/assets/img/warta/' . $warta->gambar ?>" class="img-thumbnail" alt="" height="200">
                </div>
                <div class="col-md-7">
                    <h3><?= $warta->judul_warta ?></h3>
                    <p class="fst-italic"> <?= $warta->ayat ?></p>
                    <p><?= $warta->isi_warta ?></p>
                </div>
            </div><!-- Features Item -->
        </div>
    </div>
</div>
<!-- End Features Section -->