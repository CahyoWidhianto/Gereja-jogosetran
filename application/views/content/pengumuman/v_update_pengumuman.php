<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3>Form Ubah Pengumuman</h3>
        </div>
        <div class="card-body">
            <form id="form-tambah-pengumuman" method="post" action="<?= site_url('pengumuman/update') ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="form-label">Isi Pengumuman</label>
                    <textarea require type="text"  class="form-control col-5" name="isi_pengumuman"><?= $pengumuman->isi_pengumuman ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Tanggal Pengumuman</label>
                    <input require type="date" value=<?= $pengumuman->tgl_pengumuman ?> class="form-control col-5" name="tgl_pengumuman">
                </div>

                <input type="hidden" name="id_pengumuman" value="<?= $pengumuman->id_pengumuman ?>">
        </div>
        <div class="card-footer">
            <a href="<?= site_url('pengumuman') ?>" class="btn btn-primary">
                <i class="fa fa-reply"></i> Kembali
            </a>
            <button class="btn btn-warning" id="btn-update-pengumuman">
                <i class="fa fa-edit"></i>
                Ubah Data Pengumuman
            </button>
        </div>
        </form>
    </div>
</div>