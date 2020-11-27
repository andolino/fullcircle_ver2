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
              <div class="col-lg-3 col-md-6 lh-3p6">
                <i class="fas fa-phone"></i> &nbsp; +63919 0059768 768
              </div>
              <div class="col-lg-5 col-md-6 lh-3p6">
                <i class="fas fa-envelope"></i> &nbsp; events@fullcircle-asia.com
              </div>
              <!-- <div class="col-lg-5 col-md-6">
                <i class="fas fa-map-marker-alt"></i> &nbsp; address 
              </div> -->
              <div class="social-top col-lg-4 col-md-6 text-right lh-3p6">
                <i class="fab fa-facebook font-14px"></i> &nbsp;&nbsp;
                <i class="fab fa-linkedin font-14px"></i> &nbsp;&nbsp;
                <i class="fab fa-instagram font-14px" style="margin-right: 21px;"></i>
              </div>
            </div>
            <ul class="menu p-0">
              <li>
                <a class="page-scroll" href="#page-top" class="active">Home </a>
              </li>
              <li>
                <a class="page-scroll" href="#about">About Us</a>
              </li>
              <li>
                <a class="page-scroll" href="#services">Our Services </a>
              </li>
              <li>
                <a class="page-scroll" href="#contact">Our Clients</a>
              </li>
              <li>
                <a class="page-scroll" href="#contact">Our Clients</a>
              </li>
              <li>
                <a class="page-scroll" href="#contact">Our Team</a>
              </li>
              <li>
                <a class="page-scroll" href="#contact">Featured Events</a>
              </li>
              <li>
                <a class="page-scroll" href="#contact">Reached Us</a>
              </li>
            </ul>
            
            <!-- BEGIN COPYRIGHT FOR MOBILE -->
            <div class="font-arial m-l-35 m-r-35 m-b-20 visible-sm visible-xs m-t-20">
            	<!-- Text Desc Nav
              <p class="fs-11 no-margin small-text p-b-20">Exclusive only at ,Themeforest. See Standard licenses & Extended licenses
              </p>
              -->
              <p class="fs-11 small-text muted">Copyright &copy; 2020 Techturf's Technology Services</p>
            </div>
            <!-- END COPYRIGHT FOR MOBILE -->
          </div>
          <!-- END MENU ITEMS -->
        </div>
      </div>
    </nav>
    <!-- END HEADER -->
    <div class="page-wrappers">
  
    
      <!-- BEGIN NETWORK SOLUTIONS SECTION -->
      <section class="bg-master-lightest p-b-85 p-t-75 " id="services" style="background-image: url('../../../assets/image/slider/featured-events-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;height: 100%;">
        <div class="">
          <div class="md-p-l-20 md-p-r-20 xs-no-padding">
            <div class="row mt-5">
              <h1 class="m-t-5 w-100 text-center text-light pt-5 pb-5"><?php echo $desc; ?></h1>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="text-center">
                    
                  <!-- <h5 class="block-title mb-5  text-center text-light">Supported by enthusiastic and highly skilled Team Members with impressive and collective Industry skills and experience.</h5> -->
                  <div class="row mb-3">
                    <!-- <div class="col-lg-3" data-aos="flip-up">
                      <img style="object-fit: cover; width: 350px; height: 230px;" src="<?php //echo base_url('assets/image/our_team/team_photo_1.jpg'); ?>" alt="" class="img-thumbnail">
                      <label for="">test</label>
                    </div> -->
                    <?php for ($i=0; $i < count($pics); $i++) { ?>
                      <div class="col-lg-3 justify-content-center d-flex" data-aos="flip-up">
                        <a href="<?php echo base_url('assets/image/'.$events.'/'.$folder.'/'.$pics[$i]); ?>" data-lightbox="roadtrip">
                          <div class="card cursor">
                            <img class="card-img-top img-fit-lg" src="<?php echo base_url('assets/image/'.$events.'/'.$folder.'/'.$pics[$i]); ?>" alt="Card image cap">
                          </div>
                        </a>
                      </div>
                    <?php } ?>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END NETWORK SOLUTIONS SECTION -->
      
      

      
      <!-- START GOOGLE MAP -->
      <section class="container-fluid  no-padding no-overflow">
        <!-- Map -->
        <div class="row">
          <div class="col-sm-12">
            <div id="google-map" class="full-width demo-map gradient-overlay no-overflow"></div>
          </div>
        </div>
      </section>
      <!-- END GOOGLE MAP -->
    </div>
      
      
      
    