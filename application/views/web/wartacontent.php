<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

            <div class="col-md-5">
                <img src="<?= base_url() . '/assets/img/warta/' . $wartas->gambar ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7">
                <h3><?= $wartas->judul_warta ?></h3>
                <p class="fst-italic"> <?= $wartas->ayat?></p>
                <p><?= $wartas->isi_warta ?></p>
            </div>
            
            <input type="hidden" name="kd_warta" value="<?= $warta->kd_warta ?>">
        </div><!-- Features Item -->
    </div>
</section><!-- End Features Section -->