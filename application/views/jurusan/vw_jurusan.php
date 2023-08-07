<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('Jurusan/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Jurusan
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
                            <td>Nama Jurusan</td>
                            <td>Singkatan</td>
                            <td>Kepala Jurusan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($jurusan as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['singkatan']; ?></td>
                                <td>
                                    <?php foreach ($dosen as $d) : ?>
                                        <?php if ($us['nama_kajur'] == $d['id']) { ?>
                                            <?= $d['nama']; ?>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('Jurusan/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Jurusan/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
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