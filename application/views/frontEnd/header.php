<!doctype html>
<html lang="en">

  <head>
    <title>Car Rental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('dist2/fonts/icomoon/style.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('dist2/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dist2/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dist2/css/jquery.fancybox.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dist2/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dist2/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dist2/fonts/flaticon/font/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dist2/css/aos.css')?>">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url('dist2/css/style.css')?>">
  <style>
    .listing-feature{
      padding-left: 0px;
    }
    /* .hero inner-page{
      background-image: url('images/bg-1.jpg');
    } */
    </style>
    </head>
        
    <body>
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <img src="<?php echo base_url('dist2/images/logo.png')?>" href="index.html" width="170">
              </div>
            </div>

            <div class=" col-9  text-right">
              
              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto">
                <li class="active"><a style="color:white;"  href="<?php echo site_url('dashboard/index')?>" class="nav-link">Home</a></li>
                <li><a style="color:white;" href="<?php echo site_url('daftarMobil/index')?>" class="nav-link">Daftar Mobil</a></li>
                <li><a style="color:white;" href="<?php echo site_url('sewa/index')?>" class="nav-link">Sewa</a></li>
                <li><a style="color:white;" href="<?php echo site_url('about/index')?>" class="nav-link">About</a></li>
                <li><a style="color:white;" href="<?php echo site_url('login/index')?>" class="nav-link">Daftar/Masuk</a></li>
                <li><a style="color:white;" href="<?php echo site_url('dashboard/index')?>" class="nav-link">Logout</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>