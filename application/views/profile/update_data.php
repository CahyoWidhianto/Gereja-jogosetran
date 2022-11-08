<div class="container-fluid mt-3">
    <div class="card ">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Form Ubah Data Gembala</h3>
        </div>
        <div class="card-body">
            <form id="form-update-gembala" action="<?= site_url('Profile/update') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_gembala" value="<?= $profile->id_gembala ?>">
                <div class="form-group">
                    <label for="">Nama Gembala</label>
                    <input value="<?= $profile->nama_gembala ?>" required class="form-control col-5" name="nama_gembala" placeholder="Masukan Nama gembala " type="text">
                </div>
                <div class="form-group">
                    <label for="">Kata Pengantar</label>
                    <textarea value="" required class="form-control col-5" name="kata_pengatar" placeholder="Masukan Deskripsi Gembala" type="text"><?= $profile->kata_pengantar ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Gembala</label>
                    <textarea value="" required class="form-control col-5" name="deskripsi_gembala" placeholder="Masukan Deskripsi Gembala" type="text"><?= $profile->deskripsi_gembala ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Riwayat Pendidikan</label>
                    <textarea value="" required class="form-control col-5" name="riwayat_pendidikan" placeholder="Masukan Riwayat Pendidikan" type="text"><?= $profile->riwayat_pendidikan ?></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/profileGembala/') . $profile->gambar; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control col-5" name="userfile" size="20" id="gambar">
                        </div>
                    </div>
                </div>
                <input type="hidden" id="id_gembala" name="<?= $profile->id_gembala ?>">

        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="<?= base_url('Profile') ?>">
                <i class="fa fa-reply"></i> Kembali</a>
            </a>
            <button class="btn btn-warning" id="btn-update-gembala">
                <i class="fa fa-edit"></i>
                Ubah Data Gembala
            </button>
        </div>
        </form>
    </div>
</div>

<script>
    $(function() {
        $("#btn-update-gembala").on("click", function() {
            let validate = $("#form-tambah-gembala").valid()
            if (validate) {
                $("#form-tambah-gembala").submit()
            }
        })
        $("#form-tambah-gembala").validates({
            rules: {
                harga_barang: {
                    digits: true
                },
                jumlah_barang: {
                    digits: true
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid')
            }
        })
    })
</script>