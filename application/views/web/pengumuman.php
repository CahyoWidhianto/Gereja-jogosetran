<section></section>

<div class="breadcrumbs">
    <section id="pengumuman" class="about ">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url('web#media') ?>">Media</a></li>
                    <li>Pengumuman</li>
                </ol>
            </div>
        </nav>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Pengumuman</span>
                <h2>Pengumuman</h2>

            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="table-responsive">

                <table class="table table-bordered table-hover">
                    <thead class="table-dark text-white">
                        <tr class="text-center">
                            <th>Pengumuman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($pengumuman as $p) {
                        ?>
                            <tr class="text-center">
                                <td><?= $p->isi_pengumuman ?></td>
                            </tr>
                        <?php
                            if (++$no == 3) break;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- End About Us Section -->
</div>

<div class="breadcrumbs">
    <section id="pengumuman" class="about ">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url('web#media') ?>">Media</a></li>
                    <li>Jadwal Pelayanan</li>
                </ol>
            </div>
        </nav>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Jadwal Pelayanan</span>
                <h2>Jadwal Pelayanan</h2>

            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <p> Download Jadwal disini
                <a class="" href="
                <?= base_url('assets/jadwal/') . $jadwalpelayanan['Berkas'] ?>" download="<?= $jadwalpelayanan['Berkas'] ?>">
                    <?= $jadwalpelayanan['Berkas'] ?>
                </a>
            </p>
        </div>
    </section><!-- End About Us Section -->
</div>