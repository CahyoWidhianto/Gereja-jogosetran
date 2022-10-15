<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3>Form Tambah Jadwal</h3>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('jadwalpelayanan/insert') ?>
            <div class="form-group">
                <label class="form-label">Tanggal dokumen</label>
                <input require type="date" class="form-control col-5" name="waktu" required="">
            </div>
            <div class="form-group">
                <label class="form-label">File Dokumen</label>
                <input require type="file" class="form-control col-5" name="file" size="20" required="">
            </div>
        </div>

        <div class="card-footer">
            <a href="<?= site_url('jadwalpelayanan') ?>" class="btn btn-primary ">
                <i class="fa fa-reply"></i> Kembali</a>
            </a>
            <button type="submit" id="btn-save-dokumen" class="btn btn-success ">
                <i class="fa fa-save"></i> Simpan
            </button>

        </div>
    </div>
</div>