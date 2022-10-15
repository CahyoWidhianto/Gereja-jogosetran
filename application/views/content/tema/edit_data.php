<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Form Ubah Tema </h3>
        </div>
        <div class="card-body">
            <form id="form-update-tema" method="post" action="<?= site_url('tema/update') ?>" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input require type="text" class="form-control col-6" value="<?= $tema->judul_tema ?>" name="judul_tema">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Tema</label>
                    <div class="col-sm-10">
                        <textarea require type="text" class="form-control col-6" name="isi_tema" ><?= $tema->isi_tema ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/tema/') . $tema->gambar; ?>" class="img-thumbnail" width="150px;">
                            </div>
                            <div class="col-sm-9">
                                <label class="form-label">Gambar</label>
                                <input require type="file" class="form-control col-4" name="userfile" required="" multiple="200">

                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_tema" value="<?= $tema->id_tema ?>">
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="<?= base_url('tema') ?>">
                <i class="fa fa-reply"></i> Kembali </a>
            </a>
            <button class="btn btn-warning">
                <i class="fa fa-edit"></i>
                Ubah Dokumentasi
            </button>
        </div>
        </form>
    </div>
</div>