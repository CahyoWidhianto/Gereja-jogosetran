<div class="container-fluid mt-3">
    <div class="card ">
        <div class="card-header bg-secondary text-width">
            <h3 class="card-title text-light">Form Hapus Jadwal</h3>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Ibadah/delete') ?>" method="POST">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Kegiatan </label>
                            
                            <input type="text" class="form-control col-10"  name="kegiatan" value="<?= $ibadah->nama ?>"  readonly>
                        </div>

                        <input type="hidden" name="id" value="<?= $ibadah->id ?>">
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="<?= base_url('Ibadah') ?>">
                <i class="fa fa-reply"></i> Kembali</a>
            </a>
            <button class="btn btn-danger">
                <i class="fa fa-trash-alt"></i>
                Hapus Data jadwal
            </button>
        </div>
        </form>
    </div>
</div>