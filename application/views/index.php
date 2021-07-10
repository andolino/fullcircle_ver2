


<style>
/* .cont-img-src-cover{
    height: 100% !important;
}
.cont-img-src {
    height: 100vh !important;
}
.cont-img-src img {
    height: 100vh !important;
}
.cont-img-src div {
    height: 100vh !important;
}
.cont-img-src-main{
  height: 100vh !important;
}
.cont-img-src-parent{
  height: 100vh !important;
  max-width: 100% !important;
} */
.d-block.w-100 {
  height: 100vh !important;
  object-fit: cover;
}
.carousel-indicators li { visibility: hidden; }

.slide-1-caption{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.carousel-caption.d-md-block.slide-1-caption {
  font-size: 75px;
  font-weight: bold;
  width: 37%;
  margin: auto;
}

@media only screen and (max-width: 1400px) {
  .carousel-caption.d-md-block.slide-1-caption {
    font-size: 69px;
    font-weight: bold;
    width: 43%;
    margin: auto;
  }
}

@media only screen and (max-width: 800px) {
  .carousel-caption.d-md-block.slide-1-caption {
    font-size: 67px !important;
    font-weight: bold !important;
    width: 75% !important;
    margin: auto !important;
  }
}

@media only screen and (max-width: 480px) {
  .carousel-caption.d-md-block.slide-1-caption {
    font-size: 33px !important;
    font-weight: bold !important;
    width: 71% !important;
    margin: auto !important;
  }
  .slide-1-caption-btn {
    font-size: 15px !important;
    width: 72% !important;
  }
}




.slide-2-caption{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.carousel-caption.d-md-block.slide-2-caption {
  font-size: 58px;
  font-weight: bold;
  width: 20%;
  text-align: left;
  color: #242424;
  margin-left: 12%;
  line-height: 1.1;
}
.slide-1-caption .line.page-scroll {
  font-size: 20px;
  margin: auto;
  display: inherit;
  width: 46%;
  padding: 2px;
  background: #45193a6e;
  color: #f0f0f0;
  padding: 15px;
  border-radius: 7px;
  font-weight: normal;
  margin-top: 30px;
}

.slide-2-caption-btn {
  font-size: 20px;
  display: inherit;
  background: #45193a6e;
  color: #f0f0f0;
  padding: 15px;
  border-radius: 7px;
  font-weight: normal;
  text-align: center;
}
.vertical-center-btn-2 {
  width: 15%;
}

@media only screen and (max-width: 1480px) {
  .carousel-caption.d-md-block.slide-2-caption {
    font-size: 58px;
    font-weight: bold;
    width: 23%;
  }
}

@media only screen and (max-width: 800px) {
  .carousel-caption.d-md-block.slide-2-caption {
    font-size: 49px !important;
    font-weight: bold !important;
    width: 42% !important;
  }
  .vertical-center-btn-2 {
    width: 29% !important;
  }
}

@media only screen and (max-width: 480px) {
  .carousel-caption.d-md-block.slide-2-caption {
    font-size: 43px !important;
    font-weight: bold !important;
    width: 63% !important;
    margin-left: 0 !important;
  }
  .vertical-center-btn-2 {
    width: 61% !important;
  }
  .slide-2-caption-btn {
    font-size: 15px !important;
    margin-left: 45px !important;
  }
}
</style>

<div class="page-wrappers">
<div id="site-content" class="site-content">
  <div id="content-body" class="content-body">
    <div class="content-body-inner wrap">
      <!-- The main content -->
      <main id="main-content" class="main-content" itemprop="mainContentOfPage">
        <div class="main-content-inner">					
          <div class="content">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img class="d-block w-100" src="<?php echo base_url('assets/image/slider/photo1.jpg'); ?>" alt="First slide">
                          <div class="carousel-caption d-md-block slide-1-caption">
                            <span data-aos="fade-up-right">  Watch Your Event's <span style="color: #d483ec;">Success</span> unfold </span>
                            <div class="row">
                              <div class="col">
                                <a class="button line page-scroll slide-1-caption-btn" href="#contact-us">Let's Make it Happen!</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <img class="d-block w-100" src="<?php echo base_url('assets/image/slider/photo2.jpg'); ?>" alt="Second slide">
                          <div class="carousel-caption d-md-block slide-2-caption">
                            <span data-aos="fade-up-right">More than an Event.. It's an Experience </span>
                          </div>
                          <div class="row">
                            <div class="col" style="position: absolute;bottom: 19%;">
                              <div class="m-auto vertical-center-btn-2">
                                <a class="button line page-scroll slide-2-caption-btn" href="#featured-events">Featured Events</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <img class="d-block w-100" src="<?php echo base_url('assets/image/slider/photo3.jpg'); ?>" alt="Third slide">
                          <div class="carousel-caption d-md-block slide-2-caption">
                            <span style="color: #f0f0f0;" data-aos="fade-up-right">We Make it Happen!</span>
                          </div>
                          <div class="row">
                            <div class="col" style="position: absolute;bottom: 19%;">
                              <div class="m-auto vertical-center-btn-2">
                                <a class="button line page-scroll slide-2-caption-btn" href="#div-our-services">Our Services</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    
                    <!-- <script type="text/javascript">jssor_1_slider_init();</script> -->

                    <!-- Watch Your -->
                    <!-- Event's Success-->
                    <!-- Unfold -->
                    <!-- <?php //echo base_url('assets/image/slider/photo1.jpg'); ?> -->
                    <!-- <a class="button line page-scroll" href="#contact-us">Let's Make it Happen!</a>  -->

                    <!-- More than -->
                    <!-- an Event, -->
                    <!-- It's an -->
                    <!-- Experience. -->
                    <!-- <?php //echo base_url('assets/image/slider/photo2.jpg'); ?> -->
                    <!-- <a class="button line page-scroll" href="#featured-events">Featured Events</a> -->


                    <!-- We Make it -->
                    <!-- Happen! -->
                    <!-- <?php //echo base_url('assets/image/slider/photo3.jpg'); ?> -->
                    <!-- <a class="button line page-scroll" href="#div-our-services">Our Services</a>  -->


                      <!-- END REVOLUTION SLIDER -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.content -->
            </div>
          <!-- /.main-content-inner -->
        </main>
        <!-- /.main-content -->
      </div>
      <!-- /.content-body-inner -->
    </div>
      <!-- /.content-body -->			
  </div>
  <!-- /.site-content -->
  <!-- /#site-footer -->
</div>
    
    <!-- BEGIN JUMBOTRON -->
    <!-- <section>
    
      <header class="hero-text">
        <div class="hero vh-100" data-arrows="true" data-autoplay="true">
          <div class="hero-slide vh-100">
            <img alt="Mars Image" class="img-responsive cover" src="<?php //echo base_url('assets/image/slider/photo1.jpg'); ?>">
            <div class="header-content text-light position-absolute col-lg-12 ">
              <div class="bg-label slide-right text-center">
                <h1 class="mb-4 text-light slide-content" data-aos="fade-up">Watch Your <br> Event’s <span style="color:#e199ce;">Success</span> <br> Unfold</h1>
                <a class="btn btn-baby-pink btn-lg mt-2 page-scroll" href="#contact-us" tabindex="0">Lets Make it Happen!</a>
              </div>
            </div>
          </div>
          <div class="hero-slide vh-100">
            <img alt="Mars Image" class="img-responsive cover" src="<?php //echo base_url('assets/image/slider/photo2.jpg'); ?>">
            <div class="header-content text-light position-absolute col-lg-12 slide-content" style="top: 14%;">
              <div class="bg-label" style="width: 41%;margin: auto;padding: 12px;text-align: left;color: #000;height: 500px;">
                <h1 class="mb-4 text-dark slide-content" data-aos="fade-up" style="font-size: 62px;">More than <br> an Event.. <br> It's an <br> Experience</strong></h1>
              </div>
              <a class="btn btn-baby-pink btn-lg w-max mt-2 page-scroll" href="#featured-events" tabindex="0">Featured Events</a>
            </div>
          </div>
          <div class="hero-slide vh-100">
            <img alt="Mars Image" class="img-responsive cover" src="<?php //echo base_url('assets/image/slider/photo3.jpg'); ?>">
            <div class="header-content text-light position-absolute col-lg-12" style="top: 40%;">
              <div class="bg-label" style="width: 32%;background: rgba(253, 190, 109, 0.24) !important;" data-aos="fade-up">
                <h1 class="mb-4 text-light slide-content" style="padding: 25px;font-weight: 600;font-size: 70px;line-height: 1.1;">We Make it <br> Happen!</h1>
              </div>
              <a class="btn btn-baby-pink btn-lg w-max mt-2 page-scroll" href="#div-our-services" tabindex="0">Our Services</a>
            </div>
          </div>
        </div>
      </header>
    </section> -->
    <!-- END JUMBOTRON -->
    
    
    
      
      <!-- BEGIN NETWORK SOLUTIONS SECTION -->
      <section class="bg-master-lightest p-b-85 p-t-75" id="about-us">
        <div class="container">
          <div class="md-p-l-20 md-p-r-20 xs-no-padding pt-5">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="m-t-5 text-center">Who We Are</h1>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6 no-padding xs-p-l-15 xs-p-r-15 text-align-justify">
                <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                  <p>Established in 2008, <strong>Full Circle Events Asia, Inc.</strong> is now one of the leading, most respected and top of mind Event and Marketing agencies 
                  in the Philippines, chosen by Global IT giants as well as other Industries.</p>  
                  <p><strong>A full-service Event Management and Marketing Communications Company,</strong> with 12 Years in the Industry, the Company has organized
                  over 1000 wide variety of Events, Campaigns and Activations that range from simple seminars, CEO Breakfasts and Lunches to National Conferences,
                  Summits, Tech Expo, Caravans, Product Launches, Lead Generation and Demand Generation Campaigns, Company Launches. Formal Dinners, Mall Tours, School
                  Tours, Private functions and Destination or Out-of-Town Events.</p>  
                  <p>And with the Team’s almost 35 years of combined experience in Event Management and Marketing Communications, Full Circle Events Asia
                  can make any event and campaign flow smoothly by providing extensive support — from <strong>Planning, Consulting, Execution and extensive
                  Post Event Reporting, Lead qualifications, Lead capture and management to other special management services.</strong></p>
                  <p>While its <strong>wide network of Partner Suppliers and established affiliates</strong> – be it in Public Relations, Graphics design and Printing, Staging and
                  Production and Corporate giveaways — can provide clients with a wide range of reasonable packages to choose from.</p>
                  <p><strong>Supported by a team of enthusiastic and highly skilled team members</strong> with impressive and collective industry skills and experience, you
                  can take the front seat and watch your Event’s success unfold.</p>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6 no-padding xs-p-l-15 xs-p-r-15 text-align-justify">
                <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                  <div class="row">
                    <div class="offset-sm-3 col-9 col-5 pl-5" style="font-size: 36px;font-weight: 600;line-height: 1.3;margin-bottom: 30px;">More than <br> an Event, <br> It's an <br> Experience.</div>
                  </div>
                  <p style="font-size: 18px;font-weight: 600;">Full Circle Client Event Videos</p>
                  <div class="carou-video">
                    <!-- <div>
                      <p>Dell EMC Partner Kick 2017</p>
                      <video class="m-auto d-flex" width="100%" height="360" poster="<?php //echo base_url() . 'assets/image/dell_pan.PNG'; ?>" controls>
                        <source src="<?php //echo base_url() . 'assets/videos/clients/dell_pan_final_edit.mp4'; ?>" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">Your browser does not support the video tag.
                      </video> 
                    </div> -->
                    <div>
                      <video class="m-auto d-flex" width="100%" height="360" poster="<?php echo base_url() . 'assets/image/phil_dev.PNG'; ?>" controls>
                        <source src="<?php echo base_url() . 'assets/videos/clients/phil_dev_idea2016_fullhighlight_with_credits_sub_fullhd1080p_superfinalversion.mp4'; ?>" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">Your browser does not support the video tag.
                      </video> 
                      <p>Phildev IDEA Global Entrepreneurship Workshop 2016</p>
                    </div>
                    <div>
                      <video class="m-auto d-flex" width="100%" height="360" poster="<?php echo base_url() . 'assets/image/mondato.PNG'; ?>" controls>
                        <source src="<?php echo base_url() . 'assets/videos/clients/mondato_asia_summit_2015_events_by_full_circle.mp4'; ?>" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">Your browser does not support the video tag.
                      </video> 
                      <p>Mondato Asia Summit 2015</p>
                    </div>
                    <div>
                      <video class="m-auto d-flex" width="100%" height="360" poster="<?php echo base_url() . 'assets/image/acumatica.PNG'; ?>" controls>
                        <source src="<?php echo base_url() . 'assets/videos/clients/acumatica_video_2.mp4'; ?>" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">Your browser does not support the video tag.
                      </video>
                      <p>Acumatica The Cloud ERP</p>
                    </div>
                  </div>
                  <div class="row">
                    <!-- <div class="col-12 pt-2" style="font-size: 24px;font-weight: 600;line-height: 1.3;text-align: right;">Full Circle Client Event Videos</div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-12">
                <div class="text-center">
                  <h5 class="block-title m-t-40 hint-text m-b-0">Follow your Heart</h5>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      <!-- END NETWORK SOLUTIONS SECTION -->


      <!-- BEGIN NETWORK SOLUTIONS SECTION -->
      <section class="bg-master-lightest p-b-85 p-t-75" id="our-team" data-pages-bg-image="<?php echo base_url(); ?>assets/image/logos/bg-section.png" data-bg-overlay="black" data-overlay-opacity="0.3" data-pages="parallax">
        <div class="container">
          <div class="md-p-l-20 md-p-r-20 xs-no-padding">
            <div class="row">
              <div class="col-sm-12 col-md-12 pt-5">
                <h1 class="m-t-5 text-center text-light">The Team Behind Full Circle Events</h1>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 no-padding xs-p-l-15 xs-p-r-15 text-align-justify">
                <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                  <div class="row mb-5">
                    <div class="col-lg-9 offset-lg-3 pl-0"></div>
                    <div class="col-lg-3 mt-3" data-aos="fade-up-right">
                      <img src="<?php echo base_url('assets/image/our_team/anna_solis_crespo.jpg'); ?>" style="object-fit: cover; height: 265px;" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-lg-7 lbl-team-info-girl pt-0" data-aos="fade-up-left">
                      <label for="" class="font-weight-bold text-light mt-4" style="font-size:18px;">Anna Solis-Crespo</label><br>
                      <label for="" class="block-title font-12">Founder and CEO</label>
                      <p>22 Years in the Industry, with a track record of over 2,000 events, Anna Solis-Crespo boasts of
                      extensive experience in Event Planning, Marketing Communications, Project Management and
                      Public Relations, garnered by working with leading Multinational Companies in the IT industry.</p>
                      <p>She is widely known to her colleagues in the Industry, having earned a reputation for impeccable
                      skills in Events Management and Implementation and a keen Eye for Details.</p>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-lg-2 offset-lg-8 pl-0"></div>
                    <div class="col-lg-7 offset-lg-2 lbl-team-info-boy pt-0" data-aos="fade-up-left">
                      <!-- <label for="" class="font-weight-bold" style="font-size:18px;">David Crespo</label> <br> -->
                      <label for="" class="font-weight-bold text-light w-100 text-right" style="font-size:18px;">David Crespo</label><br>
                      <label for="" class="block-title font-12 w-100 text-right">Chief Finance Officer</label>
                        <p>As the Full Circle’s CFO, David’s main responsibility is to safeguard the Company’s Financial growth
                        and assets. His keen sense for Finance and sound recommendations has helped Full Circle grow over
                        the years through sound financial allocation and recommendations, and ensuring compliance to the
                        annual and monthly budgets.</p>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up-right">
                      <img src="<?php echo base_url('assets/image/our_team/david_crepo.jpg'); ?>" style="object-fit: cover; height: 265px;" alt="" class="img-thumbnail">
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-lg-9 offset-lg-3 pl-0"></div>
                    <div class="col-lg-3 text-center" data-aos="fade-up-right">
                      <img src="<?php echo base_url('assets/image/our_team/maileen_crespo.jpg'); ?>" style="object-fit: cover; height: 265px;" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-lg-7 lbl-team-info-girl pt-0" data-aos="fade-up-left">
                      <!-- <label for="" class="font-weight-bold" style="font-size:18px;">Maileen Crespo</label> <br> -->
                      <label for="" class="font-weight-bold text-light" style="font-size:18px;">Maileen Crespo</label><br>
                      <label for="" class="block-title font-12">Consultant</label>
                      <p>Maileen Crespo is considered a pioneer of one of the leading Event Management companies in
                      the IT industry.</p>
                      <p>With almost 22 years of experience in organizing Events, she is gifted with a natural ebullience
                      and savvy for Public Relations, relationship building and communications.</p>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-lg-3 offset-lg-6 pr-0 text-right"></div>
                    <div class="col-lg-7 offset-lg-2 lbl-team-info-girl pt-0" data-aos="fade-up-left">
                      <!-- <label for="" class="font-weight-bold" style="font-size:18px;">Maria Donneza Solis</label> <br> -->
                      <label for="" class="font-weight-bold text-light w-100 text-right" style="font-size:18px;">Maria Donneza Solis</label><br>
                      <label for="" class="block-title font-12 w-100 text-right">Project Manager</label>
                      <p>With almost 7 years experience in Events management, Donnie is gifted with impressive skills and extensive experience in Event Planning and Project Management both Local and International. </p>
                      <p>Donnie is equipped with sharp organizational skills and strong ability in dealing with people.
                      She is passionate in delivering exceptional Client Service ensuring the best quality to help Clients
                      achieve their goals.</p>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up-right">
                      <img src="<?php echo base_url('assets/image/our_team/maria_donneza_solis.jpg'); ?>" style="object-fit: cover; height: 265px;" alt="" class="img-thumbnail">
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-lg-9 offset-lg-3 pl-0"></div>
                    <div class="col-lg-3 text-center" data-aos="fade-up-right">
                      <img src="<?php echo base_url('assets/image/our_team/kenji_santos.jpg'); ?>" style="object-fit: cover; height: 265px;" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-lg-7 lbl-team-info-boy pt-0" data-aos="fade-up-left">
                      <!-- <label for="" class="font-weight-bold" style="font-size:18px;">Kenji Santos</label> <br> -->
                      <label for="" class="font-weight-bold text-light" style="font-size:18px;">Kenji Santos</label><br>
                      <label for="" class="block-title font-12">Data Administrator</label>
                      <p>Kenji’s responsibility is at the core of Full-Circle’s operations-maintaining the confidentiality and
                      updating the robust database of contacts that have been generated from the Events.</p>
                      <p>He ensures the correctness and accuracy of post event reports and data analysis before
                      submitting to Clients.</p>
                      <p>He is also responsible for reaching out to the target audience of each event through a variety of
                      communications, and provides production and logistical support to the Event Manager in
                      preparing and executing Corporate and Marketing events.</p>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-lg-2 text-right offset-lg-7 pr-0"></div>
                    <div class="col-lg-7 offset-lg-2 lbl-team-info-girl pt-0" data-aos="fade-up-left">
                      <!-- <label for="" class="font-weight-bold" style="font-size:18px;">Ana Marie Antoniano</label> <br> -->
                      <label for="" class="font-weight-bold text-light w-100 text-right" style="font-size:18px;">Ana Marie Antoniano</label><br>
                      <label for="" class="block-title font-12 w-100 text-right">Admin Officer</label>
                      <p>Marie oversees the management of Office operations, provides support and assistance to other
                      division and administrative functions. She extends assistance in negotiations and acquiring
                      quotations from third party suppliers, internal events, reports and correspondence and coordinates
                      with other aspects related to events.</p>
                      <p>Her responsibilities also include implementation of any other duties directed by the Finance and
                      Operations manager and the CEO.</p>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up-right">
                      <img src="<?php echo base_url('assets/image/our_team/ana_marie_antoniano.jpg'); ?>" style="object-fit: cover; height: 265px;" alt="" class="img-thumbnail">
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="text-center">
                  <h5 class="mb-5 hint-text text-center font-weight-bold text-light">Supported by enthusiastic and highly skilled Team Members with impressive and <br> collective Industry skills and experience.</h5>
                  <h6 class="mb-4 ml-5 hint-text text-left font-weight-bold text-light">Our Senior Telemarketers, Production Staff, Data Managers and Logistics Managers</h6>
                  <div class="row">
                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-12 mb-3" data-aos="flip-up">
                        <img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_1.jpg'); ?>" alt="" class="img-thumbnail">
                      </div>
                      <div class="col-lg-12" data-aos="flip-up">
                        <img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_5.jpg'); ?>" alt="" class="img-thumbnail">  
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-12 mb-3" data-aos="flip-up">
                        <img style="object-fit: cover; width: 350px; height: 593px;" src="<?php echo base_url('assets/image/our_team/Team_Photo_33.jpg'); ?>" alt="" class="img-thumbnail">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-12 mb-3" data-aos="flip-up">
                        <img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_2.jpg'); ?>" alt="" class="img-thumbnail">
                      </div>
                      <div class="col-lg-12" data-aos="flip-up">
                        <img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_4.jpg'); ?>" alt="" class="img-thumbnail">  
                      </div>
                    </div>
                  </div>  
                    <!-- <div class="col-lg-4" data-aos="flip-up"><img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_1.jpg'); ?>" alt="" class="img-thumbnail"></div>
                    <div class="col-lg-4" data-aos="flip-up"><img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_2.jpg'); ?>" alt="" class="img-thumbnail"></div>
                    <div class="col-lg-4" data-aos="flip-up"><img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_3.jpg'); ?>" alt="" class="img-thumbnail"></div>
                    <div class="col-lg-4" data-aos="flip-up"><img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_4.jpg'); ?>" alt="" class="img-thumbnail"></div>
                    <div class="col-lg-4" data-aos="flip-up"><img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_5.jpg'); ?>" alt="" class="img-thumbnail"></div>
                    <div class="col-lg-4" data-aos="flip-up"><img style="object-fit: cover; width: 350px; height: 289px;" src="<?php echo base_url('assets/image/our_team/team_photo_6.jpg'); ?>" alt="" class="img-thumbnail"></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END NETWORK SOLUTIONS SECTION -->


      
      
      
      <!-- BEGIN MAIN CONTENT SECTION -->
      <section class="p-b-85 p-t-75 p-b-65 p-t-55" id="div-our-services" style="background-image: url('assets/image/bg2.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
        <div class="md-p-l-20 xs-no-padding clearfix">



          <div class="col-sm-12 col-md-12 pt-5">
            <h1 class="m-t-5 text-center">Our Services</h1>
            <h5 class="block-title hint-text text-center"><strong>Full Circle Events Asia, Inc.</strong> IS CONFIDENT THAT YOUR NEEDS IN EVENTS MANAGEMENT AND <br> MARKETING 
            COMMUNICATIONS WILL BE EFFECTIVELY ADDRESSED BY AVAILING OUR SERVICES.</h5>
          </div>

          <!-- <div class="row"> -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card-deck">
                <div class="card d-flex m-auto mb-2" style="margin-top: 137px !important;" data-aos="fade-right">
                  <img src="<?php echo base_url('assets/image/our_services/pic1.png'); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center"><strong>Events and Marketing Communications Services</strong> </h5>
                    <h6 class="card-title text-center font-italic mb-4" style="font-size:18px !important;">Let’s thrive in the New Normal! </h6>
                    <label for="" class="font-italic">Webinar and Virtual Events Management</label>
                    <ul class="pl-3">
                      <li>Webinar and Virtual Events Management</li>
                      <li>Webinar Platform Integration and Live Streaming <br class="btn-oth-tech" style="display:block;">  and other Technicals</li>
                    </ul>
                    <label for="" class="font-italic">Inbound and Outbound Marketing</label>
                    <ul class="pl-3">
                      <li>Social Media Management and <br class="btn-oth-tech2" style="display:none;"> Ads Design</li>
                      <li>Demand Generation</li>
                      <li>Leads Generation</li>
                      <li>Database Profiling and Telemarketing</li>
                      <li>Virtual Events Attendance Generation</li>
                    </ul>
                    <label for="" class="font-italic">Logistics Services</label>
                    <ul class="pl-3">
                      <li>Remote Catering Management and Coordination</li>
                      <li>E-gifts and Gifts Distribution to Customers and other Simultaneous Logistics Services</li>
                    </ul>
                  </div>
                </div>
                <div class="card d-flex m-auto mb-2" data-aos="fade-up">
                  <img src="<?php echo base_url('assets/image/our_services/pic2.jpg'); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center"><strong>Full Event Management</strong></h5>
                    <h6 class="card-title text-center font-14px">Planning, Consulting and Execution to Post – Event Reporting <br> <span class="font-italic">(In-Person/Live Events)</span></h6>
                    <label class="font-italic">Pre-Event Services</label>
                    <ul class="pl-3">
                      <li>Hotel & venue site selection</li>
                      <li>Contract negotiation: artists, talent, suppliers</li>
                      <li>Script design & direct all aspects of business sessions</li>
                      <li>Management of invitation process – Attendance Generation & Telemarketing</li>
                    </ul>
                    <label class="font-italic">On-Site Event Services</label>
                    <ul class="pl-3">
                      <li>Event Day Management & Supervision</li>
                      <li>Registration & accommodation management</li>
                      <li>Food & beverage management</li>
                      <li>Staff management, Production Coordination</li>
                    </ul>
                    <label class="font-italic">Post Event Services</label>
                    <ul class="">
                      <li>Evaluation</li>
                      <li>Comprehensive reporting</li>
                    </ul>
                    <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> -->
                    <!-- <p class="card-text"><small class="text-muted">We also handle other special services that may not involve complete management</small></p> -->
                  </div>
                </div>
                <div class="card d-flex m-auto mb-2" data-aos="fade-left">
                  <img src="<?php echo base_url('assets/image/our_services/pic3.png'); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-left font-italic">We also handle other special services that may not involve complete management</h5>
                    <h5 class="card-title text-center mb-0"><strong>Other Special/ Partial Services</strong></h5>
                    <h6 class="card-title text-center mt-0 font-italic">(In-person/Live Events)</h6>
                    <ul class="pl-3">
                      <li>On-the-Day Event Management</li>
                      <li>Attendance Generation Management</li>
                      <li>Sponsorship Management</li>
                      <li>Registration & accommodation Management</li>
                      <li>Booth set-up and Management</li>
                      <li>Ingress & Egress Management</li>
                      <li>Transportation and Accommodation Management</li>
                      <li>Corporate Giveaways</li>
                      <li>Distribution of gifts to Clients’ Customers</li>
                    </ul>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
              </div>
            </div>
          <!-- </div> -->
            
          <!-- <div class="col-sm-4 no-padding">
            <div class="p-r-40 md-pr-30">
              <h6 class="block-title p-b-5">Marketing Communications Services </h6>
              <p class="m-b-30">Let’s thrive in the New Normal!</p>
              <ul>
                <li>Webinar and Virtual Events Management</li>
                <li>Webinar Platform Integration and Live Streaming and other Technical</li>
                <li>Social Media Management and Ads Design</li>
                <li>Demand Generation</li>
                <li>Leads Generation</li>
                <li>Database Profiling and Telemarketing</li>
                <li>Virtual Events Attendance Generation</li>
                <li>E-gifts and other Simultaneous Logistics Services</li>
              </ul>
            </div>
            <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
          </div>
          <div class="col-sm-4 no-padding">
            <div class="p-r-40 md-pr-30">
              <h6 class="block-title p-b-5">Full Event Management (In-Person/Live Events)</h6>
              <p class="m-b-30">Planning, Consulting and Execution to Post – event Reporting</p>
              <label>Pre-Event Services</label>
              <ul>
                <li>Hotel & venue site selection</li>
                <li>Contract negotiation: artists, talent, suppliers</li>
                <li>Script, design & direct all aspects of business sessions</li>
                <li>Management of invitation process – Attendance Generation & Telemarketing</li>
              </ul>
              <label>On-Site Event Services</label>
              <ul>
                <li>Event Day Management & Supervision</li>
                <li>Registration & accommodation management</li>
                <li>Food & beverage management</li>
                <li>Staff management, Production Coordination</li>
              </ul>
              <label>Post Event Services</label>
              <ul>
                <li>– Evaluation</li>
                <li>– Comprehensive reporting</li>
              </ul>
              <p>We also handle other special services that may not involve complete management</p>
              </p>
            </div>
            <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
          </div>
          <div class="col-sm-4 no-padding">
            <div class="p-r-40 md-pr-30">
              <h6 class="block-title p-b-5">Other Special/ Partial Services</h6>
              <label class="m-b-30">(In-person/Live Events)</label> <br>
                <ul>
                  <li>Event day Management</li>
                  <li>Attendance Generation Management</li>
                  <li>Sponsorship Management</li>
                  <li>Registration & accommodation Management</li>
                  <li>Booth set-up and Management</li>
                  <li>Ingress & Egress Management</li>
                  <li>Transportation and Accommodation Management</li>
                  <li>Corporate Giveaways</li>
                  <li>Distribution of gifts to Client’s Customers</li>
                </ul>
            </div>
          </div> -->

          </div>
          <div id="our-clients" class="mb-5"></div>
        </div>
      </section>

      <!-- END  MAIN CONTENT SECTION -->
      

  



      <!-- BEGIN OUR CLIENTS SECTION -->
      <section class="bg-master-darkest sm-no-margin custom-section" data-pages-bg-image="<?php echo base_url(); ?>assets/tech/assets/images/slider-2.jpg" data-bg-overlay="black" data-overlay-opacity="0.3" data-pages="parallax">
        <div class="container p-b-50">
          <div class="row">
            <div class="col-md-12 col-lg-8 col-lg-offset-2">
              <div class="col-xs-height col-middle">
                <div class="text-center" data-aos="fade-up">
                  <h1 class="text-white col-sm-12 p-b-10" >Our Clients</h1>
                  
                  <p class="text-white m-t-30 m-b-30"> For only three years after its inception (12 Years now), Full Circle has established a niche in the Information Technology 
                    and the Corporate Industry and has become one of the top of mind events agencies that cater not only <br> to IT but also in other fields. </p> 
                  <p class="text-white m-t-30 m-b-30"> The company has gained its Clients’ trusts in terms of quality service and financial capability since then. Not to mention, 
                    the Company is run by well experienced and notable event organizers. </p>
                  <p class="text-white m-t-30 m-b-30"> We also carried over our Clients from previous company that we have worked with which only proves that these Clients have full 
                    trust and confidence in our Team’s service and dedication. </p> 
                  
                  <!-- <a class="page-scroll" href="#contact"><button type="button" class="btn btn-lg btn-baby-pink btn-cons btn-rounded m-t-20">Explore</button></a>
                  <p class="fs-12 font-arial text-white m-t-30"><span class="hint-text">We'll go the extra mile</span> and lend a helping <br> hand just for you.
                  </p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END OUR CLIENTS SECTION -->


      <!-- BEGIN MAIN CONTENT SECTION -->
      <section class="pt-5">
        <div class="container">
        <div class="md-p-l-20 xs-no-padding clearfix">
          <div class="col-sm-12 col-md-12">
            <!-- <h1 class="m-t-5 text-center">Our Clients</h1>
            <h5 class="block-title hint-text text-justify"></h5>
            <h5 class="block-title hint-text text-justify"></h5>
            <h5 class="block-title mb-5 hint-text text-justify"></h5>-->
            <h3 class="block-title p-b-5 text-center pb-5 mb-3" style="font-size:20px;">Here are those who Trust us over the Years!</h3> 
            <h5 class="block-title p-b-5 text-center head-text-diy">THE IT INDUSTRY LEADERS</h5> 
            <div class="row mt-5">
              <div class="col-lg-2 col-4 cisco-mobile"><img src="<?php echo base_url('assets/image/clients/cisco.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4 compu-mobile"><img src="<?php echo base_url('assets/image/clients/computrade_logo.jpg'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-3 col-4 dell-tech-mobile"><img src="<?php echo base_url('assets/image/clients/DellTechnologies.jpg'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-3 col-4 fireeye-mobile"><img src="<?php echo base_url('assets/image/clients/FireEye_logo.png'); ?>" style="width: 85%;display: block;margin-left: auto;margin-right: auto;" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4 fujitsi-mobile"><img src="<?php echo base_url('assets/image/clients/Fujitsu.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <!-- <div class="col-lg-1"></div> -->
              <div class="col-lg-2 col-4 infor-mobile"><img src="<?php echo base_url('assets/image/clients/infor_logo.png'); ?>" style="display: block;margin-left: auto;margin-right: auto;width: 66%;margin-top: 37px;" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-3 col-4 palo-alto-mobile"><img src="<?php echo base_url('assets/image/clients/palo_alto.png'); ?>" style="display: block;margin-left: auto;margin-right: auto;width: 82%;" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4 sap-mobile"><img src="<?php echo base_url('assets/image/clients/SAPLOGO.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-3 col-4 usap-no-mobile"><img src="<?php echo base_url('assets/image/clients/usap_no_tag.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4 pl-0 vmware-mobile" style="margin-left: -8px;"><img src="<?php echo base_url('assets/image/clients/vmware.png'); ?>" class="img-thumbnail border-0" alt=""></div>
            </div>
            <h5 class="block-title mt-5 text-center head-text-diy">Our Clients from the Other Industries</h5>
            <div class="row pt-3 mb-3">
              <div class="offset-lg-2 col-lg-2 col-4"><img src="<?php echo base_url('assets/image/clients/delmonte.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4"><img src="<?php echo base_url('assets/image/clients/intelligencecorp.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4"><img src="<?php echo base_url('assets/image/clients/kisa2.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4"><img src="<?php echo base_url('assets/image/clients/kcc.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="offset-lg-1 col-lg-3 col-4 pr-0"><img src="<?php echo base_url('assets/image/clients/marist.png'); ?>" class="img-thumbnail border-0 float-right" alt=""></div>
              <div class="col-lg-2 col-4 pr-0"><img src="<?php echo base_url('assets/image/clients/phil_dev.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4 pr-0"><img src="<?php echo base_url('assets/image/clients/pnp.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-4 pr-0"><img src="<?php echo base_url('assets/image/clients/karaicon.png'); ?>" class="img-thumbnail border-0" alt=""></div>
            </div>
            <h5 class="block-title p-b-5 text-center head-text-diy">The Other Clients that we have served</h5>
            <div class="row height-155px">
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/amti.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/ags.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/CTI.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/creative_tech.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/checkpoint.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/datacraft.png'); ?>" class="img-thumbnail border-0" alt=""></div>
            </div>
            <div class="row height-155px">
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/fritz_and_macziol.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/incontact.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/first_data.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/jump.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/lamco.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/lenovo.png'); ?>" class="img-thumbnail border-0" alt=""></div>
            </div>
            <div class="row height-155px">
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/macrologic.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob pr-0"><img src="<?php echo base_url('assets/image/clients/microimage.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/nec.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/ngkhai.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/questronix.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-2 col-sm-4 col-4 mod-img-mob"><img src="<?php echo base_url('assets/image/clients/Riverbed.png'); ?>" class="img-thumbnail border-0" alt=""></div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-4 col-4 mod-img-mob right-comp-mobile pr-3"><img src="<?php echo base_url('assets/image/clients/rightcomp.png'); ?>" class="img-thumbnail border-0" style="margin-top: 24px !important;" alt=""></div>
              <div class="col-lg-3 col-sm-4 col-4 mod-img-mob ssi-mobile text-center"><img src="<?php echo base_url('assets/image/clients/SSi.png'); ?>" class="img-thumbnail border-0" alt=""></div>
              <div class="col-lg-3 col-sm-4 col-4 mod-img-mob zenshin-mobile"><img src="<?php echo base_url('assets/image/clients/zenshin.png'); ?>" class="img-thumbnail border-0" alt=""></div>
            </div>
          </div>

            
        

        </div>
        </div>
      </section>
      <!-- END  MAIN CONTENT SECTION -->
      

      <!-- BEGIN FEATURED EVENTS SECTION -->
      <section class="bg-master-featured-events p-b-85 p-t-75" id="featured-events">
        <div class="container" style="background: rgba(121, 38, 96, 0.39);padding: 41px;">
          <div class="md-p-l-20 md-p-r-20 xs-no-padding">
            <div class="row mb-3">
              <div class="col-sm-12 col-md-12 pt-5">
                <h1 class="m-t-5 text-center text-light">Featured Events</h1>
              </div>
              <!-- <div class="col-sm-6 col-md-6 col-lg-12 no-padding xs-p-l-15 xs-p-r-15 text-align-justify">
              <a href="<?php //echo base_url('assets/image/our_team/team_photo_6.jpg'); ?>" data-lightbox="roadtrip">Image #4</a>
              </div> -->
              
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="text-align-justify">
                <div class="md-p-l-5 md-p-t-15 text-light">
                    <p>Every EVENT Is Your Company’s opportunity to get the message across and build relationships. It’s all about making an impression in all
                    Attendees In one place bound by one purpose <strong>— Discover One Brand.</strong></p>  
                    <p>You Don’t Get The Chance To Do This Every Day. So Making An Impact Is Very Important.</p>  
                    <p>This is why Full Circle Events Asia makes sure that you are ahead of the game. <strong>Your Event Is the Platform on which you accomplish goals,
                    whether It’s to generate Leads, close Deal, open doors or cultivate relationships.</strong></p>
                    <p>Whether you are just a Start-Up Company or A long-Established Organization, Full Circle Events Asia makes It Its responsibility to empower you
                    through quality services, <strong>bringing you Full Circle From Conception to Implementation to Evaluation.</strong></p>
                </div>
                  <h5 class="block-title mb-5 hint-text"></h5>
                  <h5 class="block-title mb-5 hint-text"></h5>
                  <h5 class="block-title mb-5 hint-text"></h5>
                  <h5 class="block-title mb-5 hint-text"></h5>
                  <div class="row mb-3">
                    <!-- <div class="col-lg-3" data-aos="flip-up">
                      <img style="object-fit: cover; width: 350px; height: 230px;" src="<?php //echo base_url('assets/image/our_team/team_photo_1.jpg'); ?>" alt="" class="img-thumbnail">
                      <label for="">test</label>
                    </div> -->
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/dell_emc_partner_kickoff_fy17/Dell EMC Partner Kickoff FY17'; ?>'">
                        <img class="card-img-top img-fit-lg" src="<?php echo base_url('assets/image/events/dell_emc_partner_kickoff_fy17/viber_image_2020-11-21_09-21-44.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">Dell EMC Partner Kickoff FY17</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/great_sap_year_end_party/The Great SAP Year-End Party 2019'; ?>'">
                        <img class="card-img-top img-fit-lg" src="<?php echo base_url('assets/image/events/great_sap_year_end_party/viber_image_2020-11-21_09-53-57.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">The Great SAP Year-End Party 2019</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/ibm_technology_conference_and_expo/IBM Technology Conference & Expo'; ?>'">
                        <img class="card-img-top img-fit-lg" src="<?php echo base_url('assets/image/events/ibm_technology_conference_and_expo/13.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">IBM Technology Conference & Expo</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/sap_power_of_hr/SAP Power of HR Roadshow'; ?>'">
                        <img class="card-img-top img-fit-lg" src="<?php echo base_url('assets/image/events/sap_power_of_hr/14.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">SAP Power of HR Roadshow</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/dell_i_am_super_hero_disti_campaign/I Am Dell Superhero Disti Blitz Campaign'; ?>'">
                        <img class="card-img-top img-fit-lg" style="object-position: -1px -30px;height: 250px;" src="<?php echo base_url('assets/image/events/dell_i_am_super_hero_disti_campaign/1.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">I Am Dell Superhero Disti Blitz Campaign</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/fire_eyecyber_defense_live_manila/FireEye Cyber Defense Live, Manila'; ?>'">
                        <img class="card-img-top img-fit-lg" src="<?php echo base_url('assets/image/events/fire_eyecyber_defense_live_manila/viber_image_2020-11-21.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">FireEye Cyber Defense Live, Manila</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/nfor_on_the_road/Infor On the Road 2014'; ?>'">
                        <img class="card-img-top img-fit-lg" style="object-position: -2px 0px;" src="<?php echo base_url('assets/image/events/nfor_on_the_road/viber_image_2020-11-21_09-57-39.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">Infor On the Road 2014</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/cisco_engage_technology_sessions/Cisco Engage – Technology Sessions made fun by Cisco'; ?>'">
                        <img class="card-img-top img-fit-lg" style="object-position: -9px 0px;" src="<?php echo base_url('assets/image/events/cisco_engage_technology_sessions/viber_image_2020-11-.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">Cisco Engage – Technology Sessions made fun by Cisco</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/pnp_10th_founding_anniversary/PNP DICTM 10th Year Founding Anniversary and S.M.A.R.T. Policing Expo 2019'; ?>'">
                        <img class="card-img-top img-fit-lg" src="<?php echo base_url('assets/image/events/pnp_10th_founding_anniversary/10.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">PNP DICTM 10th Year Founding Anniversary and S.M.A.R.T. Policing Expo 2019</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/sap_nights_of_the_villains_year_end_party/SAP Night of the Villains Year-End Party'; ?>'">
                        <img class="card-img-top img-fit-lg" style="object-position: 0px 0px;" src="<?php echo base_url('assets/image/events/sap_nights_of_the_villains_year_end_party/6.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">SAP Night of the Villains Year-End Party</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/phildev_IDEA_symposium/Phildev IDEA Global Entrepreneurship Symposium'; ?>'">
                        <img class="card-img-top img-fit-lg" style="object-position: 0px 0px;" src="<?php echo base_url('assets/image/events/phildev_IDEA_symposium/1.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">Phildev IDEA Global Entrepreneurship Symposium</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                      <div class="card cursor" onclick="window.location.href = '<?php echo base_url() . 'featured-events/events/ctp_it_infrastructure_summit/CTP IT Infrastructure Summit'; ?>'">
                        <img class="card-img-top img-fit-lg" src="<?php echo base_url('assets/image/events/ctp_it_infrastructure_summit/10.jpg'); ?>" alt="Card image cap">
                        <div class="card-body pb-1 pt-1">
                          <h5 class="card-title text-center thumb-text">CTP IT Infrastructure Summit</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="d-flex justify-content-center">
                    <button type="button" onclick="window.location.href='<?php echo base_url('featured-events'); ?>'" class="btn btn-baby-pink font-montserrat all-caps fs-12 pull-right xs-pull-left">Show More</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END FEATURED EVENTS SECTION -->
      
    
  
    <!-- END NETWORK SECTION -->

      
      
      
