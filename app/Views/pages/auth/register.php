<!-- header -->
<?= $this->include('parts/header'); ?>
<?php

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

?>

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
                            <h1 class="h4 text-white-50 mb-4">Registrasi</h1>
                        </div>
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form class="user" action="<?= route_to('register') ?>" method="post">
                            <?= csrf_field() ?>

                            <!-- uuid input -->
                            <div class="form-group visually-hidden">
                                <input type="text"
                                    class="form-control form-control-user <?php if (session('errors.uuid')) : ?>is-invalid<?php endif ?>"
                                    name="uuid" value="<?= esc($uuid) ?>">
                            </div>

                            <!-- fullname input -->
                            <div class="form-group">
                                <label class="form-label" for="fullname">Nama lengkap</label>
                                <input type="text"
                                    class="form-control form-control-user <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>"
                                    name="fullname" placeholder="Nama lengkap beserta gelar .."
                                    value="<?= old('fullname') ?>" required>
                            </div>

                            <!-- prodi input -->
                            <div class="form-group">
                                <label class="form-label" for="fullname">Program studi</label>
                                <select id="select-prodi-r"
                                    class="form-select <?php if (session('errors.prodi_dosen')) : ?> is-invalid <?php endif ?>"
                                    name="prodi_dosen" style="width: 100%; border-radius: 20px;" required>
                                    <option value="">
                                        Pilih prodi
                                    </option>
                                    <?php foreach ($prodi as $prd) : ?>
                                    <option value="<?= $prd->nama_prodi; ?>">
                                        <?= $prd->nama_prodi; ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <!-- Email input -->
                            <div class="form-group">
                                <label class="form-label" for="email">Alamat email</label>
                                <input type="email"
                                    class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="Email .."
                                    value="<?= old('email') ?>" required>
                                <small id="emailHelp"
                                    class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                            </div>

                            <!-- Username input -->
                            <div class="form-group">
                                <label class="form-label" for="username"><?= lang('Auth.username') ?></label>
                                <input type="text"
                                    class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                    name="username" placeholder="contoh: user name, username"
                                    value="<?= old('username') ?>" required>
                            </div>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="form-group row mb-5">
                                <div class="col-sm-6 mb-3 mb-sm-0 align-middle">
                                    <label class="form-label" for="password"><?= lang('Auth.password') ?></label>
                                    <input id="id_password" type="password" name="password"
                                        class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                        placeholder="<?= lang('Auth.password') ?>" autocomplete="off" required>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="pass_confirm">Konfirmasi kata sandi</label>
                                    <input type="password" name="pass_confirm"
                                        class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                        placeholder="Konfirmasi sandi" autocomplete="off" required>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit"
                                class="btn btn-primary btn-block btn-user mb-4"><?= lang('Auth.register') ?></button>

                            <!-- sign in text  -->
                            <div class="text-center">
                                <p class="form-label text-success">Sudah daftar? <a
                                        href="<?= base_url(); ?><?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a>
                                </p>
                            </div>
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