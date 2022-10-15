<div class="container-fluid mt-3">
    <div class="card ">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Form Hapus Jadwal</h3>
        </div>
        <div class="card-body">
            <form id="form-delete-dokumen" action="<?= site_url('jadwalpelayanan/delete') ?>" method="post">

                <div class="form-group">
                    <label for="">Waktu Jadwal</label>
                    <input type="date" class="form-control col-10" name="deskripsi_jadwal" readonly value="<?= $jadwal->Waktu; ?>">
                </div>
                <input type="hidden" name="KD_jadwalpelayanan" value="<?= $jadwal->KD_jadwalpelayanan ?>">
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="<?= site_url('jadwalpelayanan') ?>">
                <i class="fa fa-reply"></i> Kembali </a>
            </a>
            <button class="btn btn-danger" id="btn-hapus-dokumen">
                <i class="fa fa-trash-alt"></i>
                Hapus Data dokumen
            </button>
        </div>
        </form>
    </div>
</div>