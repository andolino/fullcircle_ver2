<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Full Circle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/tech/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/tech/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/tech/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/tech/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/image/fav.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGINS -->
    <link href="<?php echo base_url(); ?>assets/tech/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/tech/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/tech/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/tech/assets/plugins/swiper/css/swiper.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGINS -->
    
    <!-- BEGIN PAGES CSS -->
    <link class="main-stylesheet" href="<?php echo base_url(); ?>assets/tech/pages/css/pages.css?random=<?php echo mt_rand(); ?>" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="<?php echo base_url(); ?>assets/tech/pages/css/pages-icons.css" rel="stylesheet" type="text/css" />
    <script 
        defer 
        src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script 
        defer 
        src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
    

  <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-brands.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-regular.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/ekko-lightbox/ekko-lightbox.css'); ?>">
  <link href="<?php echo base_url('assets/css/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/css/lightbox.min.css'; ?>" rel="stylesheet">
  <style>
    i {
      font-style: normal !important;
    }
  </style>
  
  <link rel='stylesheet' id='rs-plugin-settings-css' href='<?php echo base_url(); ?>assets/css/rs6.css?random=<?php echo mt_rand(); ?>' type='text/css' media='all' />
  <script type='text/javascript' src='<?php echo base_url() . 'assets/js/jquery.plugin.js'; ?>' id='jquery-core-js'></script>
  <script src="<?php echo base_url('assets/js/aos.js'); ?>"></script>
  
  <script>var $ = jQuery.noConflict();</script>
  <script src="<?php echo base_url(); ?>assets/tech/pages/js/scrolling-nav.js"></script>
  
</head>
  <body class="pace-dark" id="page-top">
    <!-- BEGIN HEADER -->
    <nav class="header bg-header transparent-light" data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark">
      <div class="container relative">
        <!-- BEGIN LEFT CONTENT -->
        <!-- background-image: url('assets/image/logos/12th_back.jpg'); width: 178px; height: 136px; background-size: cover; border-radius: 91px; background-position: bottom center; -->
        <div class="pull-left" style="">
          <!-- .header-inner Allows to vertically Align elements to the Center-->
          <div class="header-inner pt-2">
            <!-- BEGIN LOGO -->
            <a class="page-scroll" href="<?php echo $this->uri->segment(1) == 'featured-events' ? base_url() : '#page-top'; ?>" class="active">
              <img src="<?php echo base_url('assets/image/lg-landscape.png'); ?>" width="180" style="border-radius: 93px;" height="" data-src-retina="<?php echo base_url('assets/image/lg-landscape.png'); ?>" class="logo" alt="">
              <img src="<?php echo base_url(); ?>assets/image/lg-landscape.png" width="200" style="border-radius: 93px;width: 143px;" data-src-retina="<?php echo base_url(); ?>assets/image/lg-landscape.png" class="alt logo2" alt="">
            </a>
          </div>
        </div>
        
        <!-- BEGIN HEADER TOGGLE FOR MOBILE & TABLET -->
        <div class="pull-right">
          <div class="header-inner">
            <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
              <div class="one"></div>
              <div class="two"></div>
              <div class="three"></div>
            </div>
          </div>
        </div>
        <!-- END HEADER TOGGLE FOR MOBILE & TABLET -->

        
        
        <!-- BEGIN RIGHT CONTENT -->
        <div class="menu-content mobile-dark pull-right clearfix" data-pages-direction="slideRight" id="header">
          <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
          <div class="pull-right">
            <a href="#" class="padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
              <i class=" pg-close_line"></i>
            </a>
          </div>
          <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
          
          
          
          <!-- BEGIN MENU ITEMS -->
          
          
          <div class="header-inner">
            <div class="row font-11px text-light" style="height: 20px;">
              
              <!-- <div class="col-lg-5 col-md-6">
                <i class="fas fa-map-marker-alt"></i> &nbsp; address 
              </div> -->
              <div class="social-top col-lg-4 col-md-6 offset-lg-8 text-right lh-3p6">
                <i class="fab fa-facebook font-18px cursor-pointer" onclick='window.open("https://www.facebook.com\/FullCircleEventsAsiaInc")'></i> &nbsp;&nbsp;
                <i class="fab fa-linkedin font-18px cursor-pointer" onclick='window.open("https://www.linkedin.com/company/full-circle-events-asia-inc")'></i> &nbsp;&nbsp;
                <i class="fab fa-instagram font-18px cursor-pointer" onclick='window.open("https://www.instagram.com/fullcircleevents_asia")' style="margin-right: 21px;"></i>
              </div>
            </div>
            <ul class="menu p-0">
              <li>
                <a class="page-scroll" href="<?php echo $this->uri->segment(1) == '' ? '#page-top' :  base_url() . '#page-top'; ?>" class="active">Home </a>
              </li>
              <li>
                <a class="page-scroll" href="<?php echo $this->uri->segment(1) == '' ? '#about-us' :  base_url() . '#about-us'; ?>">About Us</a>
              </li>
              <li>
                <a class="page-scroll" href="<?php echo $this->uri->segment(1) == '' ? '#our-team' :  base_url() . '#our-team'; ?>">Our Team</a>
              </li>
              <li>
                <a class="page-scroll" href="<?php echo $this->uri->segment(1) == '' ? '#div-our-services' :  base_url() . '#div-our-services'; ?>">Our Services </a>
              </li>
              <li>
                <a class="page-scroll" href="<?php echo $this->uri->segment(1) == '' ? '#our-clients' :  base_url() . '#our-clients'; ?>">Our Clients</a>
              </li>
              <li>
                <a class="page-scroll" href="<?php echo $this->uri->segment(1) == '' ? '#featured-events' :  base_url() . '#featured-events'; ?>">Featured Events</a>
              </li>
              <li>
                <a class="page-scroll" href="<?php echo $this->uri->segment(1) == '' ? '#contact-us' :  base_url() . '#contact-us'; ?>">Reach Us</a>
              </li>
              <li class="img-contact-us">
                <img src="<?php echo base_url() . 'assets/image/contact-email.png'; ?>" alt="">
              </li>
              <li>
                <div class="row top-contact-us pt-3 text-light">
                  <div class="col-1">
                  </div>
                  <div class="col-11">
                    <ul class="pl-0">
                      <li>Call: (+63919 0059 768)</li>
                      <li>Email: events@fullcircle-asia.com</li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
            <!-- <div class="row">
              <div class="col-lg-3 col-md-6 lh-3p6 contact_number">
                <label for="">Have any questions?</label>
                <i class="fas fa-phone"></i> &nbsp; +63919 0059768 768
                <i class="fas fa-envelope"></i> &nbsp; events@fullcircle-asia.com
              </div>
            </div> -->
            
            <!-- BEGIN COPYRIGHT FOR MOBILE -->
            <div class="font-arial m-l-35 m-r-35 m-b-20 visible-sm visible-xs m-t-20 d-none">
            	<!-- Text Desc Nav -->
              <div class="row">
                <div class="fs-11 col-lg-3 col-md-6 small-text p-b-10">
                  <i class="fas fa-phone"></i> &nbsp; +63919 0059768 768
                </div>
                <div class="fs-11 col-lg-5 col-md-6 small-text p-b-10">
                  <i class="fas fa-envelope"></i> &nbsp; events@fullcircle-asia.com
                </div>
              </div>
              <!-- <p class="fs-11 no-margin small-text p-b-20">Exclusive only at ,Themeforest. See Standard licenses & Extended licenses -->
              </p>
              
              <p class="fs-11 small-text muted">Copyright &copy; 2020 FullCircle</p>
            </div>
            <!-- END COPYRIGHT FOR MOBILE -->
          </div>
          <!-- END MENU ITEMS -->
        </div>
      </div>
    </nav>

    <!-- END HEADER -->
        
        
        