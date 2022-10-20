<section></section>
<section id="warta" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">
            <div class="container">
                <div class="row order-last  order-lg-first content">
                    <h3>Warta</h3>
                    <?php
                    $no = 1;
                    foreach ($wartas as $w) {
                    ?>
                        <div class="col-lg-3 d-none d-lg-block ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-center">
                                        <p><?= $w->judul_warta ?></p>
                                        <p><?= $w->tgl_warta ?></p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="center">
                                        <img src="<?= base_url() . '/assets/img/warta/' . $w->gambar ?>" class="card-img-top" width="100px;"></td>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center">
                                        <a class="btn btn-sm btn-primary text-white" href="<?= site_url('webwartacontent') ?>">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
</section><!-- End About Us Section -->