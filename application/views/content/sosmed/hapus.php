<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3>Form Ubah SOsial Media</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?= site_url('sosmed/delete') ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="form-label">Instagram</label>
                    <input require type="text" class="form-control col-5" name="ig" value="<?= $sosmed->ig ?>" readonly></input>
                </div>

                <div class="form-group">
                    <label class="form-label">Twiter</label>
                    <input require type="text" class="form-control col-5" name="twt" value="<?= $sosmed->twt ?>" readonly>
                </div>

                <div class="form-group">
                    <label class="form-label">Facebook</label>
                    <input require type="text" class="form-control col-5" name="fb" value="<?= $sosmed->fb ?>" readonly>
                </div>


                <input type="hidden" name="id_sosmed" value="<?= $sosmed->id_sosmed ?>">
        </div>
        <div class="card-footer">
            <a href="<?= site_url('sosmed') ?>" class="btn btn-primary">
                <i class="fa fa-reply"></i> Kembali
            </a>
            <button class="btn btn-danger" id="btn-update-pengumuman">
                <i class="fa fa-trash"></i>
                Hapus Sosial Media
            </button>
        </div>
        </form>
    </div>
</div>