<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-secondary text-width">
      <h3 class="card-title text-light">Form Hapus Data Gereja</h3>
   </div>
      <div class="card-body">
         <form action="<?= base_url('DataGereja/delete') ?>" method="POST">
            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <label for="">Nama Gereja</label>
                     <input type="text" class="form-control col-10" value="<?= $datagereja->nama_gereja ?>" name="nama_gereja" placeholder="Masukan Nama Gereja" readonly>
                  </div>

                  <input type="hidden" name="id_gereja" value="<?= $datagereja->id_gereja ?>">
               </div>
            </div>
      </div>
      <div class="card-footer">
         <a class="btn btn-primary" href="<?= base_url('DataGereja') ?>">
         <i class="fa fa-reply"></i> Kembali</a>
         </a>
         <button class="btn btn-danger">
            <i class="fa fa-trash-alt"></i>
            Hapus Data Gereja
         </button>
      </div>
      </form>
   </div>
</div>