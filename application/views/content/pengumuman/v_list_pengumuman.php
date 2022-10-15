<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3>Data Pengumuman</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-outline-primary mb-3" href="<?= base_url('pengumuman/tambah') ?>">
                <i class="fa fa-plus"></i>Tambah Pengumuman
            </a>
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
                                <a href="<?= site_url("pengumuman/ubah/$p->id_pengumuman") ?>" class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?= site_url("pengumuman/hapus/$p->id_pengumuman") ?>" data-id="<?= $p->id_pengumuman ?>" class="btn btn-danger btn-sm btn-delete-barang">
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