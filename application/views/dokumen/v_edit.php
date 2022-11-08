<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">
            <h3>Form Ubah Dokumen</h3>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('Dokumen/update') ?>
            <?php foreach ($dokumen as $d) { ?>
                <div class="form-group">
                    <label class="form-label">Nama Dokumen</label>
                    <input require type="text" class="form-control" name="nama_dokumen" value="<?php echo $d->nama_dokumen ?>" required="nama_dokumen">
                </div>
                <div class="form-group">
                    <label class="form-label">Jenis Dokumen</label>
                    <input require type="text" class="form-control" name="jns_dokumen" value="<?php echo $d->jns_dokumen ?>" required="jns_dokumen">
                </div>
                <div class="form-group">
                    <label class="form-label">Deskripsi Dokumen</label>
                    <input require type="text" class="form-control" name="deskripsi" value="<?php echo $d->deskripsi ?>" required="deskripsi">
                </div>
                <div class="form-group">
                    <label class="form-label">Tanggal Dokumen</label>
                    <input require type="date" class="form-control" name="tgl_dokumen" value="<?php echo $d->tgl_dokumen ?>" required="tgl_dokumen">
                </div>
                <div class="form-group">
                    <label class="form-label">File</label>
                    <input require type="file" class="form-control" name="file" value="<?php echo $d->file ?>" >
                </div>
                <input type="hidden" name="no_dokumen" value="<?= $d->no_dokumen ?>">
                <a href="<?= site_url('Dokumen') ?>" class="btn btn-primary ">
                    <i class="fa fa-reply"></i> Kembali </a>
                <button type="submit" id="btn-save-dokumen" class="btn btn-success ">
                    <i class="fa fa-save"></i> Simpan
                </button>
            <?php } ?>
            <?php echo form_close() ?>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>