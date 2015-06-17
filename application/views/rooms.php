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
        <nav class="navbar navbar-default navbar-fixed-topa">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ROOMS<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>index.php/room/room_one">Suite 1</a></li>
                                <li><a href="#">Suite 2</a></li>
                                <li><a href="#">Suite 3</a></li>
                                <li><a href="#">Suite 4</a></li>
                                <li><a href="#">Suite 5</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Studios</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Poolside Bungalows</a></li>
                            </ul>
                        </li>
                        <li><a href="#">THE CAMP</a></li>
                        <li><a href="#">TEAM POE</a></li>
                         <li><a href="#">SHOP</a></li>
                        <li><a href="#">PHOTOS</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">BOOK NOW</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!----=====================================================
                  end navigation
        =================================================--------->

        <!----=====================================================
               first tow rooms
       =================================================--------->
        <div class="main">
            
            <section id="rooms_cover">
               <div class="container">
                   <div class="row">
                       <h1>Best Rooms in Sri Lanka</h1>
                   </div>
               </div>
                
            </section><!--rooms cover-->

            <section id="first-room">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6" >
                            <a href="">
                                <div id="room-1">   
                                    <h4>SUITE 1</h4>
                                      <div class="mas wow fadeIn" data-wow-duration="1500ms">
                                         <div class="info wow fadeIn" data-wow-duration="1500ms">
                                        <h5 class=" wow  fadeInLeft" data-wow-duration="500ms">SUITE 1</h5>
                                        <span class=" wow fadeInLeft" data-wow-duration="500ms">
                                            Lorem ipsum dolor sit amet,</br>
                                            consectetur adipisicing elit. </br>
                                            Tenetur officia soluta veniam</br>
                                            non doloribus doloremque,<a href="">See More</a>
                                        </span>
                                    </div> 
                                      </div>                       
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="">
                                <div id="room-2">
                                 <div class="mas wow fadeIn" data-wow-duration="1500ms">
                                        <h4>SUITE 2</h4> 
                                    <div class="info wow fadeIn" data-wow-duration="1500ms">
                                        <h5 class=" wow  fadeInLeft" data-wow-duration="500ms">SUITE 2</h5>
                                        <span class=" wow  fadeInLeft" data-wow-duration="700ms">
                                            Lorem ipsum dolor sit amet,</br>
                                            consectetur adipisicing elit. </br>
                                            Tenetur officia soluta veniam</br>
                                            non doloribus doloremque,<a href="">See More</a>
                                        </span>
                                    </div>  
                                 </div>                          
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section><!--first-two--->
            
            <section id="second-room">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                                 <a href="">
                                <div id="room-3">
                                 <div class="mas wow fadeIn" data-wow-duration="1500ms">
                                        <h4>SUITE 2</h4> 
                                    <div class="info wow fadeIn" data-wow-duration="1500ms">
                                        <h5 class=" wow  fadeInLeft" data-wow-duration="500ms">SUITE 2</h5>
                                        <span class=" wow  fadeInLeft" data-wow-duration="700ms">
                                            Lorem ipsum dolor sit amet,</br>
                                            consectetur adipisicing elit. </br>
                                            Tenetur officia soluta veniam</br>
                                            non doloribus doloremque,<a href="">See More</a>
                                        </span>
                                    </div>  
                                 </div>                          
                                </div>
                            </a>
                          </div>
                          </div>
                         </div>
                </section><!--second-room--->

            <section id="thrd-room">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4" >
                            <a href="">
                                <div id="room-4">
                              <div class="mas wow fadeIn" data-wow-duration="1500ms">
                                        <h4>SUITE 4</h4> 
                                    <div class="info wow fadeIn" data-wow-duration="1500ms">
                                        <h5 class=" wow  fadeInLeft" data-wow-duration="500ms">SUITE 4</h5>
                                        <span class=" wow  fadeInLeft" data-wow-duration="700ms">
                                            Lorem ipsum dolor sit amet,</br>
                                            consectetur adipisicing elit. </br>
                                            Tenetur officia soluta veniam</br>
                                            ,<a href="">See More</a>
                                        </span>
                                    </div> 
                                 </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-8">
                            <a href="">
                                <div id="room-5">
                                  <div class="mas wow fadeIn" data-wow-duration="1500ms">
                                        <h4>SUITE 5</h4> 
                                    <div class="info wow fadeIn" data-wow-duration="1500ms">
                                        <h5 class=" wow  fadeInLeft" data-wow-duration="500ms">SUITE 5</h5>
                                        <span class=" wow  fadeInLeft" data-wow-duration="700ms">
                                            Lorem ipsum dolor sit amet,</br>
                                            consectetur adipisicing elit. </br>
                                            Tenetur officia soluta veniam</br>
                                            non doloribus doloremque,<a href="">See More</a>
                                        </span>
                                    </div>  
                                  </div>   
                                </div>
                            </a>
                        </div>
                    </div>
                </div>           
            </section><!--thrd-room--->

            <section id="fourth-room">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6" >
                            <a href="">
                                <div id="room-6">
                                  <div class="mas wow fadeIn" data-wow-duration="1500ms">
                                        <h4>SUITE 6</h4> 
                                    <div class="info wow fadeIn" data-wow-duration="1500ms">
                                        <h5 class=" wow  fadeInLeft" data-wow-duration="500ms">SUITE 6</h5>
                                        <span class=" wow  fadeInLeft" data-wow-duration="700ms">
                                            Lorem ipsum dolor sit amet,</br>
                                            consectetur adipisicing elit. </br>
                                            Tenetur officia soluta veniam</br>
                                            non doloribus doloremque,<a href="">See More</a>
                                        </span>
                                    </div>  
                                  </div>                          
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="">
                                <div id="room-7">
                                 <div class="mas wow fadeIn" data-wow-duration="1500ms">
                                        <h4>SUITE 7</h4> 
                                    <div class="info wow fadeIn" data-wow-duration="1500ms">
                                        <h5 class=" wow  fadeInLeft" data-wow-duration="500ms">SUITE 7</h5>
                                        <span class=" wow  fadeInLeft" data-wow-duration="700ms">
                                            Lorem ipsum dolor sit amet,</br>
                                            consectetur adipisicing elit. </br>
                                            Tenetur officia soluta veniam</br>
                                            non doloribus doloremque,<a href="">See More</a>
                                        </span>
                                    </div>  
                                 </div>                              
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section><!--fourth-room--->

        </div><!--main-->


        <!----=====================================================
                first tow rooms end
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
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery ui-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- allscript-->
        <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>

          
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



