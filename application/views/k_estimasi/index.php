

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
                <h1 class="h3 mb-2 text-gray-800"> Kelola Estimasi</h1>

                <!-- Data Tabel Order -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url(); ?>konsumen/tambah" class="btn btn-primary">Tambah Order</a></h6> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nomor Order</th>
                                        <th>Tanggal Order</th>

                                        <th>Nama Konsumen</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php if (empty($order)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            data tidak ditemukan.
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                    $no = 1;
                                    foreach ($order as $ord) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no;
                                                                    $no++; ?></td>
                                            <td class="text-center"><?= $ord['no_order']; ?></td>
                                            <td><?= $ord['tgl_order']; ?></td>
                                            <td><?= $ord['nama_konsumen']; ?></td>
                                            <td class="text-center"><a href="<?= base_url(); ?>k_estimasi/detail/<?= $ord['id']; ?>" class="badge badge-primary float-center">Rincian</a>

                                            </td>
                                        </tr><?php endforeach; ?>
                                </tbody>
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