<section></section>

<!-- ======= Features Section ======= -->
<section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="<?= base_url('assets/img/warta/') . $warta->gambar; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3 class="text-center"><?= $warta->judul_warta ?></h3>
            <p class="fst-italic text-center"><?= $warta->ayat ?></p>
            <ul>
              <p><?= $warta->isi_warta ?></p>
            </ul>
          </div>
        </div><!-- Features Item -->
      </div>
    </section><!-- End Features Section -->
