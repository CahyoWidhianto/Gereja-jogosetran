<div class="container-fluid mt-3">
   <div class="card">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Form Ubah Data Gereja</h3>
      </div>
      <div class="card-body">
         <form id="form-update-gereja" action="<?= site_url('DataGereja/update') ?>" method="post" enctype="multipart/form-data">
            <div class="row">

               <div class="col-6">
                  <div class="card">
                     <div class="form-group">
                        <label for="">Nama Gereja</label>
                        <input value="<?= $datagereja->nama_gereja ?>" required class="form-control " name="nama_gereja" placeholder="Masukan Nama Gereja" type="text">
                     </div>
                     <div class="form-group">
                        <label for="">Tanggal Berdiri Gereja</label>
                        <input value="<?= $datagereja->tgl_berdiri_gereja ?>" required class="form-control " name="tgl_berdiri_gereja" placeholder="Masukan Tanggal Berdiri Gereja" type="date">
                     </div>
                     <div class="form-group">
                        <label for="">Visi Gereja</label>
                        <textarea value="" required class="form-control " name="visi_gereja" placeholder="Masukan Visi Gereja" type="text"><?= $datagereja->visi_gereja ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="">Misi Gereja</label>
                        <textarea value="" required class="form-control " name="misi_gereja" placeholder="Masukan Misi Gereja" type="text"><?= $datagereja->misi_gereja ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="">Deskripsi Gereja</label>
                        <textarea value="" required class="form-control " name="deskripsi_gereja" placeholder="Masukan Deskripsi Gereja" type="text"><?= $datagereja->deskripsi_gereja ?></textarea>
                     </div>
                  </div>
               </div>
               <div class="card col-6">

                  <div class="form-group">
                     <label for="">Alamat Gereja</label>
                     <textarea value="" required class="form-control " name="alamat_gereja" placeholder="Masukan alamat Gereja" type="text"><?= $datagereja->alamat_gereja ?></textarea>
                  </div>
                  <div class="form-group">
                     <label for="">Kontak Gereja</label>
                     <input value="<?= $datagereja->kontak_gereja ?>" required class="form-control " name="kontak_gereja" placeholder="Masukan Kontak Gereja" type="text">
                  </div>
                  <div class="form-group">
                     <label for="">Email Gereja</label>
                     <input value="<?= $datagereja->email_gereja ?>" required class="form-control " name="email_gereja" placeholder="Masukan Email Gereja" type="text">
                  </div>
                  <div class="row">
                     <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/logo/') . $datagereja->url_logo_gereja; ?>" class="img-thumbnail">
                     </div>
                     <div class="col-sm-9">
                        <div class="form-group">
                           <label for="">Url Logo Gereja</label>
                           <input type="file" name="userfile" class="form-control " size="20">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <input type="hidden" name="id_gereja" value="<?= $datagereja->id_gereja ?>">
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= site_url('DataGereja/index') ?>">
            <i class="fa fa-reply"></i> Kembali</a>
         <button class="btn btn-warning" id="btn-update-Gereja">
            <i class="fa fa-save"></i>
            Ubah Data Gereja
         </button>
      </div>
      </form>
   </div>
</div>