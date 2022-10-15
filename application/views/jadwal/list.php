<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3>Jadwal Pelayanan</h3>
        </div>
        <div class="card-body">
            <a href="<?= site_url('jadwalpelayanan/tambah') ?>" class="btn btn-outline-primary mb-3">
                <i class="fa fa-plus"></i>Tambah Jadwal Pelayanan
            </a>
            <table class="table table-bordered table-hover">
                <thead class="table-dark text-white">
                    <tr>
                        <th>Nomor</th>
                        <th>Tanggal Jadwal Pelayanan</th>
                        <th>Dokumen Jadwal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($jadwal as $j) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $j->Waktu ?></td>
                            <td><?= $j->Berkas ?></td>
                            <td>
                                <a href="<?= site_url("jadwalpelayanan/edit/$j->KD_jadwalpelayanan") ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?= site_url("jadwalpelayanan/hapus/$j->KD_jadwalpelayanan") ?>" data-id="<?= $j->KD_jadwalpelayanan ?>" class="btn btn-danger btn-sm btn-delete-dokumen">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a class="btn btn-sm btn-success text-white" href="<?= base_url('assets/jadwal/' . $j->Berkas) ?>" download="<?= $j->Berkas ?>">
                                    <i class="fa fa-download"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>