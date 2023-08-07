<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!--<div class="row">
        <div class="col-md-6"><a href="<?= base_url(); ?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
        <div class="col-md-12">-->
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('Mahasiswa/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Mahasiswa
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
                            <td>Nama</td>
                            <td>Nim</td>
                            <td>Email</td>
                            <td>Prodi</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['nim']; ?></td>
                                <td><?= $us['email']; ?></td>
                                <td><?= $us['prodi']; ?></td>
                                <td>
                                    <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                                    <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
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