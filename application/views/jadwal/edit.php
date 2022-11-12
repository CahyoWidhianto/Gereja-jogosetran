<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">
            <h3>Form Ubah Jadwal</h3>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('JadwalPelayanan/update') ?>
                <div class="form-group">
                    <label class="form-label">Tanggal Jadwal</label>
                    <input require type="date" class="form-control" name="waktu" value="<?php echo $jadwal->Waktu ?>" required="">
                </div>
                <div class="form-group">
                    <label class="form-label">Berkas</label>
                    <input require type="file" class="form-control" name="file" value="<?php echo $jadwal->Berkas ?>">
                </div>
                <input type="hidden" name="KD_jadwalpelayanan" value="<?= $jadwal->KD_jadwalpelayanan ?>">
                <a href="<?= site_url('JadwalPelayanan') ?>" class="btn btn-primary ">
                    <i class="fa fa-reply"></i> Kembali </a>
                <button type="submit" id="btn-save-dokumen" class="btn btn-success ">
                    <i class="fa fa-save"></i> Simpan
                </button>
            <?php echo form_close() ?>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>