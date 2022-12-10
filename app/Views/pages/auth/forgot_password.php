<!-- header -->
<?= $this->include('parts/header'); ?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <!-- hero item -->
                <!-- <img class="img-fluid" style="max-width: 70%;" src="<?= base_url(); ?>/logo_unu.png" alt="logo_unu"> -->
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <div class="text-center">
                            <h1 class="h4 mb-4">Atur Ulang Kata Sandi Anda?</h1>
                        </div>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <p>Tidak masalah! Masukkan email Anda di bawah ini dan kami akan mengirimkan instruksi untuk
                            mengatur ulang kata sandi Anda.</p>
                        <br>
                        <form class="user" action="<?= route_to('forgot') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label class="form-label" for="email">Alamat email</label>
                                <input type="email"
                                    class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="Email ..">
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary rounded-pill btn-block btn-user mb-4">Mengirim
                                instruksi?</button>
                        </form>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<!-- footer -->
<?= $this->include('parts/end_footer'); ?>