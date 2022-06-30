<div class="container">
    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>Mahasiswa/tambah" class="btn btn-primary" >Tambah Data Mahasiswa</a>
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