<div class="container-fluid mt-3">
   <div class="card">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Form Hapus Dokumentasi </h3>
      </div>
      <div class="card-body">
         <form action="<?= base_url('dokumentasi/delete') ?>" method="post" enctype="multipart/form-data">
            <div class=" form-group">
               <label for="">Judul Dokumentasi</label>
               <input readonly type="text" name="judul_dokumentasi" class="form-control col-5" value="<?= $dokumentasis->judul_dokumentasi ?>">
            </div>
            <div class="form-group">
               <label for="">Deskripsi Dokumentasi</label>
               <input readonly type="text" class="form-control col-5" value="<?= $dokumentasis->deskripsi_dokumentasi ?>" name="deskripsi_dokumentasi" placeholder="Masukan Deskripsi Dokumentasi">
            </div>
            <div class="form-group">
               <label for="">Tanggal Dokumentasi</label>
               <input readonly type="date" class="form-control col-5" value="<?= $dokumentasis->tanggal_dokumentasi ?>" name="tanggal_dokumentasi" required placeholder="Masukan Judul Dokumentasi">
            </div>
            <input type="hidden" name="id_dokumentasi" value="<?= $dokumentasis->id_dokumentasi ?>">
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= base_url('dokumentasi') ?>">
            <i class="fa fa-reply"></i> Kembali </a>
         </a>
         <button class="btn btn-danger">
            <i class="fa fa-trash-alt"></i>
            Hapus Dokumentasi
         </button>
      </div>
      </form>
   </div>
</div>