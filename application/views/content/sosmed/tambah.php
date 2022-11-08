<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Form Tambah Sosial Media</h3>
        </div>
        <div class="card-body">
            <form id="" method="post" action="<?= site_url('Sosmed/insert') ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="form-label">Instagram</label>
                    <input class="form-control col-5" name="ig" cols="" rows="" placeholder="Masukan Instagram"></input>
                </div>
                <div class="form-group">
                    <label class="form-label">Twiter</label>
                    <input class="form-control col-5" name="twt" cols="" rows="" placeholder="Masukan Instagram"></input>
                </div>
                <div class="form-group">
                    <label class="form-label">Facebook</label>
                    <input class="form-control col-5" name="fb" cols="" rows="" placeholder="Masukan Instagram"></input>
                </div>

                <div class="card-footer">
                    <a href="<?= site_url('Sosmed') ?>" class="btn btn-primary ">
                        <i class="fa fa-reply"></i> Kembali
                    </a>
                    <button class="btn btn-success" id="btn-save-Gereja">
                        <i class="fa fa-save"></i>
                        Simpan Sosial Media
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>