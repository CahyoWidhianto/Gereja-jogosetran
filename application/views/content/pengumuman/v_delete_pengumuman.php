<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Form Hapus Pengumuman</h3>
      </div>
      <div class="card-body">
         <form id="form-delete-gembala" action="<?= site_url('pengumuman/delete') ?>" method="post">
            <div class="form-group">
               <label for="">Isi Pengumuman</label>
               <input value="<?= $pengumumans->isi_pengumuman ?>" readonly class="form-control col-5" name="isi_pengumuman" type="text">
            </div>

            <div class="form-group">
               <label for="">Tanggal Pengumuman</label>
               <input value="<?= $pengumumans->tgl_pengumuman ?>" readonly class="form-control col-5" name="isi_pengumuman" type="date">
            </div>

            <input type="hidden" name="id_pengumuman" value="<?= $pengumumans->id_pengumuman ?>">
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= site_url('pengumuman') ?>">
            <i class="fa fa-reply"></i> Kembali</a>
         </a>
         <button class="btn btn-danger" id="btn-hapus-pengumuman">
            <i class="fa fa-trash-alt"></i>
            Hapus Data Pengumuman
         </button>
      </div>
      </form>
   </div>
</div>