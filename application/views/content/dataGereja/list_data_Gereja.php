<div class="container-fluid mt-3">
   <div class="row mt-5">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header bg-secondary text-white">
               <h3 class="bg-secondary">Data Gereja</h3>
            </div>
            <div class=" card-body">
               <a href="<?= site_url('datagereja/tambah') ?>" class="btn btn-outline-primary mb-3">
                  <i class="fa fa-plus"></i>
                  Tambah Data Gereja</a>
               <div class="container-fluid">
                  <div class="table-responsive">
                     <table class=" table table-bordered table-sm table-hover">
                        <thead class="table-dark text-white">
                           <tr>
                              <th>Nomor</th>
                              <th>Nama Gereja</th>
                              <th>Tanggal Berdiri Gereja</th>
                              <th>Visi Gereja</th>
                              <th>Misi Gereja</th>
                              <th>Deskripsi Gereja</th>
                              <th>Alamat Gereja</th>
                              <th>Kontak Gereja</th>
                              <th>Email Gereja</th>
                              <th>Url Logo Gereja</th>
                              <th>Action</th>

                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no = 1;
                           foreach ($gerejas as $gereja) {
                           ?>
                              <tr>
                                 <td><?= $no++ ?></td>
                                 <td><?= $gereja->nama_gereja  ?></td>
                                 <td><?= $gereja->tgl_berdiri_gereja ?></td>
                                 <td><?= $gereja->visi_gereja ?></td>
                                 <td><?= $gereja->misi_gereja  ?></td>
                                 <td><?= $gereja->deskripsi_gereja ?></td>
                                 <td><?= $gereja->alamat_gereja ?></td>
                                 <td><?= $gereja->kontak_gereja  ?></td>
                                 <td><?= $gereja->email_gereja ?></td>
                                 <td><img src="<?= base_url() . '/assets/img/Logo/' . $gereja->url_logo_gereja ?>" width="200px;"></td>
                                 <td>

                                    <a href="<?= site_url("datagereja/ubah/$gereja->id_gereja") ?>" class="btn btn-sm btn-warning">
                                       <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url("datagereja/hapus/$gereja->id_gereja") ?>" data-id="<?= $gereja->id_gereja ?> " class="btn btn-sm btn-danger btn-delete-gereja">
                                       <i class="fa fa-trash"></i>
                                    </a>


                                 </td>
                              </tr>
                           <?php
                           }
                           ?>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>