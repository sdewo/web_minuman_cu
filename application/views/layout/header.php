<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Minuman Cu - eCommerce Drink in Indonesia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="dist/img/logo/logo.png" type="image/x-icon">
    <link rel="icon minuman_cu" href="dist/img/logo/logo.png">

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/main.css">

    <style>
        .logo--normal {
            height: 110px;
            width: 110px;
        }

        .logo--transparency {
            height: 110px;
            width: 110px;
        }
    </style>

</head>

<body>

    <!-- Preloader Start -->
    <div class="ft-preloader active">
        <div class="ft-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ft-child ft-bounce1"></div>
            <div class="ft-child ft-bounce2"></div>
            <div class="ft-child ft-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header class="header header-default site-header header-transparent">
            <div class="header__outer">
                <div class="header__inner header--fixed">
                    <div class="container">
                        <div class="header__main">
                            <div class="header__col header__left">
                                <a href="<?php echo base_url('home') ?>" class="logo">
                                    <figure class="logo--normal">
                                        <img src="dist/img/logo/logo.png" alt="Logo">
                                    </figure>
                                    <figure class="logo--transparency">
                                        <img src="dist/img/logo/logo.png" alt="Logo">
                                    </figure>
                                </a>
                            </div>
                            <div class="header__col header__center">
                                <nav class="main-navigation d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children position-relative">
                                            <a href="<?= base_url(); ?>" class="mainmenu__link">Home</a>
                                            <li class="mainmenu__item menu-item-has-children position-static">
                                            <a href="<?= base_url('product') ?>" class="mainmenu__link">Shop</a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="<?php echo base_url('contactus') ?>" class="mainmenu__link">Contact Us</a>
                                        </li>
                                        <?php
                                            if ($this->session->userdata('status') == "login") { ?>
                                                <li class="mainmenu__item">
                                                    <a href="<?php echo base_url('login/logout') ?>" class="mainmenu__link">Logout</a>
                                                </li>
                                        <?php   
                                            } else {}
                                        ?>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__col header__right">
                                <div class="toolbar-item d-none d-lg-block">
                                    <div class="toolbar-btn">
                                        <?php
                                            if ($this->session->userdata('status') == "login") { ?>
                                                <span><?php echo 'Hi,&nbsp;'.$this->session->userdata('nama'); ?></span>
                                        <?php   
                                            } else {
                                                echo '<a href="login" class="toolbar-btn">';
                                                echo '<span>Login</span>';
                                                echo '</a>/';
                                                echo '<a href="register" class="toolbar-btn">';
                                                echo '<span>Register</span>';
                                                echo '</a>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="toolbar-item">
                                    <?php
                                    if($this->session->userdata('status') == 'login'){ ?>
                                        <a href="<?php echo base_url('wishlist') ?>" class="toolbar-btn">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                   <?php }else{} ?>
                                </div>
                                <div class="toolbar-item mini-cart-btn">
                                    <a href="<?php echo base_url('cart') ?>" class="toolbar-btn">
                                        <span class="mini-cart-btn__icon">
                                            <i class="flaticon-bag"></i>
                                        </span>
                                        <?php
                                            $cart = $this->cart->contents();

                                            $qty = 0;
                                            foreach ($cart as $item){
                                                $qty = $qty + $item['qty'];
                                            }
                                        ?>
                                        <?php
                                        if($qty == 0){

                                        }else{ ?>
                                        <sup class="mini-cart-btn__count">
                                                <?php echo $qty; ?>
                                        </sup>
                                        <?php } ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-sticky-height"></div>
            </div>
        </header>
        <!-- Header End -->