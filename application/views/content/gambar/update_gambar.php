<html>

<head>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
    <!-- JQuery Validation CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</head>

<body>
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h3>Form Update Gambar</h3>
            </div>
            <div class="card-body">
                <form id="form-update-gambar" method="post" action="<?= site_url('UploadGambar/update') ?>" enctype="multipart/form-data">
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/foto/') . $gambars->gambar; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <label class="form-label">Gambar</label>
                                <input require type="file" value="<?= $gambars->gambar ?>" class="form-control" name="userfile" required="" multiple="200">
                            </div>
                            <input type="hidden" name="id_gambar" value="<?= $gambars->id_gambar ?>">
                        </div>
                </form>
            </div>
            <div class="card-footer">
                 <a href="<?= site_url('UploadGambar') ?>" class="btn btn-primary ">
                    <i class="fa fa-reply"></i> Kembali
                </a>
                <button type="submit" id="btn-update-gambar" class="btn btn-warning ">
                    <i class="fa fa-edit"></i> Simpan
                </button>
               
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(function() {
        $("#btn-update-gambar").on("click", function() {
            let validate = $("#form-update-gambar").valid()
            if (validate) {
                $("#form-update-gambar").submit()
            }
        })
        $("#form-update-gambar").validates({
            rules: {
                gambar: {
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