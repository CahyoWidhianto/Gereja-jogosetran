<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h3>Data Jadwal Ibadah</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-3" href="<?= base_url('ibadah/tambah') ?>">
                        <i class="fa fa-plus"></i>Tambah Jadwal
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Hari</th>
                                    <th>Waktu Ibadah</th>
                                    <th>Kegiatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach (array_reverse($ibadah) as $i) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $i->hari?></td>
                                        <td><?= $i->jam ?></td>
                                        <td><?= $i->nama ?></td>
                                        <td>
                                            <a href="<?= site_url("Ibadah/ubah/$i->id") ?>" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= site_url("Ibadah/hapus/$i->id") ?>" data-id="<?= $i->id ?>" class="btn btn-danger btn-sm btn-delete-barang">
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