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
                                    <li class="active">Rooms list view</li>
                                </ol>
                                <h1>Rooms list view</h1>
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
                        <li><a href="#" data-filter=".single">Single Room</a></li>
                        <li><a href="#" data-filter=".double">Double Room</a></li>
                        <li><a href="#" data-filter=".executive">Executive Room</a></li>
                        <li><a href="#" data-filter=".apartment">Apartment</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Rooms -->
        <section class="rooms mt100">
            <div class="container">
                <div class="row room-list fadeIn appear"> 
                    <!-- Room -->
                    <div class="col-sm-4 single">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 1" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>Double bedroom</h5>
                                    <div class="price">&euro; 99<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room -->
                    <div class="col-sm-4 double apartment">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 2" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>King Size Bedroom </h5>
                                    <div class="price">&euro; 149<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room -->
                    <div class="col-sm-4 double apartment">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 3" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>Single room</h5>
                                    <div class="price">&euro; 120<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room -->
                    <div class="col-sm-4 double executive">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 4" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>Deluxe Room</h5>
                                    <div class="price">&euro; 99<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room -->
                    <div class="col-sm-4 double">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 5" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>Honeymoon Suite</h5>
                                    <div class="price">&euro; 179<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room -->
                    <div class="col-sm-4 single executive apartment">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 6" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>Family Room</h5>
                                    <div class="price">&euro; 59<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room -->
                    <div class="col-sm-4 single executive">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 7" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>Business Class</h5>
                                    <div class="price">&euro; 89<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room -->
                    <div class="col-sm-4 double">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 8" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>Jungle View</h5>
                                    <div class="price">&euro; 139<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room -->
                    <div class="col-sm-4 double apartment">
                        <div class="room-thumb"> <img src="<?php echo base_url(); ?>/resoures/images/rooms/356x228.gif" alt="room 9" class="img-responsive" />
                            <div class="mask">
                                <div class="main">
                                    <h5>Special Spa Room</h5>
                                    <div class="price">&euro; 259<span>a night</span></div>
                                </div>
                                <div class="content">
                                    <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                                        malesuada metus.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Private balcony</li>
                                                <li><i class="fa fa-check-circle"></i> Sea view</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                                                <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                                                <li><i class="fa fa-check-circle"></i> Bathroom</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>index.php/room/roomdetail" class="btn btn-primary btn-block">Book Now</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once './resoures/html_imports/header.php'; ?>
        <!-- Go-top Button -->
        <div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

    </body>
</html>