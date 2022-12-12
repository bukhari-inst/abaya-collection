<?= $this->include('parts/admin/head'); ?>

<!-- ======= Header ======= -->
<?= $this->include('parts/admin/header'); ?>

<!-- ======= Sidebar ======= -->
<?= $this->include('parts/admin/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <div class="row justify-content-start">
            <div class="col-auto">
                <h1>Staff - Produk</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-6">
                <?php if (
                    $validation->getError('nama') ||
                    $validation->getError('harga') ||
                    $validation->getError('warna') ||
                    $validation->getError('filecover') ||
                    $validation->getError('fileproduk')
                ) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $validation->listErrors() ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
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
                                        <th scope="col" colspan="3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($produk as $prd) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td>
                                            <?php $string = $prd->nama ?>
                                            <?= $string = character_limiter($string, 50); ?>
                                        </td>
                                        <td>
                                            <?= "Rp " . number_format($prd->harga, 2, ',', '.'); ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#detail<?= $prd->id ?>">
                                                <span style="font-size: 1em; color: #000;">
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#update<?= $prd->id ?>"
                                                onclick="updateProposal(<?= $prd->id ?>)">
                                                <span style="font-size: 1em; color: #f5a425;">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#delete<?= $prd->id ?>">
                                                <span style="font-size: 1em; color: #f5a425;">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- Modal delete produk -->
<?php foreach ($produk as $prd) : ?>
<div class="modal fade" id="delete<?= $prd->id ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Yakin delete produk ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="/deleteProduk" method="post" class="d-inline">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id" value="<?= $prd->id ?>">
                    <button type="submit" class="btn btn-primary">
                        Ya
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- end-footer -->

<!-- modal update produk -->
<?php foreach ($produk as $prd) : ?>
<div class="modal fade" id="update<?= $prd->id ?>" tabindex="-1">
    <form id="tambahproduk" class="user" method="post" action="<?= site_url('/updateProduk') ?>"
        enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="hidden" name="id" value="<?= $prd->id ?>">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row align-items-start">
                        <div class="col-sm-12 mb-3">
                            <label for="nama" class="form-label">Nama produk</label>
                            <textarea class="form-control" name="nama" id="nama"><?= $prd->nama ?></textarea>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="harga" class="form-label">Harga produk</label>
                            <input type="number" class="form-control" value="<?= $prd->harga ?>" name="harga"
                                id="harga">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="filecover" class="form-label">Foto cover produk</label>
                            <input type="file" class="form-control" name="filecover" id="filecover">
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
<?php endforeach ?>

<!-- Modal details -->
<?php foreach ($produk as $prd) : ?>
<div class="modal fade" id="detail<?= $prd->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="contact-us" id="contact">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="contact">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Detail produk ini</h4>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <img src="<?= base_url('assets/images/products/cover/' . $prd->file_name); ?>"
                                                    class="img-fluid image-profile rounded-3 d-inline"
                                                    style="max-width: 127px;" alt="<?= $prd->file_name; ?>">
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="row justify-content-start">
                                                        <div class="col-4">
                                                            <h6>Nama produk </h6>
                                                        </div>
                                                        <div class="col-8">
                                                            <h6><?= $prd->nama; ?></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row justify-content-start">
                                                        <div class="col-4">
                                                            <h6>Harga </h6>
                                                        </div>
                                                        <div class="col-8">
                                                            <h6>
                                                                <?= "Rp " . number_format($prd->harga, 2, ',', '.'); ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>

<!-- modal tambah produk -->
<div class="modal fade" id="tambah" tabindex="-1">
    <form id="tambahproduk" class="user" method="post" action="<?= site_url('/tambahProduk') ?>"
        enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row align-items-start">
                        <div class="col-sm-12 mb-3">
                            <label for="nama" class="form-label">Nama produk</label>
                            <textarea class="form-control" name="nama" id="nama"></textarea>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="harga" class="form-label">Harga produk</label>
                            <input type="number" class="form-control" name="harga" id="harga">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="filecover" class="form-label">Foto cover produk</label>
                            <input type="file" class="form-control" name="filecover" id="filecover">
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