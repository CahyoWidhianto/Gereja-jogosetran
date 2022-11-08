<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3>Form Tambah Dokumen</h3>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('Dokumen/create_action') ?>
            <div class="form-group">
                <label class="form-label">Nama dokumen</label>
                <input require type="text" class="form-control col-5" name="nama_dokumen" required="">
            </div>
            <div class="form-group">
                <label class="form-label">Jenis dokumen</label>
                <input require type="text" class="form-control col-5" name="jns_dokumen" required="">
            </div>
            <div class="form-group">
                <label class="form-label">Tanggal dokumen</label>
                <input require type="date" class="form-control col-5" name="tgl_dokumen" required="">
            </div>
            <div class="form-group">
                <label class="form-label">Deskripsi dokumen</label>
                <textarea require type="text" class="form-control col-5" name="deskripsi" required=""></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">File Dokumen</label>
                <input require type="file" class="form-control col-5" name="file" size="20" required="">
            </div>
        </div>
        
        <div class="card-footer">
            <a href="<?= site_url('Dokumen') ?>" class="btn btn-primary ">
                <i class="fa fa-reply"></i> Kembali</a>
            </a>
            <button type="submit" id="btn-save-dokumen" class="btn btn-success ">
                <i class="fa fa-save"></i> Simpan
            </button>

        </div>
    </div>
</div>