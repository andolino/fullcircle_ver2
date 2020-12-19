
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
      
      
      
    