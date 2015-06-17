<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">
        <meta name="author" content="CAMP POE SRI LANKA">
        <title>CAMP POE</title>

        <!-- Mobile Specific Meta
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <!--        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />-->

        <!-- CSS
        ================================================== -->
        <!-- Fontawesome Icon font -->
        <?php include_once './resoures/imports/baseimports.php'; ?>

    </head>

    <body id="body">

        <!----=====================================================
                    navigation
        =================================================--------->
    <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body">Blue</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#portfolio">portfolio</a></li>
                        <li><a href="#testimonials">Testimonial</a></li>
                        <li><a href="#price">price</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>

        <!----=====================================================
                  end navigation
        =================================================--------->

        <!----=====================================================
               camp poe info
       =================================================--------->
       
       <div  id="camp_poe">
       
           
         <div class="hotel_baner fullheight">
            <img src="<?php echo base_url(); ?>/resoures/img/covers/1.png" alt="...">
        </div>
           
        <section id="main_info">
               <div class="container-fluid">
                   <div class="row">
                         <div id="intro">
                                     <div class="col-sm-6">
                              <h3>PROPERTY</h3>
                              <p>Created in honor of the patron saint of music and poetry,
                               the Saint Cecilia takes inspiration from the great era of
                               the late 1960’s and early 1970’s when a revolution of
                               rock and roll and beat poetry overran the hallowed 
                               halls of established convention. We pay tribute to 
                               the great creative legacy of our revolutionary idols
                               and to the spirit of the artist that lies within us all.</p>
                       </div>
                       <div class="col-sm-6">
                           <h4>“NOTHING BEHIND ME, EVERYTHING AHEAD OF ME, AS IS EVER SO ON THE ROAD.” ― JACK KEROUAC</h4>
                       </div>
                         </div>
                   </div>
               </div>
           
           
           <section id="ground">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-6">
                           <div class="ground-info">
                               <h3>GROUNDS</h3>
                               <p>
                                    Each of the five suites, six poolside bungalows,
                                    and three studios embodies an equal love for the
                                    elegance of old world luxury and the irreverence
                                    of our muses – The Stones, Bill Burroughs, Anne Sexton,
                                    Hunter S. Thompson among them. The secluded property 
                                    and lush grounds are open only to hotel guests, thereby
                                    offering a unique sense of privacy situated steps
                                    away from the heart of South Austin.
                               </p>
                           </div><!--ground-info-->
                       </div>
                       <div class="col-sm-6">
                           <div class="ground-img">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-ground.jpg" alt="">
                           </div>
                       </div>
                   </div>
               </div>
           </section><!--GROUNDS-->
           </section><!--main_info-->
            
            <section id="hotel-map">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="ground-logo">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-logo.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="ground-map">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-map.jpg" alt="">
                           </div>
                        </div>
                    </div>
                </div>
            </section><!--hotel-map-->
            
            <section id="lobby">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                             <div class="ground-map">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-lobby.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-sm-6">
                                  <div class="ground-lobby">
                               <h3>LOBBY</h3>
                               <p>
                                     The hotel lobby is located next to the lounge
                                     at the center of the property, and offers a 
                                     variety of guest amenities and opportunities.
                                     The lobby is also home to the Saint Cecilia’s 
                                     retail store, which carries a selection of items
                                     from travel necessities to souvenirs, including
                                     products by Saint Rita, Santa Maria Novella and 
                                     a variety of local and international craftspeople.
                                     Some items are available exclusively in the lobby 
                                     store, like our limited edition Roux St. James 
                                     fragrances made with flowers culled from the 
                                     hotel garden. 
                               </p>
                           </div><!--ground-info-->

                        </div>
                    </div>
                </div>
            </section><!--lobby-->
              
              <section id="lobby-2">
                  <div class="container-fluid">
                      <div class="row">
                                 <div class="col-sm-8">
                            <div class="ground-logo">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-lobby-2.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ground-map">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-lobby-3.jpg" alt="">
                           </div>
                        </div>
                      </div><!--row-->
                  </div><!--container-->
              </section><!--lobby-2-->
              
              <div id="pool-and-arbor">
                  <div class="container-fluid">
                      <div class="row">
                               <div class="col-sm-6">
                                  <div class="fool-info">
                               <h3>POOL & ARBOR</h3>
                               <p>
                                     Saint Cecilia’s crowning jewel is its 50 foot
                                      heated lap pool which is open to guests
                                       twenty four hours a day. The Saint Cecilia
                                        also offers seated poolside dining under the
                                         arbor for breakfast and light fare. 
                               </p>
                           </div><!--ground-info-->

                        </div>
                           <div class="col-sm-6">
                            <div class="ground-map">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-map-pool.jpg" alt="">
                           </div>
                        </div>
                          
                      </div>
                  </div>
              </div><!--pool-and-arbor-->
              
              <section id="pool-and-arbor-two">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-sm-4">
                            <div class="ground-logo">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-map-pool-two.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="ground-map">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-map-pool-three.jpg" alt="">
                           </div>
                        </div>
                      </div>
                  </div>
              </section><!--pool-and-arbor-->
            
            
             </div><!--camp_poe-->
       

        <!----=====================================================
               camp poe info end
       =================================================--------->

        <!----=====================================================
                fotter
        =================================================--------->

        <section id="fotter">
            <div id="container">
                <div class="row">
                         
                </div><!--row-->
            </div><!--container-->
        </section><!--fotter-->


        <!----=====================================================
                end fotter
         =================================================--------->
         
          <!----=====================================================
                hotel info
         =================================================--------->
         
          
         
          <!----=====================================================
               hotel info end  
         =================================================--------->

        <!----==============================
                  script
        ----------------------------------> 
        <!-- jquery-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery-1.11.0.min.js"></script>
        <!-- bootstrap-->
        <script src="<?php echo base_url(); ?>/resoures/js/bootstrap.min.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.sticky.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/wow.min.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.nicescroll.min.js"></script>
                <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.singlePageNav.min"></script>
        <!-- jquery ui-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- allscript-->
        <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>
        <!-- home script-->
          
         <script>
                wow = new WOW({
               animateClass: 'animated',
               offset: 120
                     });
               wow.init();

        </script>


        <!----==============================
              end      script
          ----------------------------------> 
    </body>

</html>



