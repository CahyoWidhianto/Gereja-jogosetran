
<div class="breadcrumbs">
    <section id="galeri" class="about ">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url('web#hero')?>">Home</a></li>
                    <li>Media</li>
                </ol>
            </div>
        </nav>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Galeri</span>
                <h2>Galeri</h2>

            </div>
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="container">
                        <div class="row order-last  order-lg-first content">
                            <?php
                            $no = 1;
                            foreach ($gambars as $g) {
                            ?>
                                <div class="col-lg-3 d-none d-lg-block ">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="center">
                                                <img src="<?= base_url() . '/assets/img/foto/' . $g->gambar ?>" class="card-img-top" width="100px;"></td>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-center">
                                                <a class="btn btn-sm btn-success text-white" href="<?= base_url('assets/img/foto/' . $g->gambar) ?>" download="<?= $g->gambar ?>">
                                                    <i class="fa fa-download"></i>
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
</div>