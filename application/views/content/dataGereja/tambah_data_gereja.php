<div class="container-fluid mt-3">
   <div class="card">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Form Tambah Data Gereja</h3>
      </div>
      <div class="card-body">
         <form id="form-add-gereja" action="<?= site_url('DataGereja/insert') ?>" method="post" enctype="multipart/form-data">
            <div class="row">

               <div class="col-sm-6">
                  <div class="card">

                     <div class="form-group">
                        <label for="">Nama Gereja</label>
                        <input required class="form-control" name="nama_gereja" placeholder="Masukan Nama Gereja" type="text">
                     </div>
                     <div class="form-group">
                        <label for="">Tanggal Berdiri Gereja</label>
                        <input required class="form-control" name="tgl_berdiri_gereja" placeholder="Masukan Tanggal Berdiri Gereja" type="date">
                     </div>
                     <div class="form-group">
                        <label for="">Visi Gereja</label>
                        <textarea required class="form-control" name="visi_gereja" placeholder="Masukan Visi Gereja" type="text"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="">Misi Gereja</label>
                        <textarea required class="form-control" name="misi_gereja" placeholder="Masukan Misi Gereja" type="text"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="">Deskripsi Gereja</label>
                        <textarea required class="form-control" name="deskripsi_gereja" placeholder="Masukan Deskripsi Gereja" type="text"></textarea>
                     </div>
                  </div>
               </div>
               <div class="card col-sm-6">

                  <div class="form-group">
                     <label for="">Alamat Gereja</label>
                     <textarea required class="form-control" name="alamat_gereja" placeholder="Masukan alamat Gereja" type="text"></textarea>
                  </div>
                  <div class="form-group">
                     <label for="">Kontak Gereja</label>
                     <input required class="form-control" name="kontak_gereja" placeholder="Masukan Kontak Gereja" type="text">
                  </div>
                  <div class="form-group">
                     <label for="">Email Gereja</label>
                     <input required class="form-control" name="email_gereja" placeholder="Masukan Email Gereja" type="text">
                  </div>
                  <div class="form-group">
                     <label for="">Url Logo Gereja</label>
                     <input type="file" name="userfile" class="form-control" size="20">
                  </div>
               </div>
            </div>
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= site_url('DataGereja/index') ?>">
            <i class="fa fa-reply"></i> Kembali</a>
         <button class="btn btn-success" id="btn-save-Gereja">
            <i class="fa fa-save"></i>
            Simpan Data Gereja
         </button>
      </div>
      </form>
   </div>
</div>