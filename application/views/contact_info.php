<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">
        
        <meta name="author" content="CAMP POE SRI LANKA">
        
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       
         <title>CAMP POE | Room One</title>

        <!-- Mobile Specific Meta
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="<?php echo base_url(); ?>resoures/loader/js/modernizr.custom.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resoures/loader/css/effect2.css" />


        <?php include_once './resoures/imports/baseimports.php'; ?>
    </head>

    <body>
        <div id="ip-container" class="ip-container">
            <!-- initial header -->
            <header class="ip-header">
                <div class="ip-loader">
                    <div class="container">
                        <div class="row " style=" text-align: center;">
                            <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/logo.png" alt=""> 
                        </div>
                    </div>
                    <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                    <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                    <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                    </svg>
                </div>
            </header>
            <?php include_once './resoures/imports/temp_header.php'; ?>
           
            <div id="contact_info">
                <div class="cart_baner">
                    <img src="<?php echo base_url(); ?>/resoures/img/covers/cart_baner.png" alt="...">
                </div> 
                
                
               
                <section id="contact-page">
        <div class="container">
            <div class="center">        
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="form-on">
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-6 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                      
                    </div>
                    
                    </form>
                    </div>/<!--form-on-->
                    <div class="col-sm-3 col-sm-offset-1">
                       <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                       
                    </div>
         
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
               
               
                <!--=========================================
                      map
                =======================================---->
                    <section id="map">
                        <!-- Google Map -->
                    <div class="google-map wow fadeInDown" data-wow-duration="500ms">
                        <div id="map-canvas"></div>
                    </div>	
			         <!-- /Google Map -->
                    </section><!--map-->
                
                <!--=========================================
                      end map
                =======================================---->
                
                
            </div><!--contact_info-->
            
            
       
            
             
              
                </div><!--ip container-->

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
            <script src="<?php echo base_url(); ?>/resoures/js/jquery.nicescroll.min.js"></script>
            <!-- jquery sticky-->
            <script src="<?php echo base_url(); ?>/resoures/js/jquery.parallax-1.1.3.js"></script>
            <!-- jquery ui-->
            <script src="<?php echo base_url(); ?>/resoures/js/jquery-ui-1.10.4.custom.min.js"></script>
            <!-- allscript-->
		    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
            <!-- Google Map API -->
            <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>

            <script>
                wow = new WOW({
                    animateClass: 'animated',
                    offset: 120
                });
                wow.init();

            </script>

        
        <script src="<?php echo base_url(); ?>resoures/loader/js/classie.js"></script>
        <script src="<?php echo base_url(); ?>resoures/loader/js/pathLoader.js"></script>
        <script src="<?php echo base_url(); ?>resoures/loader/js/main.js"></script>
        <!----==============================
              end      script
          ----------------------------------> 
    </body>

</html>



