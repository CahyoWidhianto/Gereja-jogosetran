<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Tema Gereja</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-outline-primary mb-3" href="<?= site_url('tema/tambah') ?>">
                <i class="fa fa-plus"></i>
                Tambah Tema
            </a>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
                    <th>Judul Tema</th>
                    <th>Isi Tema</th>
                    <th>Gambar</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($temas as $r) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $r->judul_tema ?></td>
                            <td><?= $r->isi_tema ?></td>
                            <td><img src="<?= base_url("/assets/img/tema/$r->gambar") ?>" width="100px"></td>
                            <td>
                                <a href="<?= site_url("tema/edit/$r->id_tema") ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?= site_url("tema/hapus/$r->id_tema") ?>" class="btn btn-danger btn-sm ">
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