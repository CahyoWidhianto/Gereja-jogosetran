<div class="container-fluid mt-3">
   <div class="card">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Form Tambah Data Gembala</h3>
      </div>
      <div class="card-body">
         <form action="<?= base_url('profile/insert') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <label for="">Nama Gembala</label>
               <input type="text" class="form-control col-5" name="nama_gembala" required placeholder="Masukan Nama Gembala">
            </div>
            <div class="form-group">
               <label for="">Kata Pengantar</label>
               <textarea type="text" class="form-control col-5" name="kata_pengantar" required placeholder="Masukan Kata Pengantar Gembala"></textarea>
            </div>
            <div class="form-group">
               <label for="">Deskripsi Gembala</label>
               <textarea type="text" class="form-control col-5" name="deskripsi_gembala" required placeholder="Masukan Deskripsi Gembala"></textarea>
            </div>
            <div class="form-group">
               <label for="">Riwayat Pendidikan</label>
               <textarea type="text" class="form-control col-5" name="riwayat_pendidikan" required placeholder="Masukan Riwayat Pendidikan Gembala"></textarea>
            </div>
            <div class="form-group">
               <label for="">Gambar</label>
               <input type="file" class="form-control col-5" name="userfile" required size="20">
            </div>
      </div>
      <div class=" card-footer">
         <a class="btn btn-primary" href="<?= base_url("profile") ?>">
            <i class="fa fa-reply"></i> Kembali</a>
         </a>
         <button class="btn btn-success">
            <i class="fa fa-save"></i>
            simpan data gembala
         </button>
      </div>
   </div>
</div>