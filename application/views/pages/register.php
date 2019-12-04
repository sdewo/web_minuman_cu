<!-- Breadcrumb area Start -->
<section class="page-title-area bg-color" data-bg-color="#f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Register</h1>
                <ul class="breadcrumb">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->

<div class="main-content-wrapper">
    <div class="page-content-inner pt--75 pb--80">
        <div class="container">
            <div class="row">
                <div class="mx-auto">
                    <div class="register-box">
                        <!-- Access success registration message -->
                        <?= $this->session->flashdata('message') ?>

                        <form class="form form--register" method="post" action="<?= base_url('register') ?>">
                            <div class="form__group mb--20">
                                <label class="form__label" for="email">Nama Lengkap <span class="required">*</span></label>
                                <input type="text" class="form__input" id="nama" name="nama" value="<?= set_value('nama'); ?>">

                                <!-- Input error text view -->
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="email">Email address <span class="required">*</span></label>
                                <input type="text" class="form__input" id="email" name="email" value="<?= set_value('email'); ?>">

                                <!-- Input error text view -->
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="register_password">Password <span class="required">*</span></label>
                                <input type="password" class="form__input" id="register_password" name="register_password">

                                <!-- Input error text view -->
                                <?= form_error('register_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form__group">
                                <input type="submit" value="Register" class="btn btn-size-sm">
                            </div>

                        </form>
                        <a class="forgot-pass" href="<?= base_url('login') ?>">Already have account? Login here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->