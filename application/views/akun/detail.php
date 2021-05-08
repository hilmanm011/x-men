<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('ul li ').click(function(){
            $('li').removeClass("active");
            $(this).addClass("active");
        });
    });
</script> -->

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
                <h1 class="h3 mb-2 text-gray-800"> Kelola Data Konsumen</h1>
                <!-- Data Tabel Konsumen -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('akun'); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header text-center font-weight-bold">
                                <h3>Detail Data Konsumen</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>: <?= $akun['nama']; ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <th>Jenis Kelamin</th>
                                            <th>: <?= $akun['jenis_kelamin']; ?></th>
                                        </tbody>
                                        <th</th> <th>
                                            </th>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>