<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
   <div class="row mt-5">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header bg-secondary text-white">
               <h3 class="card-title">Profile Gembala</h3>
            </div>
            <div class="card-body ">
               <a class="btn btn-outline-primary mb-3" href="<?= base_url("Profile/tambah") ?>">
                  <i class="fa fa-plus"></i>
                  Tambah Data Gembala
               </a>
               <div class="table-responsive">

                  <table class=" table table-bordered table-hover">
                     <thead class=" table table-dark">
                        <tr>
                           <th>No</th>
                           <th>Nama Gembala</th>
                           <th>Kata Pengatar</th>
                           <th>Deskripsi</th>
                           <th>Riwayat Pendidikan</th>
                           <th>Gambar</th>

                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $no = 1;
                        foreach (array_reverse($profiles) as $p) {
                        ?>
                           <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $p->nama_gembala ?></td>
                              <td><?= $p->kata_pengantar ?></td>
                              <td><?= $p->deskripsi_gembala ?></td>
                              <td><?= $p->riwayat_pendidikan ?></td>
                              <td><img src="<?= base_url() . '/assets/img/profileGembala/' . $p->gambar ?> " width="200px;"></td>
                              <td>
                                 <a class=" btn btn-warning btn-sm" href="<?= base_url("Profile/ubah/$p->id_gembala") ?>">
                                    <i class="fa fa-edit"></i>
                                 </a>
                                 <a class="btn btn-danger btn-sm" href="<?= base_url("Profile/hapus/$p->id_gembala") ?>">
                                    <i class="fa fa-trash-alt"></i>
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