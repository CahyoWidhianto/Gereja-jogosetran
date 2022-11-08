<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h3>Data Pengumuman</h3>
                </div>
                <div class="card-body">
                    <a href="<?= site_url('Pengumuman/tambah') ?>" class="btn btn-outline-primary mb-3 btn-sm">
                        <i class="fa fa-plus"></i>
                        Tambah Data Pengumuman</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Isi Pengumuman</th>
                                    <th>Tanggal Pengumuman</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengumumans as $p) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->isi_pengumuman ?></td>
                                        <td><?= $p->tgl_pengumuman ?></td>
                                        <td>
                                            <a href="<?= site_url("Pengumuman/ubah/$p->id_pengumuman") ?>" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= site_url("Pengumuman/hapus/$p->id_pengumuman") ?>" data-id="<?= $p->id_pengumuman ?>" class="btn btn-danger btn-sm btn-delete-barang">
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