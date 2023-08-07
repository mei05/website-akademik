<div class = "container-fluid">
    <h1 class = "h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                Form Edit Data Jurusan
            </div>
            <div class="card-body">
            <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $jurusan['id']; ?>">
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?=$jurusan['nama']?>" class="form-control" id="nama" placeholder="Nama"> <?=form_error('nama', '<small class="text-danger pl-3">','</small>');?>
        </div>
     
        <div class="form-group">
        <label for="singkatan">Singkatan</label>
        <input type="text" name="singkatan" value="<?=$jurusan['singkatan']?>" class="form-control" id="singkatan" placeholder="Singkatan"> <?=form_error('singkatan', '<small class="text-danger pl-3">','</small>');?>
        </div>

        <div class="form-group">
        <label for="nama_kajur">Kepala Jurusan</label>
        <select name="nama_kajur" id="nama_kajur" class="form-control">
                            <?php foreach ($dosen as $d) : ?>
                                <option value="<?= $d['id'];?>"<?php if ($jurusan['nama_kajur'] == $d['id']){
                                    echo "selected";
                                } ?>><?= $d['nama']; ?></option>
                            <?php endforeach;?>
                        </select> <?=form_error('nama_kajur', '<small class="text-danger pl-3">','</small>');?>
        </div>

        <a href="<?= base_url('Jurusan')?>" class="btn btn-danger">Tutup</a>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Jurusan</button>
        </form>
            </div>
            </div>
        </div>
    </div>
</div>
