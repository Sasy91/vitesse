<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Page Preloading Effect | Demo 2</title>
		<meta name="description" content="Page Preloading Effect: Re-creating the effect seen on fontface.ninja" />
		<meta name="keywords" content="page loading, effect, initial, logo, sliding, web design, css animation, transform" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resoures/loader/css/effect2.css" />
		<script src="<?php echo base_url(); ?>resoures/loader/js/modernizr.custom.js"></script>
		
		<?php include_once './resoures/imports/baseimports.php'; ?>
	</head>
	
	<body class="demo-2">
		<div id="ip-container" class="ip-container">
			<!-- initial header -->
			<header class="ip-header">
				<h1 class="ip-logo">
					<div class="container">
					    <div class="row " style=" text-align: center;">
					       <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/IMG_1089.jpg" alt=""> 
					    </div>
					</div>
				</h1>
				<div class="ip-loader">
					<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
						<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					</svg>
				</div>
			</header>
			<!-- top bar -->
	
			<!-- main content -->
		 <?php include_once './resoures/imports/temp_header.php'; ?>
        <div  id="camp_poe">


            <div class="hotel_baner fullheight">
                <img src="<?php echo base_url(); ?>/resoures/img/covers/1.png" alt="...">
            </div>

            <section id="main_info"> 
                <div class="container">
                    <div class="row">
                        <div id="intro">
<!--                            <div class="col-sm-6">-->
                                <div class="discrip">
                                <h3>Inspired by the arts of surfing and yoga,
                                  our unique Sri Lankan retreat aims to capture
                                  this poetry of movement in a single word <span>"Poe"</span></h3>
                                  
                                <p>Located on the Southern Coast of the island with consistent swells running 
                                 throughout the year, Poe resides in the sleepy village of Madiha, 
                                 a surfing haven with a perfect left and a long mellow right hander 
                                 peeling on your doorstep. As well as this, there are several long 
                                 beach breaks close by, providing ideal learning conditions. A short 
                                 ride north will take to you to the more renowned  breaks such as Lazy
                                 Lefts, Rams Right and Sticks, giving you options to surf 
                                 a different break each day. </p>
                                 
                                   <p>Located on the Southern Coast of the island with consistent swells running 
                                 throughout the year, Poe resides in the sleepy village of Madiha, 
                                 a surfing haven with a perfect left and a long mellow right hander 
                                 peeling on your doorstep. As well as this, there are several long 
                                 beach breaks close by, providing ideal learning conditions. A short 
                                 ride north will take to you to the more renowned  breaks such as Lazy
                                 Lefts, Rams Right and Sticks, giving you options to surf 
                                 a different break each day. </p>
                                 
                                 <h2>so surf and live life free, 
                                        smile and be happy, 
                                        let nature be, 
                                         <span>poe</span> is the key...............
                                        </h2>
                                </div>
                            </div>
<!--
                            <div class="col-sm-6">
                                  <div class="word">
                                <h4>“NOTHING BEHIND ME, EVERYTHING AHEAD OF ME, AS IS EVER SO ON THE ROAD.” ― JACK KEROUAC</h4>
                                </div>
                             </div>
-->
                        </div>
                    </div>
                </section>


                <section id="ground">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 ">
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
                            <div class="col-sm-6 hidden-xs">
                                <div class="ground-img ">
                                    <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/hotel/camp-poe-ground.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--GROUNDS-->
                
                        
            

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
                            <div class="lobby-img ">
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
                            <div class="fool-img ">
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
        <?php include_once './resoures/imports/temp_footer.php'; ?>



        <!-- jquery-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery-1.11.0.min.js"></script>
        <!-- bootstrap-->
        <script src="<?php echo base_url(); ?>/resoures/js/bootstrap.min.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.sticky.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/wow.min.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.nicescroll.min.js"></script>
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
		</div><!-- /container -->
		<script src="<?php echo base_url(); ?>resoures/loader/js/classie.js"></script>
		<script src="<?php echo base_url(); ?>resoures/loader/js/pathLoader.js"></script>
		<script src="<?php echo base_url(); ?>resoures/loader/js/main.js"></script>
<!--
		<script src="js/classie.js"></script>
		<script src="js/pathLoader.js"></script>
		<script src="js/main.js"></script>
-->
	</body>
</html>