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
                <h1 class="h3 mb-2 text-gray-800"> Kelola Data Superhero</h1>

                <!-- Data Tabel Superhero -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('superhero'); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="card-header text-center">
                            <h3>Form Edit Superhero</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $superhero['id']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $superhero['nama']; ?>">
                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?= $superhero['jenis_kelamin']; ?>">
                                    <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                                </div>
                                <button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
                            </form>
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