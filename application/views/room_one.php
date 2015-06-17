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
      header id="navigation" class="navbar-fixed-top">
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
                    <span class="navbar-brand">
                        <a href="#body">
                            <img src="<?php echo base_url(); ?>/resoures/img/camp_poe.png" alt="Kasper Logo">
                        </a>
                    </span>
                    <!-- /logo -->

                    </div>

                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                             <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ROOMS<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Suite 1</a></li>
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
                    </nav>
                    <!-- /main nav -->
                </div>

            </div>
        </header>

        <!----=====================================================
                  end navigation
        =================================================--------->

        <!----=====================================================
               rooms one cover
       =================================================--------->
                 <div id="room_one">
                         <div class="room_baner fullheight">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/room_one/room_one_1.jpg" alt="">
                         </div>
                


        <!----=====================================================
                   rooms one cover end
        =================================================--------->
        
        <!----=====================================================
                   first tow image and checkin
        =================================================--------->
            
               <div id="room_one_first">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                 <div class="first-img">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/room_one/room_one_2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="second-img">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/room_one/room_one_3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                   <div class="room-info">
                                       <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Molestiae ratione dolores labore maiores est, nihil, ducimus
                                         magnam earum ad quod odit delectus dolorem quidem voluptates 
                                         natus odio nostrum vero? Fugit.lorem
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Molestiae ratione dolores labore maiores est, nihil, ducimus
                                         magnam earum ad quod odit delectus dolorem quidem voluptates 
                                         natus odio nostrum vero? Fugit.lore
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Molestiae ratione dolores labore maiores est, nihil, ducimus
                                         magnam earum ad quod odit delectus dolorem quidem voluptates 
                                         natus odio nostrum vero? Fugit.lorem
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Molestiae ratione dolores labore maiores est, nihil, ducimus
                                         magnam earum ad quod odit delectus dolorem quidem voluptates 
                                         natus odio nostrum vero? Fugit.lore</P>
                                   </div>
                                   <div class="row">
                                      <form action="">
                                       <div class="col-sm-6">
                                             <div class="form-group">
                                                <input type="text" class="form-control" id="datepicker_1" placeholder="CHECK IN">
                                             </div>
                                      <select class="form-control">
                                            <option value="0">ADULTS</option>
                                            <option value="1">1 adult</option>
                                            <option value="2">2 adults</option>
                                            <option value="3">3 adults</option>
                                            <option value="1">4 adult</option>
                                            <option value="2">5 adults</option>
                                            <option value="3">6 adults</option>
                                            <option value="3">7 adults</option>
                                            <option value="1">8 adult</option>
                                            <option value="2">9 adults</option>
                                            <option value="3">10 adults</option>
                                      </select>
                                       </div>
                                       <div class="col-sm-6">
                                           <div class="form-group">
                                                <input type="text" class="form-control" id="datepicker_2" placeholder="CHECK IN">
                                            </div>
                                        <select class="form-control">
                                            <option value="0"> CHILDREN</option>
                                            <option value="1">1 CHILD</option>
                                            <option value="2">2  CHILDREN</option>
                                            <option value="3">3  CHILDREN</option>
                                            <option value="1">4  CHILDREN</option>
                                            <option value="2">5  CHILDREN</option>
                                            <option value="3">6  CHILDREN</option>
                                            <option value="3">7  CHILDREN</option>
                                            <option value="1">8  CHILDREN</option>
                                            <option value="2">9  CHILDREN</option>
                                            <option value="3">10  CHILDREN</option>
                                   
                                        </select>                                     
                                    </div>                                      
                                       </form><!--form-->
                                   </div>
                            </div>
                        </div><!--row-->
                    </div><!--container-fluid-->
               </div><!--room_one_first-->
        
        <!----=====================================================
                   first tow image and checkin end
        =================================================--------->
        
        <!----=====================================================
                   map and next two images
        =================================================--------->
                    <div id="room_one_second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                 <div class="first-thrd">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/room_one/room_one_4.jpg" alt="">
                                </div>
                                </div>
                               <div class="col-sm-3">
                                 <div class="first-fourth">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/room_one/room_one_5.png" alt="">
                                </div>
                                  </div>
                                   <div class="col-sm-3">
                                 <div class="first-fifth">
                               <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/room_one/room_one_6.jpg" alt="">
                                </div>
                            </div>
                            </div>
                            </div>
                    </div><!--room_one_first-->
        <!----=====================================================
                    map and next two images end
        =================================================--------->
        
                   
      <!----=====================================================
                    last two images
        =================================================--------->
                       <div id="room_one_thrd">
                           <div class="container-fluid">
                               <div class="row">
                                <div class="col-sm-4">
                                 <div class="first-six">
                                    <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/room_one/room_one_7.jpg" alt="">
                                  </div> 
                               </div>
                               <div class="col-sm-8">
                                 <div class="first-six">
                                    <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/room_one/room_one_8.jpg" alt="">
                                  </div> 
                               </div>
                               </div><!--row-->
                           </div><!--CONTAINE-->
                       </div><!--room_one_thrd-->
        <!----=====================================================
                    last two images end
        =================================================--------->
                 </div><!--room_one-->


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



