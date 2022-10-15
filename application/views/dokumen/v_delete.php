<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Form Hapus Dokumen</h3>
      </div>
      <div class="card-body">
         <form id="form-delete-dokumen" action="<?= site_url('dokumen/delete') ?>" method="post">
            <div class="form-group">
               <label for="">Nama Dokumen</label>
               <input value="<?= $dokumen->nama_dokumen ?>" readonly class="form-control col-5" name="isi_pengumuman" type="text">
            </div>

            <input type="hidden" name="no_dokumen" value="<?= $dokumen->no_dokumen ?>">
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= site_url('dokumen') ?>">
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