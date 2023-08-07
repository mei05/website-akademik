<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Dosen
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Dosen">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" value="<?= set_value('nip'); ?>" class="form-control form-control-user" id="nip" placeholder="NIP">
                            <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inisial">Inisial</label>
                            <input type="text" name="inisial" value="<?= set_value('inisial'); ?>" class="form-control form-control-user" id="inisial" placeholder="Inisial Dosen">
                            <?= form_error('inisial', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <input type="text" name="prodi" value="<?= set_value('prodi'); ?>" class="form-control form-control-user" id="prodi" placeholder="Prodi">
                            <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" placeholder="Email Dosen">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kompetensi">Kompetensi</label>
                            <input type="text" name="kompetensi" value="<?= set_value('kompetensi'); ?>" class="form-control form-control-user" id="kompetensi" placeholder="Kompetensi Dosen">
                            <?= form_error('kompetensi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kompetensi">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Dosen') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Dosen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>