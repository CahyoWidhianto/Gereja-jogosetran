<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">Form Tambah Pengumuman</h3>
        </div>
        <div class="card-body">
            <form id="form-tambah-pengumuman" method="post" action="<?= site_url('pengumuman/insert') ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="form-label">Isi Pengumuman</label>
                    <textarea class="form-control col-5" name="isi_pengumuman" cols="" rows="" placeholder="Masukan Isi Pengumuman"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Tanggal Pengumuman</label>
                    <input require type="date" class="form-control col-5" name="tgl_pengumuman">
                </div>
                <div class="card-footer">
                    <a href="<?= site_url('pengumuman') ?>" class="btn btn-primary ">
                        <i class="fa fa-reply"></i> Kembali
                    </a>
                    <button type="button" id="btn-save-pengumuman" class="btn btn-success ">
                        <i class="fa fa-save"></i> Simpan Pengumuma
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function() {
        $("#btn-save-pengumuman").on("click", function() {
            let validate = $("#form-tambah-pengumuman").valid()
            if (validate) {
                $("#form-tambah-pengumuman").submit()
            }
        })
        $("#form-tambah-pengumuman").validates({
            rules: {
                harga_pengumuman: {
                    digits: true
                },
                jumlah_pengumuman: {
                    digits: true
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            }
        })
    })
</script>