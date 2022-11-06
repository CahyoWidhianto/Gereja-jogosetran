<section></section>
<!-- ======= About Us Section ======= -->
<div class="breadcrumbs">
  <section id="galeri" class="about ">
    <nav>
      <div class="container">
        <ol>
          <li><a href="<?= base_url('web#hero') ?>">Home</a></li>
          <li>Pastor</li>
        </ol>
      </div>
    </nav>
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Pastor</span>
        <h2>Pastor</h2>

      </div>

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="<?= base_url('assets/img/profileGembala/') . $profile_gembala['gambar'] ?>" alt="" width="650">
          <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3><?= $profile_gembala['nama_gembala'] ?></h3>
          <p>
            <?= $profile_gembala['deskripsi_gembala'] ?>
          </p>
          <p>
            <?= $profile_gembala['riwayat_pendidikan'] ?>
          </p>
          <!-- <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Voluptatem et qui exercitationem</h5>
                  <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                </div>
              </li>
            </ul> -->
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
</div>