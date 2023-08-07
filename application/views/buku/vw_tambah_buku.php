<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Buku
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" value="<?= set_value('judul'); ?>" class="form-control form-control-user" id="judul" placeholder="Judul Buku">
                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" value="<?= set_value('penulis'); ?>" class="form-control form-control-user" id="penulis" placeholder="Penulis">
                            <?= form_error('penulis', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Buku</label>
                            <input type="text" name="stok" value="<?= set_value('stok'); ?>" class="form-control form-control-user" id="stok" placeholder="Stok Buku">
                            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="form-control form-control-user" id="harga" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kompetensi">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Buku') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Buku</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>