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
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
                <p class="card-text"><?= $mahasiswa['nim']; ?></p>
                <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                <a href="<?= base_url(); ?>Mahasiswa" class="btn btn-primary f">Kembali</a>
            </div>
         </div>

        </div>
    </div>
</div>
</section>