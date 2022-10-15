<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3>Form Ubah Sosial Media</h3>
        </div>
        <div class="card-body">
            <form  method="post" action="<?= site_url('sosmed/update') ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="form-label">Instagram</label>
                    <input require type="text"  class="form-control col-5" name="ig" value="<?= $sosmed->ig ?>"></input>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Twiter</label>
                    <input require type="text"  class="form-control col-5" name="twt" value="<?= $sosmed->twt ?>">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Facebook</label>
                    <input require type="text"  class="form-control col-5" name="fb" value="<?= $sosmed-> fb ?>">
                </div>
                

                <input type="hidden" name="id_sosmed" value="<?= $sosmed->id_sosmed ?>">
        </div>
        <div class="card-footer">
            <a href="<?= site_url('sosmed') ?>" class="btn btn-primary">
                <i class="fa fa-reply"></i> Kembali
            </a>
            <button class="btn btn-warning" id="btn-update-pengumuman">
                <i class="fa fa-edit"></i>
                Ubah Data Pengumuman
            </button>
        </div>
        </form>
    </div>
</div>