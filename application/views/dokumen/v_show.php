<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h3>Data Dokumen</h3>
                </div>
                <div class="card-body">
                    <a href="<?= site_url('Dokumen/create') ?>" class="btn btn-outline-primary mb-3">
                        <i class="fa fa-plus"></i>Tambah Dokumen
                    </a>
                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Dokumen</th>
                                    <th>Jenis Dokumen</th>
                                    <th>Deskripsi Dokumen</th>
                                    <th>Tanggal Dokumen</th>
                                    <th>Dokumen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dokumen as $d) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $d->nama_dokumen  ?></td>
                                        <td><?= $d->jns_dokumen ?></td>
                                        <td><?= $d->deskripsi ?></td>
                                        <td><?= $d->tgl_dokumen ?></td>
                                        <td><?= $d->file ?></td>
                                        <td>
                                            <a href="<?= site_url("Dokumen/edit/$d->no_dokumen") ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= site_url("Dokumen/hapus/$d->no_dokumen") ?>" data-id="<?= $d->no_dokumen ?>" class="btn btn-danger btn-sm btn-delete-dokumen">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <a class="btn btn-sm btn-success text-white" href="<?= base_url('assets/file/' . $d->file) ?>" download="<?= $d->file ?>">
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
        </div>
    </div>
</div>