<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <div class="container">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
                <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
            <?php endif; ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"> Kelola Data Estimasi</h1>

                <!-- Data Tabel Estimasi -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url(); ?>estimasi/tambah" class="btn btn-primary">Tambah Estimasi</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Biaya Material</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>


                                <tbody>
                                    <?php if (empty($estimasi)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            data tidak ditemukan.
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                    $no = 1;
                                    foreach ($estimasi as $est) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no;
                                                                    $no++; ?></td>
                                            <td><?= "Rp. " .  $est['biaya_material']; ?></td>
                                            <td class="text-center">
                                                <!-- <a href="<?= base_url(); ?>estimasi/detail/<?= $est['id']; ?>" class="badge badge-primary float-center">Detail</a> -->
                                                <a href="<?= base_url(); ?>estimasi/ubah/<?= $est['id']; ?>" class="badge badge-success float-center">Edit</a>
                                                <a href="<?= base_url(); ?>estimasi/hapus/<?= $est['id']; ?>" class="tombol-hapus badge badge-danger float-center">Hapus</a>
                                            </td>
                                        </tr> <?php endforeach; ?> </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Perencanaan Modal <?= date('Y'); ?></span>
            </div>
        </div>
    </footer>
</div>