<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Form Tambah Pengumuman </h3>
        </div>
        <div class="card-body">
            <form action="<?= base_url('pengumuman/insert') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Isi pengumuman</label>
                    <textarea required class="form-control col-5" name="isi_pengumuman" placeholder="Masukan Isi Pengumuman" type="text"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Pengumuman</label>
                    <input required class="form-control col-5" name="tgl_pengumuman" placeholder="Masukan Tanggal" type="date">
                </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="<?= base_url('pengumuman') ?>">
                <i class="fa fa-reply"></i> Kembali </a>
            </a>
            <button class="btn btn-success">
                <i class="fa fa-save"></i>
                Simpan
            </button>
        </div>
        </form>
    </div>
</div>