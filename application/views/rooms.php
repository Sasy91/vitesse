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
        <style>
            .spinner {
                margin: 100px auto 0;
                width: 70px;
                text-align: center;
            }

            .spinner > div {
                width: 18px;
                height: 18px;
                background-color: #333;

                border-radius: 100%;
                display: inline-block;
                -webkit-animation: bouncedelay 1.4s infinite ease-in-out;
                animation: bouncedelay 1.4s infinite ease-in-out;
                /* Prevent first frame from flickering when animation starts */
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }

            .spinner .bounce1 {
                -webkit-animation-delay: -0.32s;
                animation-delay: -0.32s;
            }

            .spinner .bounce2 {
                -webkit-animation-delay: -0.16s;
                animation-delay: -0.16s;
            }

            @-webkit-keyframes bouncedelay {
                0%, 80%, 100% { -webkit-transform: scale(0.0) }
                40% { -webkit-transform: scale(1.0) }
            }

            @keyframes bouncedelay {
                0%, 80%, 100% { 
                    transform: scale(0.0);
                    -webkit-transform: scale(0.0);
                } 40% { 
                    transform: scale(1.0);
                    -webkit-transform: scale(1.0);
                }
            }
        </style>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#home').hide();
                $('#navigation').hide();
                setTimeout(function () {
                    $('#preloader').fadeOut('fast');
                }, 3000); // <-- time in milliseconds
                setTimeout(function () {
                    $('#home').fadeIn('fast');
                }, 3100); // <-- time in milliseconds
                //$('#home').fadeIn(4000);
            });
        </script>
    </head>

    <body id="body">
        <div class="spinner" id="preloader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>

        <!--Header Import-->

        <?php include_once './resoures/imports/temp_header.php'; ?>


        <div id="home" class="main">

                   <div class="room_cover fullheight">

                <?php
                if (!empty($details)) {
                    foreach ($details as $room_details) {
                        echo "<img  class='img-rounded' src='" . base_url() . $room_details->rm_cover_img . "' alt=''>";
                    }
                }
                ?>
            </div>

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

        <?php include_once './resoures/imports/temp_footer.php'; ?>


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



