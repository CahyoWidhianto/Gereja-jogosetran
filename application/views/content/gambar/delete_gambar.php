<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Form Hapus Foto </h3>
        </div>
        <div class="card-body">
            <form action="<?= base_url('UploadGambar/delete') ?>" method="post" enctype="multipart/form-data">
                <div class="col-sm-3">
                    <img src="<?= base_url('assets/img/foto/') . $gambar->gambar; ?>" class="img-thumbnail">
                </div>
                <input type="hidden" name="id_gambar" value="<?= $gambar->id_gambar ?>">
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="<?= base_url('UploadGambar') ?>">
                <i class="fa fa-reply"></i> Kembali </a>
            </a>
            <button class="btn btn-danger">
                <i class="fa fa-trash-alt"></i>
                Hapus foto
            </button>
        </div>
        </form>
    </div>
</div>