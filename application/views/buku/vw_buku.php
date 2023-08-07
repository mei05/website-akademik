<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url(); ?>Buku/tambah" class="btn btn-info mb-2">Tambah Buku</a></div>
        <div class="col-md-12"> -->
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('Buku/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Buku
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
                            <td>Judul Buku</td>
                            <td>Penulis</td>
                            <td>Stok Buku</td>
                            <td>Harga</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($buku as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><img src="<?= base_url('assets/img/buku/') . $us['gambar']; ?>" style="width:100px" class="img-thumbnail"></td>
                                <td><?= $us['judul']; ?></td>
                                <td><?= $us['penulis']; ?></td>
                                <td><?= $us['stok']; ?></td>
                                <td><?= $us['harga']; ?></td>

                                <td>
                                    <a href="<?= base_url('Buku/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Buku/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
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