<section></section>

<!-- ======= About Us Section ======= -->
<div class="breadcrumbs">
    <section id="dokumen" class="about ">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url('web#media') ?>">Media</a></li>
                    <li>Dokumen</li>
                </ol>
            </div>
        </nav>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Dokumen</span>
                <h2>Dokumen</h2>

            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <table class="table table-bordered table-hover">
                <thead class="table-dark text-white">
                    <tr class="text-center">
                        <th>Nomor</th>
                        <th>Nama Dokumen</th>
                        <th>Dokumen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (array_reverse($dokumen) as $d) {
                    ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $d->nama_dokumen  ?></td>
                            <td>
                                <a class="" href="<?= base_url('assets/file/' . $d->file) ?>" download="<?= $d->file ?>">
                                    <?= $d->file ?>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </section><!-- End About Us Section -->
</div>