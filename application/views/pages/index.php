<!------- Body ------->
      <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-6 align-self-center">
                    <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                      <div class="row">
                        <div class="col-lg-12">
                          <h6>The Gender Equality Forum</h6>
                          <h2>Empowering Minds, Inspiring Action</h2>
                          <p>Through diverse and informative discussions, Equally invites you to actively engage in the ongoing struggle for a just and equitable society for all individuals, regardless of gender.</p>
                        </div>
                        <div class="col-lg-12">
                          <div class="btn_landing">
                            <a href="<?php echo base_url() ?>#mainForum">Explore</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                      <img src="assets/images/Community-group.svg" alt="" style="max-width:450px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
       <div class="body-content" id="mainForum">
          <div class="forum_title">
            <h1>Discussion Forum</h1>
          </div>
          <div class="container">
            <div class="row">
            <!------- Equally Forum Post ------->
              <div>
                <!--Load Singe Post From View-->
                <?php $this->load->view('pages/section/topic_list'); ?>
                </div>
              </div>
              <!------- Equally Forum Post End ------->
            </div>
            <!------- Team Section ------->
            
            <section id="equally-team">
              <div class="row-team">
                <h1>Equally's Team</h1>
              </div>
              <div class="row-team">
                <div class="column-team">
                  <div class="card-team">
                    <div class="img-container">
                      <img src="assets/images/team-rizky.jpg" />
                    </div>
                    <h3>Muhammad Rizky Prayoga</h3>
                    <p>201401024</p>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: black;" href="https://github.com/mrzkypryg" role="button"><i class="fab fa-github"></i></a> 
                  </div>
                </div>
                
                <div class="column-team">
                  <div class="card-team">
                    <div class="img-container">
                      <img src="assets/images/team-sitti.jpg" />
                    </div>
                    <h3>Sitti Safiatun Naja Koto</h3>
                    <p>201401015</p>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: black;" href="" role="button"><i class="fab fa-github"></i></a> 
                  </div>
                </div>

                
                <div class="column-team">
                  <div class="card-team">
                    <div class="img-container">
                      <img src="assets/images/team-syaripa.jpg" />
                    </div>
                    <h3>Syaripa Anum Nasution</h3>
                    <p>201401018</p>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: black;" href="https://github.com/Kgustipartsani" role="button"><i class="fab fa-github"></i></a> 
                  </div>
                </div>
              </div>
           </section>
        <!------- Team Section End ------->
  	  
  </div><!------- Body Content End ------->
