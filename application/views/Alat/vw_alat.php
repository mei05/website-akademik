<div class="container-fluid">
<div class="clearfix">
    <div class="float-left">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    </div>
    <div class="float-right">
        <!-- <a href="<?= base_url('Dosen/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Dosen -->
        </a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Gambar</td>
                        <td>Nama</td>
                        <td>NIP</td>
                        <td>Inisial</td>
                        <td>Program Studi</td>
                        <td>Email</td>
                        <td>Kompetensi</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <!-- <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dosen as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><img src="<?= base_url('assets/img/dosen/') . $us['gambar']; ?>" style="width:100px" class="img-thumbnail"></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['nip']; ?></td>
                            <td><?= $us['inisial']; ?></td>
                            <td><?= $us['prodi']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td><?= $us['kompetensi']; ?></td>

                            <td>
                                <a href="<?= base_url('Dosen/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                                <a href="<?= base_url('Dosen/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('Dosen/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody> -->
            </table>
        </div>
    </div>
</div>
</div>
</div>