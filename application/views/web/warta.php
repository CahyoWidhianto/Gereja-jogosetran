<section></section>
<!-- ======= Our Team Section ======= -->
<div class="breadcrumbs">
    <section id="warta" class="team ">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url('web#media') ?>">Media</a></li>
                    <li>Warta</li>
                </ol>
            </div>
        </nav>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Warta</span>
                <h2>Warta</h2>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 d-flex">
                    <?php
                    $no = 1;
                    foreach ($wartas as $w) {
                    ?>
                        <div class="container margin-left-3">
                            <div class="member">
                                <img src="<?= base_url() . '/assets/img/warta/' . $w->gambar ?>" class="img-fluid">
                                <div class="member-content">
                                    <h4><?= $w->judul_warta ?></h4>
                                    <span><?= $w->ayat ?></span>
                                    <div class="text-center">
                                        <a class="btn btn-sm btn-primary text-white" href="<?= site_url("webwarta/Isi/$w->kd_warta") ?>">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div><!-- End Team Member -->
            </div>

        </div>
    </section><!-- End Our Team Section -->
</div>