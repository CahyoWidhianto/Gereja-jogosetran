<?= $this->session->flashdata('pesan'); ?>
   <div class="container-fluid mt-3">
      <div class="row mt-5">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header bg-secondary text-white">
                  <h3 class="bg-blue">Warta Gereja</h3>
               </div>
               <div class=" card-body">
                  <a class="btn btn-outline-primary mb-3" href="<?= base_url('warta/tambah') ?>">
                     <i class="fa fa-plus"></i>
                     Tambah Warta
                  </a>
                  <div class="table-responsive">

                     <table class=" table table-bordered  table-hover">
                        <thead class="table-dark text-white">
                           <tr>
                              <th>Nomor</th>
                              <th>Judul Warta</th>
                              <th>Ayat Warta</th>
                              <th>Jenis Warta</th>
                              <th>Tanggal Warta</th>
                              <th>Isi Warta</th>
                              <th>Gambar</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no = 1;
                           foreach ($wartas as $w) {
                           ?>
                              <tr>
                                 <td><?= $no++ ?></td>
                                 <td><?= $w->judul_warta  ?></td>
                                 <td><?= $w->ayat  ?></td>
                                 <td><?= $w->jenis_warta ?></td>
                                 <td><?= $w->tgl_warta ?></td>
                                 <td><?= $w->isi_warta ?></td>
                                 <td><img src="<?= base_url() . "./assets/img/warta/" . $w->gambar ?>" width="200px;"></td>
                                 <td>

                                    <a href="<?= site_url("warta/ubah/$w->kd_warta") ?>" class="btn btn-sm btn-warning">
                                       <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?= site_url("warta/hapus/$w->kd_warta") ?>" data-id="<?= $w->kd_warta ?>" class="btn btn-sm btn-danger btn-delete-warta">
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
