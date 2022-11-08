<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Hapus Warta</h3>
      </div>
      <div class="card-body">
         <form id="form-delete-gembala" action="<?= site_url('Warta/delete') ?>" method="post">
            <div class="form-group">
               <label for="">Judul Warta</label>
               <input value="<?= $wartas->judul_warta ?>" readonly class="form-control col-5" name="judul_warta" placeholder="Masukan Nama gembala " type="text">
            </div>


            <input type="hidden" name="kd_warta" value="<?= $wartas->kd_warta ?>">
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= site_url('Warta') ?>">
            <i class="fa fa-reply"></i> Kembali</a>
         </a>
         <button class="btn btn-danger" id="btn-hapus-warta">
            <i class="fa fa-trash-alt"></i>
            Hapus Data Gembala
         </button>
      </div>
      </form>
   </div>
</div>