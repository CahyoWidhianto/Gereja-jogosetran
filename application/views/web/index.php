

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url('assets/img/Logo/') . $data_gereja['url_logo_gereja']?>" alt="">
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

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <div class="breadcrumbs">
      <section id="about" class="about pt-0">
        <nav>
          <div class="container">
            <ol>
              <li><a href="#about">Home</a></li>
              <li>About</li>
            </ol>
          </div>
        </nav>


        <br>


        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div>

              <h3 class="text-center">Tentang Kami</h3>
              <p class="text-center">
                <?= $data_gereja['deskripsi_gereja'] ?>
              </p>
            </div>
            <ul class="text-center">

              <div>
                <h5>Visi Gereja</h5>
                <p><?= $data_gereja['visi_gereja'] ?></p>
              </div>

              <div>
                <h5>Misi Gereja</h5>
                <div class="">
                  <p class="text-center"><?= $data_gereja['misi_gereja'] ?></p>
                </div>
              </div>

            </ul>
          </div>
        </div>

    </div>
    </div><!-- End Breadcrumbs -->
    </section><!-- End About Us Section -->

    <!-- ======= Pastor Section ======= -->
    <div class="breadcrumbs">
        <nav>
          <div class="container">
            <ol>
              <li><a href="#pastor">Home</a></li>
              <li>Pastor</li>
            </ol>
          </div>
        </nav>

        <section id="pastor" class="call-to-action" style="background: linear-gradient(rgba(14, 29, 52, 0.6), rgba(14, 29, 52, 0.8)), url('<?= base_url('assets/img/profileGembala/') . $profile_gembala['gambar'] ?>') center center;
      background-size: cover;
      padding: 100px 0;">
          <div class="container" data-aos="zoom-out">

            <div class="row justify-content-center">
              <div class="col-lg-8 text-center">
                <h3>Ps. <?= $profile_gembala['nama_gembala'] ?></h3>
                <p><?= $profile_gembala['kata_pengantar'] ?></p>
                <a class="cta-btn" href="<?= site_url('web/gembala')?>">Selengkapnya</a>
              </div>
            </div>
          </div>
    </div>

    </section>
    <!-- End pastor Section -->



    <!-- ======= Media Section ======= -->
    <div class="breadcrumbs">
      <section id="media" class="services pt-0">
        <nav>
          <div class="container">
            <ol>
              <li><a href="#media">Home</a></li>
              <li>Media</li>
            </ol>
          </div>
        </nav>
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <span>Media</span>
            <h2>Media</h2>

          </div>

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card">

                <h3><a href="service-details.html" class="stretched-link">Warta</a></h3>
              </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card">

                <h3><a href="service-details.html" class="stretched-link">Pengumuman</a></h3>
              </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card">

                <h3><a href="service-details.html" class="stretched-link">Jadwal Pelayanan</a></h3>
              </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="card">

                <h3><a href="service-details.html" class="stretched-link">Dokumen</a></h3>
              </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="card">
                <h3><a href="service-details.html" class="stretched-link">Galeri</a></h3>
              </div>
            </div><!-- End Card Item -->

            <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/warehousing-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Warehousing</a></h3>
              <p>Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi quisquam aut nostrum unde et qui est non quo nulla</p>
            </div>
          </div> End Card Item -->

          </div>
        </div>
    </div>
    </section><!-- End Media Section -->



    <!-- ======= Location Section ====== -->
    <div class="breadcrumbs">
      <section id="location" class="contact">
        <nav>
          <div class="container">
            <ol>
              <li><a href="#location">Home</a></li>
              <li>Location</li>
            </ol>
          </div>
        </nav>
        <div class="container">

          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p><?= $data_gereja['alamat_gereja'] ?></p>
          </div>
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.78742495546!2d110.63309001472534!3d-7.7059461944451995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ea096618cf99c88!2sIndonesia%20Baptist%20Church%2C%20Jogosetran!5e0!3m2!1sen!2sid!4v1665605798605!5m2!1sen!2sid" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="row mt-5">
            <div class="col-lg-4" data-aos="fade-right">
              <div class="info">

              </div>
            </div>
          </div>
        </div>
    </div>

    </section>


    <!-- ======= End Location Section ====== -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
