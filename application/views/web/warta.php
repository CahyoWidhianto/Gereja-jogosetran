<section></section>
<!-- ======= Our Team Section ======= -->
<div class="breadcrumbs">
    <section id="warta" class="team ">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url('Web#media') ?>">Media</a></li>
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
                <?php
                $no = 1;
                foreach (array_reverse($wartas) as $w) {
                ?>

                    <!-- <div class="container margin-left-3">
                            <div class="member">
                                <img src="<?= base_url() . '/assets/img/warta/' . $w->gambar ?>" class="img-fluid">
                                <div class="member-content">
                                    <h4><?= $w->judul_warta ?></h4>
                                    <span><?= $w->ayat ?></span>
                                    <div class="text-center">
                                        <a class="btn btn-sm btn-primary text-white" href="<?= site_url("webwartacontent/index/$w->kd_warta") ?>">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->



                    <section id="team" class="team pt-0">
                        <div class="container" data-aos="fade-up">
                            <div class="row" data-aos="fade-up" data-aos-delay="100">

                                <div class="col-lg-4 col-md-6 d-flex">
                                </div><!-- End Team Member -->

                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="member">
                                        <img src="<?= base_url() . '/assets/img/warta/' . $w->gambar ?>" class="img-fluid" alt="">
                                        <div class="member-content">
                                            <h4><a href="<?= site_url("webwartacontent/index/$w->kd_warta") ?>"><?= $w->judul_warta ?></a></h4>
                                            <span><?= $w->ayat ?></span>
                                        </div>
                                    </div>
                                </div><!-- End Team Member -->

                                <div class="col-lg-4 col-md-6 d-flex">
                                </div><!-- End Team Member -->

                            </div>

                        </div>
                    </section><!-- End Our Team Section -->
                <?php
                }
                ?>
            </div>

        </div>
    </section><!-- End Our Team Section -->
</div>