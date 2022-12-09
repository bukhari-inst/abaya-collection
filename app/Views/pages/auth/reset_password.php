<!-- header -->
<?= $this->include('parts/header'); ?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <!-- hero item -->
                <img class="img-fluid" style="max-width: 70%;" src="<?= base_url(); ?>/logo_unu.png" alt="logo_unu">
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <div class="text-center">
                            <h1 class="h4 text-white-50 mb-4">Atur Ulang Kata Sandi Anda</h1>
                        </div>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <p class="text-white-50">Masukkan token yang Anda terima melalui email, alamat email Anda, dan
                            kata sandi baru Anda.</p>

                        <form class="user" action="<?= route_to('reset-password') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label class="form-label" for="token"><?= lang('Auth.token') ?></label>
                                <input type="text"
                                    class="form-control form-control-user <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>"
                                    name="token" placeholder="<?= lang('Auth.token') ?>"
                                    value="<?= old('token', $token ?? '') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.token') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">Alamat email</label>
                                <input type="email"
                                    class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="Email .."
                                    value="<?= old('email') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="form-group row mb-5">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="form-label" for="password"><?= lang('Auth.password') ?> baru</label>
                                    <input id="id_password" type="password"
                                        class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                        name="password" placeholder="<?= lang('Auth.password') ?>">
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="pass_confirm">Konfirmasi sandi</label>
                                    <input type="password"
                                        class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                        name="pass_confirm" placeholder="Konfirmasi sandi">
                                    <div class="invalid-feedback">
                                        <?= session('errors.pass_confirm') ?>
                                    </div>
                                </div>
                            </div>

                            <!-- reset button -->
                            <button type="submit"
                                class="btn btn-primary btn-block btn-user mb-4"><?= lang('Auth.resetPassword') ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<!-- footer -->
<?= $this->include('parts/end_footer'); ?>