<?= $this->include('parts/admin/head'); ?>

<!-- ======= Header ======= -->
<?= $this->include('parts/admin/header'); ?>

<!-- ======= Sidebar ======= -->
<?= $this->include('parts/admin/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <div class="row justify-content-start">
            <div class="col-auto">
                <h1>Dasboard Staff</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Blank</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-6">
                <?php if (session()->has('errors')) : ?>
                <ul class="alert alert-danger alert-dismissible fade show px-5" role="alert">
                    <?php foreach (session('errors') as $error) : ?>
                    <li><?= $error ?></li>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>

                <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success') ?>
                </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error') ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Produk</h5>
                        <div class="row mt-2">
                            <div class="col-lg-3">
                                <a data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary mb-3">
                                    <span style="font-size: 1em; color: #ffff;">
                                        <i class="bi bi-plus-circle"></i>
                                    </span>
                                    Tambah produk</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table datatable table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Warna</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" colspan="3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- modal tambah produk -->
<div class="modal fade" id="tambah" tabindex="-1">
    <form id="tambahproduk" class="user" method="post" action="<?= site_url('/tambahproduk') ?>"
        enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row align-items-start">
                        <div class="col-sm-6 mb-3">
                            <label for="nama" class="form-label">Nama produk</label>
                            <textarea class="form-control" name="nama" id="nama"></textarea>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="harga" class="form-label">Harga produk</label>
                            <input type="number" class="form-control" name="harga" id="harga">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="filecover" class="form-label">Foto cover produk</label>
                            <input type="file" class="form-control" name="filecover" id="filecover">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="warna" class="form-label">Warna produk</label>
                            <input type="text" class="form-control" name="warna" id="warna">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="fileproduk" class="form-label">Foto produk</label>
                            <input type="file" class="form-control" name="fileproduk" id="fileproduk">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- ======= Footer ======= -->
<?= $this->include('parts/admin/footer'); ?>