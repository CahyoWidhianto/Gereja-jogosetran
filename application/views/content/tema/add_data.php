<div class="container-fluid mt-3">
   <div class="card">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Form Tambah Dokumentasi </h3>
      </div>
      <div class="card-body">
         <form action="<?= base_url('tema/insert') ?>" method="post" enctype="multipart/form-data">
            <div class=" form-group">
               <label for="">Judul </label>
               <input type="text" class="form-control col-5" name="judul_tema" required placeholder="Masukan Judul Tema">
            </div>
            <div class="form-group">
               <label for="">Cuplikan ayat</label>
               <textarea type="text" class="form-control col-5" name="isi_tema" required placeholder="Masukan Isi Tema"></textarea>
            </div>

            <div class="form-group">
               <label for="exampleFormControlFile1">Pilih Gambar</label>
               <input type="file" class="form-control col-5" name="userfile" size="20" />
            </div>
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= base_url('tema') ?>">
            <i class="fa fa-reply"></i> Kembali </a>
         </a>
         <button class="btn btn-success">
            <i class="fa fa-save"></i>
            Simpan Dokumentasi
         </button>
      </div>
      </form>
   </div>
</div>