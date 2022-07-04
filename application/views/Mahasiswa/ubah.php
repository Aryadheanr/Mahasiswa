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

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
                <div class="card-header">
                    Form Ubah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                    <div class="form-group row">
                    <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                        <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group row mt-2">
                    <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
                        <small  class="form-text text-danger"><?= form_error('nim'); ?></small>
                    </div>
                    <div class="form-group row mt-2">
                    <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                        <small  class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group row mt-2">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <?php foreach( $jurusan as $j ) : ?>
                            <?php if( $j == $mahasiswa['jurusan']) : ?>
                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                            <?php else : ?>
                    <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                  </select>
                </div>
                    <button type="submit" name="ubah" class="btn btn-primary mt-3 f">Ubah Data</button>
            </div>
            </div>



            </form>

        </div>
    </div>

</div>
</section>