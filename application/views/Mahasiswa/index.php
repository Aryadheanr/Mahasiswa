<style type="text/css">
.hero{
    background-image: url('assets/img/kel4.jpg');
    background-size: cover;
    background-position: center center;
    min-height: 100%;
    min-width: 100%;
    width: auto;
    height: auto;
    margin: 0;
    position: absolute;
}

</style>

<section class="hero">

<div class="container">
    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Mahasiswa
            </button>
        </div>

    </div>

        <div class="row mt-3">
            <div class="col-md-6">

                <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Mahasiswa...." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                 </div>
                </form>

            </div>
        </div>

    <div class="mt-3">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa</h1>
            <?php if( empty($mahasiswa) ) : ?>
                <div class="alert alert-dark" role="alert">
                Data Mahasiswa Tidak Ditemukan
                </div>
            <?php endif; ?>
        <ul class="list-group row mt-3 k">
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <li class="list-group-item ">
                <?= $mhs['nama']; ?>
                <a href="<?= base_url(); ?>Mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger btn-sm f badge" onclick="return confirm('yakin');" >hapus</a>
                <a href="<?= base_url(); ?>Mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-success btn-sm f badge">ubah</a>
                <a href="<?= base_url(); ?>Mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary btn-sm f badge">detail</a>
            </li>
            <?php endforeach ?>
            </ul>
        </div>
    </div>

</div>
</section>

<!--    Modal Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('Mahasiswa/tambah') ?>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>

