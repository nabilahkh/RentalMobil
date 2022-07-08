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
                <li><a style="color:white;" href="<?php echo site_url('about/index')?>" class="nav-link">About</a></li>
                <li><a style="color:white;" href="<?php echo site_url('login/index')?>" class="nav-link">Daftar/Masuk</a></li>
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
                <h1 class="text-white"><strong>Daftar Mobil</strong></h1>
                <div class="custom-breadcrumbs">
                  <a class="text-white" href="index.html">Home</a>
                  <span class="mx-2 text-white">/</span>
                  <strong class="text-white" >Daftar Mobil</strong>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
  



      

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Daftar Mobil</strong></h2>
            <p class="mb-5">Ini adalah daftar mobil yang tersedia untuk disewa.</p>    
          </div>
        </div>
        

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
              <img src="<?php echo base_url('dist2/images/pajero.jpg')?>" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
              <h3>Mitsubishi Pajero Sport</h3>
              <div class="rent-price">
                  <strong>Rp. 1.400.000</strong><span class="mx-1">/</span>hari
              </div>
              <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature col-6">
                  <span class="caption">CC:</span><br>
                  <span class="number">2442</span>
                  </div>
                  <div class="listing-feature col-6">
                  <span class="caption">Tahun:</span><br>
                  <span class="number">2020</span>
                  </div>
              </div>
              <div>
                  <p>Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 68 L · Ground Clearance 218 mm · Tinggi 1835 mm</p>
                  <p><a href="<?php echo site_url('login/index')?>" class="btn btn-primary btn-sm">Rent Now</a></p>
              </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="listing d-block  align-items-stretch">
                <div class="listing-img h-100 mr-4">
                <img src="<?php echo base_url('dist2/images/rush.jpg')?>" alt="Image" class="img-fluid">
                </div>
                <div class="listing-contents h-100">
                <h3>Toyota Rush</h3>
                <div class="rent-price">
                    <strong>Rp. 350.000</strong><span class="mx-1">/</span>hari
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                    <div class="listing-feature col-6">
                    <span class="caption">CC:</span><br>
                    <span class="number">1496</span>
                    </div>
                    <div class="listing-feature col-6">
                    <span class="caption">Tahun:</span><br>
                    <span class="number">2022</span>
                    </div>
                </div>
                <div>
                    <p>Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 45 L · Ground Clearance 220 mm · Tinggi 1705 mm</p>
                    <p><a href="<?php echo site_url('login/index')?>" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
                </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
              <img src="<?php echo base_url('dist2/images/xpander.jpg')?>" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
              <h3>Mitsubishi Xpander</h3>
              <div class="rent-price">
                  <strong>Rp. 350.000</strong><span class="mx-1">/</span>hari
              </div>
              <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature col-6">
                  <span class="caption">CC:</span><br>
                  <span class="number">1496</span>
                  </div>
                  <div class="listing-feature col-6">
                  <span class="caption">Tahun:</span><br>
                  <span class="number">2022</span>
                  </div>
              </div>
              <div>
                  <p>Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 45 L · Ground Clearance 225 mm · Tinggi 1750 mm</p>
                  <p><a href="<?php echo site_url('login/index')?>" class="btn btn-primary btn-sm">Rent Now</a></p>
              </div>
              </div>
            </div>
          </div>
          

          </div>

          <div class="row">

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
              <img src="<?php echo base_url('dist2/images/ertiga.jpg')?>" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
              <h3>Suzuki Ertiga</h3>
              <div class="rent-price">
                  <strong>Rp. 300.000</strong><span class="mx-1">/</span>hari
              </div>
              <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature col-6">
                  <span class="caption">CC:</span><br>
                  <span class="number">1462</span>
                  </div>
                  <div class="listing-feature col-6">
                  <span class="caption">Tahun:</span><br>
                  <span class="number">2022</span>
                  </div>
              </div>
              <div>
                  <p>Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 45 L · Ground Clearance 180 mm · Tinggi 1690 mm</p>
                  <p><a href="<?php echo site_url('login/index')?>" class="btn btn-primary btn-sm">Rent Now</a></p>
              </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="listing d-block  align-items-stretch">
                <div class="listing-img h-100 mr-4">
                <img src="<?php echo base_url('dist2/images/mobilio.jpg')?>" alt="Image" class="img-fluid">
                </div>
                <div class="listing-contents h-100">
                <h3>Honda Mobilio</h3>
                <div class="rent-price">
                    <strong>Rp. 300.000</strong><span class="mx-1">/</span>hari
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                    <div class="listing-feature col-6">
                    <span class="caption">CC:</span><br>
                    <span class="number">1496</span>
                    </div>
                    <div class="listing-feature col-6">
                    <span class="caption">Tahun:</span><br>
                    <span class="number">2022</span>
                    </div>
                </div>
                <div>
                    <p>Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 42 L · Ground Clearance 189 mm · Tinggi 1603 mm</p>
                    <p><a href="<?php echo site_url('login/index')?>" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
                </div>
            </div>
          </div>

          </div>
      </div>
    </div>
            