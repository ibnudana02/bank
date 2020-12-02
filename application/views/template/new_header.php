<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/'); ?>img/logo/ico.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= $judul; ?></title>

    <link href="<?= base_url('assets/new/') ?>css/plugins.css" rel="stylesheet">
    <link href="<?= base_url('assets/new/') ?>css/style.css" rel="stylesheet">
</head>

<body>

    <div class="body-inner">

        <div id="topbar" class="d-none hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-menu">
                            <li><a href="#">Phone: +1 (234) 567-890</a></li>
                            <li><a href="#">Email: contact@inspiro-media.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <header id="header">
            <div class="header-inner">
                <div class="container">
                    <div id="logo"> <a href="index.html"><img src="<?php echo base_url('assets/'); ?>img/logo/bprs.png" class="logo-default" alt=""></a> </div>
                    <?php $this->load->view('template/new_menu'); ?>
                </div>
            </div>
        </header>