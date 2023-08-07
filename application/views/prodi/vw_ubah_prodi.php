<div class = "container-fluid">
    <h1 class = "h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                Form Edit Data Prodi
            </div>
            <div class="card-body">
            <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?=$prodi['nama']?>" class="form-control" id="nama" placeholder="Nama">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
     
        <div class="form-group">
        <label for="ruangan">Ruangan</label>
        <input type="text" name="ruangan" value="<?=$prodi['ruangan']?>" class="form-control" id="ruangan" placeholder="Ruangan">
        <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" id="jurusan" class="form-control">
                            <?php foreach ($jurusan as $j) : ?>
                                <option value="<?= $j['id'];?>"<?php if ($prodi['jurusan'] == $j['id']){
                                    echo "selected";
                                } ?>><?= $j['nama']; ?></option>
                            <?php endforeach;?>
                        </select>
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
        <label for="akreditasi">Akreditasi</label>
        <input type="text" name="akreditasi" value="<?=$prodi['akreditasi']?>" class="form-control" id="akreditasi" placeholder="Akreditasi">
        <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        
        <div class="form-group">
        <label for="nama_kaprodi">Nama Kaprodi </label>
        <select name="nama_kaprodi" id="nama_kaprodi" class="form-control">
                            <?php foreach ($dosen as $d) : ?>
                                <option value="<?= $d['id'];?>"<?php if ($prodi['nama_kaprodi'] == $d['id']){
                                    echo "selected";
                                } ?>><?= $d['nama']; ?></option>
                            <?php endforeach;?>
                        </select>
                        <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        
        <div class="form-group">
        <label for="tahun_berdiri">Tahun berdiri</label>
        <input type="text" name="tahun_berdiri" value="<?=$prodi['tahun_berdiri']?>" class="form-control" id="tahun_berdiri" placeholder="Tahun berdiri">
        <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
        <label for="output_lulusan">Output Lulusan</label>
        <input type="text" name="output_lulusan" value="<?=$prodi['output_lulusan']?>" class="form-control" id="output_lulusan" placeholder="Output lulusan">
        <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <a href="<?= base_url('Prodi')?>" class="btn btn-danger">Tutup</a>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Prodi</button>
        </form>
            </div>
            </div>
        </div>
    </div>
</div>
