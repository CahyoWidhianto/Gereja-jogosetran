<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-secondary text-white">
         <h3 class="card-title">Form Ubah Warta</h3>
      </div>
      <div class="card-body">
         <form id="form-update-warta" action="<?= site_url('Warta/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
               <label for="">Judul Warta</label>
               <input value="<?= $warta->judul_warta ?>" required class="form-control col-6" name="judul_warta" placeholder="Masukan Judul Warta " type="text">
            </div>
            <div class="form-group">
               <label for="">Ayat </label>
               <input value="<?= $warta->ayat ?>" required class="form-control col-6" name="ayat" placeholder="Masukan Judul Warta " type="text">
            </div>
            <!-- <div class="form-group">
               <label for="">Jenis Warta</label>
               <input value="<?= $warta->jenis_warta ?>" required class="form-control col-6" name="jenis_warta" placeholder="Masukan Jenis Warta" type="text">
               <select class="form-select" name="jenis_warta" id="floatingSelect" aria-label="Floating label select example">
                  <option selected="KEUANGAN" <?= $warta->jenis_warta == 'Laporan Persembahan dan Keuangan' ? 'Selected' : '' ?>>Laporan Persembahan dan Keuangan</option>
                  <option selected="SUKA" <?= $warta->jenis_warta == 'Informasi Suka' ? 'Selected' : '' ?>>Informasi Suka</option>
                  <option selected="DUKA" <?= $warta->jenis_warta == 'Informasi Duka' ? 'Selected' : '' ?>>Informasi Duka</option>
                  <option selected="KHOTBAH" <?= $warta->jenis_warta == 'Informasi Khotbah' ? 'Selected' : '' ?>>Informasi Khotbah</option>
               </select>
            </div> -->
            <div class="form-group">
               <label for="">Tanggal Warta</label>
               <input value="<?= $warta->tgl_warta ?>" required class="form-control col-6" name="tgl_warta" placeholder="" type="date">
            </div>
            <div class="form-group">
               <label for="">Isi Warta</label>
               <textarea class="form-control col-6" name="isi_warta" cols="" rows="" placeholder="Masukan Isi Warta"  required><?= $warta->isi_warta ?></textarea>
            </div>
            <div class="row">
               <div class="col-sm-3">
                  <img src="<?= base_url('assets/img/warta/') . $warta->gambar; ?>" class="img-thumbnail">
               </div>
               <div class="col-sm-9">
                  <div class="form-group">
                     <label for="exampleFormControlFile1">Pilih Gambar</label>
                     <input type="file" class="form-control col-4" name="userfile" size="20" />
                  </div>
               </div>
            </div>
            <input type="hidden" name="kd_warta" value="<?= $warta->kd_warta ?>">
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= site_url('Warta/index') ?>">
            <i class="fa fa-reply"></i> Kembali</a>
         </a>
         <button class="btn btn-warning" id="btn-update-warta">

            <i class="fa fa-edit"></i>
            Ubah Data Warta
         </button>
      </div>
      </form>
   </div>
</div>