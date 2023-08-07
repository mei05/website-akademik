<div class="container-fluid">
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url(); ?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a></div>
        <div class="col-md-12"> -->
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('Prodi/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Prodi</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Prodi</td>
                            <td>Ruangan</td>
                            <td>Jurusan</td>
                            <td>Akreditasi</td>
                            <td>Nama Kaprodi</td>
                            <td>Tahun Berdiri</td>
                            <td>Output Lulusan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($prodi as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['ruangan']; ?></td>
                                <td>
                                    <?php foreach ($jurusan as $d) : ?>
                                        <?php if ($us['jurusan'] == $d['id']) { ?>
                                            <?= $d['nama']; ?>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </td>
                                <td><?= $us['akreditasi']; ?></td>
                                <td>
                                    <?php foreach ($dosen as $dsn) : ?>
                                        <?php if ($us['nama_kaprodi'] == $dsn['id']) { ?>
                                            <?= $dsn['nama']; ?>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </td>
                                <td><?= $us['tahun_berdiri']; ?></td>
                                <td><?= $us['output_lulusan']; ?></td>
                                <td>
                                    <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Prodi/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>