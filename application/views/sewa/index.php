<?php
    if(!$this->session->has_userdata('USERNAME')){
        redirect(base_url().'index.php/login');
    }
?>
<!doctype html>
<html lang="en">

  <head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
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
                <li><a style="color:white;" href="<?php echo site_url('login/index')?>" class="nav-link">Logout</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>
        <div class="hero inner-page" style="background-image:url('<?php echo base_url('dist2/images/bg-1.jpg')?>');"> 
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-5">

              <div class="intro">
                <h1 class="text-white"><strong>Detail Mobil</strong></h1>
                <div class="custom-breadcrumbs">
                  <a class="text-white" href="index.html">Home</a>
                  <span class="mx-2 text-white">/</span>
                  <strong class="text-white" >Detail Mobil</strong>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="site-section bg-light">
        <div class="container">
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-11">
              
              <form class="trip-form">
                
                <div class="row align-items-center">
                  <?php echo form_open('sewa/save');?>
                  <div class="mb-3 mb-md-0 col-md-2">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-1" name="tanggal_mulai" placeholder="Tanggal Awal" class="form-control datepicker px-3">
                      <span class="icon icon-date_range"></span>
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-2">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-2" name="tanggal_akhir" placeholder="Tanggal Akhir" class="form-control datepicker px-3">
                      <span class="icon icon-date_range"></span>
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-2">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-3" name="tujuan" placeholder="Tujuan" class="form-control px-3">
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-2">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-4" name="noktp" placeholder="No. KTP" class="form-control px-3">
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-1">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-4" name="User_id" placeholder="User ID" class="form-control px-3">
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-1">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-4"  name="mobil_id" placeholder="Mobil ID" class="form-control px-3">
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-2">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block py-3">
                  </div>
                </div>
                
              
              <?php echo form_close();?>
  
            </div>
          </div>

      </div>