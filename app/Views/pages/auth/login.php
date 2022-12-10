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

            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-body px-4 py-5 px-md-5">
                        <div class="text-center">
                            <h1 class="h4 mb-4">Selamat datang!</h1>
                        </div>
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form class="user" action="<?= base_url(); ?><?= route_to('login') ?>" method="post">
                            <?= csrf_field() ?>

                            <?php if ($config->validFields === ['email']) : ?>

                            <div class="form-group">
                                <label class="form-label" for="login"><?= lang('Auth.email') ?></label>
                                <input type="email"
                                    class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                    name="login" placeholder="Enter Email Address...">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>

                            <?php else : ?>
                            <div class="form-group">
                                <label class="form-label" for="login">Email atau username</label>
                                <input type="text"
                                    class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                    name="login" placeholder="Email atau username">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <div class="form-group">
                                <label class="form-label" for="password"><?= lang('Auth.password') ?></label>
                                <input id="id_password" type="password" name="password"
                                    class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                    placeholder="<?= lang('Auth.password') ?>">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>

                            <?php if ($config->allowRemembering) : ?>
                            <div class="form-check form-group">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-check-input"
                                        <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    Ingat saya
                                </label>
                            </div>
                            <?php endif; ?>

                            <button type="submit" class="btn btn-primary rounded-pill btn-block btn-user">Masuk</button>
                        </form>
                        <hr />
                        <div class="text-center">
                            <?php if ($config->allowRegistration) : ?>
                            <p class="small"><a href="<?= base_url(); ?><?= route_to('register') ?>">Belum punya
                                    akun?</a>
                            </p>
                            <?php endif; ?>
                            <?php if ($config->activeResetter) : ?>
                            <p class="small"><a href="<?= base_url(); ?><?= route_to('forgot') ?>">Lupa kata sandi?</a>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<!-- footer -->
<?= $this->include('parts/end_footer'); ?>