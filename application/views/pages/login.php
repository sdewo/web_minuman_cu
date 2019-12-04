<!-- Breadcrumb area Start -->
<section class="page-title-area bg-color" data-bg-color="#f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Login</h1>
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
                    <div class="login-box">
                        <!-- Access success logout message -->
                        <?= $this->session->flashdata('message') ?>

                        <form class="form form--login" method="post" action="<?= base_url('login'); ?>">
                            <div class="form__group mb--20">
                                <label class="form__label" for="login_email">Email address <span class="required">*</span></label>
                                <input type="text" class="form__input" id="login_email" name="login_email" value="<?= set_value('login_email'); ?>">

                                <!-- Input error text view -->
                                <?= form_error('login_email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="login_password">Password <span class="required">*</span></label>
                                <input type="password" class="form__input" id="login_password" name="login_password">

                                <!-- Input error text view -->
                                <?= form_error('login_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="d-flex align-items-center mb--20">
                                <div class="form__group mr--30">
                                    <input type="submit" value="Log in" class="btn btn-size-sm">
                                </div>
                            </div>
                            <a class="forgot-pass" href="<?= base_url('register') ?>">Don't have one? Create now!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->