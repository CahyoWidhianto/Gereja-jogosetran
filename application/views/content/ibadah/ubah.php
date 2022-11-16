<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Form Ubah Jadwal Ibadah</h3>
        </div>
        <div class="card-body">
            <form id="" method="post" action="<?= site_url('Ibadah/update') ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">Hari</label><br>
                    <select class="form-control form-select col-5" name="hari" aria-label="Floating label select example" required>
                        <option value=""><?=$ibadah->hari?></option>
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumaat">Jumaat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Waktu</label>
                    <input class="form-control col-5" type="time" name="waktu" cols="" rows="" placeholder="Masukan waktu" value="<?=$ibadah->jam?>"></input>
                </div>
                <div class="form-group">
                    <label class="form-label">Jenis Kegiatan</label>
                    <input class="form-control col-5" type="text" name="nama" cols="" rows="" placeholder="Masukan Kegiatan" value="<?=$ibadah->nama?>"></input>
                </div>

                <input type="hidden" name="id" value="<?= $ibadah->id ?>">

                <div class="card-footer">
                    <a href="<?= site_url('Ibadah') ?>" class="btn btn-primary ">
                        <i class="fa fa-reply"></i> Kembali
                    </a>
                    <button class="btn btn-warning" id="btn-save-Gereja">
                        <i class="fa fa-edit"></i>
                        Ubah Jadwal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>