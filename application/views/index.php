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

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">CAMP POE </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">ROOMS</a></li>
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
              home page   slider
       =================================================--------->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner fullheight" role="listbox">
                <div class="item active">
                    <img src="<?php echo base_url(); ?>/resoures/img/1.png" alt="CAMP POE HOTEL">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>/resoures/img/2.png" alt="CAMP POE HOTEL">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>/resoures/img/3.png" alt="CAMP POE HOTEL">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>/resoures/img/4.png" alt="CAMP POE HOTEL">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!--             Controls 
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>-->
        </div>


        <!----=====================================================
              home page   slider  end
       =================================================--------->

        <!----=====================================================
              availability checking
       =================================================--------->
        <!-- Reservation form -->
        <section id="reservation-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">         
                        <form class="form-inline reservation-horizontal clearfix" role="form" method="post" action="php/reservation.php" name="reservationform" id="reservationform">
                            <!-- Error message -->
                            <div id="message"></div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <!--                <label for="email" accesskey="E">E-mail</label>-->
                                        <input name="email" type="text" id="email" value="" class="form-control" placeholder="Please enter your E-mail"/>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <!--                <label for="room">Room Type</label>-->
                                        <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                        <select class="form-control" name="room" id="room">
                                            <option selected="selected" disabled="disabled">Select a room</option>
                                            <option value="Single">Single room</option>
                                            <option value="Double">Double Room</option>
                                            <option value="Deluxe">Deluxe room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <!--                <label for="checkin">Check-in</label>-->
                                        <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                        <i class="fa fa-calendar infield"></i>
                                        <input name="checkin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <!--                <label for="checkout">Check-out</label>-->
                                        <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                        <i class="fa fa-calendar infield"></i>
                                        <input name="checkout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="">
                                        <div class="guests-select">
                                            <!--                  <label>Guests</label>-->
                                            <i class="fa fa-user infield"></i>
                                            <div class="total form-control" id="test">1</div>
                                            <div class="guests">
                                                <div class="form-group adults">
                                                    <label for="adults">Adults</label>
                                                    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                    <select name="adults" id="adults" class="form-control">
                                                        <option value="1">1 adult</option>
                                                        <option value="2">2 adults</option>
                                                        <option value="3">3 adults</option>
                                                    </select>
                                                </div>
                                                <div class="form-group children">
                                                    <!--                      <label for="children">Children</label>-->
                                                    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                    <select name="children" id="children" class="form-control">
                                                        <option value="0">0 children</option>
                                                        <option value="1">1 child</option>
                                                        <option value="2">2 children</option>
                                                        <option value="3">3 children</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-default button-save btn-block">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!--reservation-form-->


        <!----=====================================================
              availability checking end
       =================================================--------->

        <!----=====================================================
             footer image
      =================================================--------->

        <section id="fotter-img" class="fullheight">
            <div class="container">
                <div class="row">
                    <h1 style="color: white;">Saints have no moderation, nor do poets, just exuberance. <span style="color: olive;">- Anne Sexton</span></h1>
                </div>  <!--row-->                              
            </div>      <!--container-->                    
        </section><!--fotter-img-->

        <!----=====================================================
              footer image end
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



