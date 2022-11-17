<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3>Data Gambar</h3>
        </div>

        <div class="card-body">
            <a href="<?= site_url('UploadGambar/tambah') ?>" class="btn btn-outline-primary mb-3 ">
                <i class="fa fa-plus"></i>Tambah Gambar
            </a>
            <div class="carousel-inner py-4">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <?php
                            $no = 1;
                            foreach (array_reverse($gambars) as $g) {
                            ?>
                                <div class="col-lg-4 col-md-6 d-flex mt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="center">
                                                <img src="<?= base_url() . '/assets/img/foto/' . $g->gambar ?>" class="card-img-top" width="100px;"></td>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-center">
                                                <a href="<?= site_url("UploadGambar/ubah/$g->id_gambar") ?>" class="btn btn-warning text-white btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <a href="<?= site_url("UploadGambar/hapus/$g->id_gambar") ?>" data-id="<?= $g->id_gambar ?>" class="btn btn-danger  btn-delete-gambar btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
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