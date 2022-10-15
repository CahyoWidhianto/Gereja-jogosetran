<div class="container-fluid mt-3">
    <div class="card ">
        <div class="card-header bg-secondary text-width">
            <h3 class="card-title text-light">Form Hapus Tema</h3>
        </div>
        <div class="card-body">
            <form action="<?= base_url('tema/delete') ?>" method="POST">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Tema </label>
                            <textarea type="text" class="form-control col-10" value="" name="isi_tema" placeholder="Masukan Nama Gereja" readonly><?= $tema->isi_tema ?></textarea>
                        </div>

                        <input type="hidden" name="id_tema" value="<?= $tema->id_tema ?>">
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="<?= base_url('tema') ?>">
                <i class="fa fa-reply"></i> Kembali</a>
            </a>
            <button class="btn btn-danger">
                <i class="fa fa-trash-alt"></i>
                Hapus Data Gereja
            </button>
        </div>
        </form>
    </div>
</div>