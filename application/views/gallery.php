<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Starhotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php include_once './resoures/imports/base_imports.php'; ?>
    </head>

    <body>
        <!-- header -->
        <?php include_once './resoures/html_imports/header.php'; ?>
        <!-- Parallax Effect -->
        <script type="text/javascript">$(document).ready(function () {
                $('#parallax-pagetitle').parallax("50%", -0.55);
            });</script>

        <section class="parallax-effect">
            <div id="parallax-pagetitle" style="background-image: url(<?php echo base_url(); ?>/resoures/images/parallax/1900x911.gif);">
                <div class="color-overlay"> 
                    <!-- Page title -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Gallery</li>
                                </ol>
                                <h1>Gallery</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav nav-pills" id="filters">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".rooms">Rooms</a></li>
                        <li><a href="#" data-filter=".restaurant">Restaurant</a></li>
                        <li><a href="#" data-filter=".pool">Swimming Pool</a></li>
                        <li><a href="#" data-filter=".business">Business</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Gallery -->
        <section id="gallery" class="mt50">
            <div class="container">
                <div class="row gallery"> 
                    <!-- Image 1 -->
                    <div class="col-sm-3 restaurant fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 2 -->
                    <div class="col-sm-3 pool rooms fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 3 -->
                    <div class="col-sm-3 restaurant fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 4 -->
                    <div class="col-sm-3 pool fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 5 -->
                    <div class="col-sm-3 pool fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 6 -->
                    <div class="col-sm-3 pool fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 7 -->
                    <div class="col-sm-3 pool fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 8 -->
                    <div class="col-sm-3 pool fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 1 -->
                    <div class="col-sm-3 restaurant fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 2 -->
                    <div class="col-sm-3 pool fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 3 -->
                    <div class="col-sm-3 business restaurant fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                    <!-- Image 4 -->
                    <div class="col-sm-3 pool rooms fadeIn appear"> <a href="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url(); ?>/resoures/images/gallery/800x504.gif" alt="image" class="img-responsive zoom-img" /><i class="fa fa-search"></i></a> </div>
                </div>
            </div>
        </section>

        <!-- Call To Action -->
        <section id="call-to-action" class="mt100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <h2>This is a Call to Action that you can use for all purposes!</h2>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="elements.html" class="btn btn-default btn-lg pull-right">More features</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once './resoures/html_imports/footer.php'; ?>
        <!-- Go-top Button -->
        <div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

    </body>
</html>