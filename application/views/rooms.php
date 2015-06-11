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
        <!--		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />-->

        <!-- CSS
        ================================================== -->
        <!-- Fontawesome Icon font -->
        <?php include_once './resoures/imports/baseimports.php'; ?>

    </head>

    <body id="body">

        <!----=====================================================
                    navigation
        =================================================--------->
        <nav class="navbar navbar-default">
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
                    <li><a href="#">HOTEL</a></li>
                    <li><a href="#">PRIVATE EVENTS</a></li>
                    <li><a href="#">PHOTOS</a></li>
                    <li><a href="#">SHOP</a></li>
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
               
           <section id="first-room">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-sm-6" id="room-1">
                          <a href=""></a>
                      </div>
                      <div class="col-sm-6"  id="room-1">
                          <a href=""></a>
                      </div>
                  </div>
              </div>
               
           </section><!--first-two--->
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
        <!-- jquery ui-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- allscript-->
        <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>
        <!-- home script-->
        <script src="<?php echo base_url(); ?>/resoures/js/homescript.js"></script>

        <!----==============================
              end      script
          ----------------------------------> 
    </body>

</html>



