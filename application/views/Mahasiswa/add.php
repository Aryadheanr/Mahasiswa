<div class="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group row">
                    <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group row mt-2">
                    <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                        <small  class="form-text text-danger"><?= form_error('nim'); ?></small>
                    </div>
                    <div class="form-group row mt-2">
                    <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <small  class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group row mt-2">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Keperawatan">Keperawatan</option>
                    <option value="Ekonomi">Ekonomi</option>
                  </select>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>