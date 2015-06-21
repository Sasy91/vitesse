<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">
        <meta name="author" content="CAMP POE SRI LANKA">
        <title>CAMP POE | Room One</title>

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

        <!--Header Import-->

        <?php include_once './resoures/imports/temp_header.php'; ?>
        <div class="container" style="margin-top: 100px;">
            <h2>Available Rooms</h2>

            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="<?php echo base_url(); ?>resoures/img/rooms/5_samll.png" alt="Media Object">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><span style="font-size: 24px;">Suit Number One</span></h4>
                    <span style="font-size: 28px;"><i class="fa fa-dollar"></i>&nbsp;&nbsp;200,99</span><br>
                    This is some sample text. This is some sample text. 
                    This is some sample text. This is some sample text.
                    This is some sample text. This is some sample text. 
                    This is some sample text. This is some sample text.
                    <br><button type="button" class="btn btn-success"><i class="fa fa-key"></i>&nbsp;&nbsp;Order Now</button>
                    <button type="button" class="btn btn-success"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;View Details</button>
                </div>
            </div>
            <br>
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="<?php echo base_url(); ?>resoures/img/rooms/4_small.png" alt="Media Object">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><span style="font-size: 24px;">Suit Number One</span></h4>
                    <span style="font-size: 28px;"><i class="fa fa-dollar"></i>&nbsp;&nbsp;200,99</span><br>
                    This is some sample text. This is some sample text. 
                    This is some sample text. This is some sample text.
                    This is some sample text. This is some sample text. 
                    This is some sample text. This is some sample text.
                    <br><button type="button" class="btn btn-success"><i class="fa fa-key"></i>&nbsp;&nbsp;Order Now</button>
                    <button type="button" class="btn btn-success"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;View Details</button>
                </div>
            </div>
            <br>
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="<?php echo base_url(); ?>resoures/img/rooms/5_samll.png" alt="Media Object">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><span style="font-size: 24px;">Suit Number One</span></h4>
                    <span style="font-size: 28px;"><i class="fa fa-dollar"></i>&nbsp;&nbsp;200,99</span><br>
                    This is some sample text. This is some sample text. 
                    This is some sample text. This is some sample text.
                    This is some sample text. This is some sample text. 
                    This is some sample text. This is some sample text.
                    <br><button type="button" class="btn btn-success"><i class="fa fa-key"></i>&nbsp;&nbsp;Order Now</button>
                    <button type="button" class="btn btn-success"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;View Details</button>
                </div>
            </div>


        </div>
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
        <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>

        <script>
            wow = new WOW({
                animateClass: 'animated',
                offset: 120
            });
            wow.init();

        </script>

    </body>

</html>

</body>
</html>
