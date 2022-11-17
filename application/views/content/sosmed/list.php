<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h3>Data Sosial Media</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-3" href="<?= base_url('Sosmed/tambah') ?>">
                        <i class="fa fa-plus"></i>Tambah Sosial Media
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Instagram</th>
                                    <th>Twiter</th>
                                    <th>Facebook</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach (array_reverse($sosmeds) as $s) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $s->ig ?></td>
                                        <td><?= $s->twt ?></td>
                                        <td><?= $s->fb ?></td>
                                        <td>
                                            <a href="<?= site_url("Sosmed/ubah/$s->id_sosmed") ?>" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= site_url("Sosmed/hapus/$s->id_sosmed") ?>" data-id="<?= $s->id_sosmed ?>" class="btn btn-danger btn-sm btn-delete-barang">
                                                <i class="fa fa-trash"></i>
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