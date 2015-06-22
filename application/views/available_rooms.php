<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">
        <meta name="author" content="CAMP POE SRI LANKA">
        <title>CAMP POE | Room One</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <?php include_once './resoures/imports/baseimports.php'; ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>resoures/css/booking_guide.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resoures/css/preloader.css">
        <script>
            $(function () {
                $("#preloader").hide();
                $("#checkin,#checkout").datepicker({
                    yearRange: '-120:+0',
                    changeMonth: true,
                    changeYear: true,
                    showAnim: 'slideDown',
                    onChangeMonthYear: function (y, m, i) {
                        var d = i.selectedDay;
                        $(this).datepicker('setDate', new Date(y, m - 1, d));
                    }
                });
            });

            function AddExeData() {
                $("#hotel_details").hide();
                $("#preloader").show();
                var check_in = $("#checkin").val();
                var check_out = $("#checkout").val();
                var adult = $("#adult").val();
                var child = $("#child").val();
                $.ajax({
                    url: 'http://localhost/duwa/vitesse/index.php/room/check_availablilty',
                    type: 'post',
                    data: {'action': 'check_ava', 'check_in': check_in, 'check_out': check_out, 'adult': adult, 'child': child},
                    success: function (rowData) {
                        $("#preloader").hide();
                        $("#hotel_details").empty();
                        $("#hotel_details").append(rowData);
                        $("#hotel_details").show();
                    },
                    error: function (xhr, desc, err) {
                        console.log(xhr);
                        console.log("Details: " + desc + "\nError:" + err);
                    }
                });
            }
        </script>
    </head>

    <body id="body">
        <!--Header Import-->
        <?php include_once './resoures/imports/temp_header.php'; ?>

        <div id="availability">
            <div class="container">
                <div style="margin-top: 120px;">
                    <div class="row bs-wizard" style="border-bottom:0;">
                        <div class="col-xs-3 bs-wizard-step complete">
                            <div class="text-center bs-wizard-stepnum">Step 1</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center">Select Dates</div>
                        </div>

                        <div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
                            <div class="text-center bs-wizard-stepnum">Step 2</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center">Rooms and Rates</div>
                        </div>

                        <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
                            <div class="text-center bs-wizard-stepnum">Step 3</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center">Checkout</div>
                        </div>

                        <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                            <div class="text-center bs-wizard-stepnum">Step 4</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center">Review</div>
                        </div>
                    </div>                    

                </div>
                <div class="row">
                    <div class="col-sm-3" style=" border: 1px #e4e4e4 solid; border-radius: 10px; margin-top: 20px; background-color: #000;" >
                        <form id="checkinform" style="margin-top: 10px;" method="POST" action="<?php echo base_url(); ?>index.php/room/check_availablilty">
                            <div class="form-group" >
                                <label style="font-family: sans-serif; color: white; font-size: 14px;">Arrival</label>
                                <input type="text"  id="checkin" class="form-control" placeholder="Check in" name="arrive" class="required" />
                            </div>

                            <div class="form-group">
                                <label style="font-family: sans-serif; color: white; font-size: 14px;">Departure</label>
                                <input type="text" id="checkout"  class="form-control" placeholder="Check out" name="depart" class="required" />
                            </div>

                            <div class="form-group">
                                <label style="font-family: sans-serif; color: white; font-size: 14px;">Adults</label>
                                <select id="adult" class="form-control" name="adult"  style=" font-size:14px;">
                                    <option disabled selected>Adults </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="font-family: sans-serif; color: white; font-size: 14px;">Kids</label>
                                <select id="child" class="form-control" name="child"  style=" font-size:14px;">
                                    <option disabled selected>Children</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-warning" onclick="AddExeData();">Modify</button>
                            </div>
                        </form>
                        <div class="divider" style="margin-top: 20px;">

                            <div class="form-group" >
                                <label for="amount" style="font-family: sans-serif; color: white; font-size: 16px;">Extra Facilities</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""><span style="color: white;">Sun Cream</span></label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""><span style="color: white;">Night Cream</span></label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="preloader" style="margin-left: 700px; margin-top: 200px;">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div id="hotel_details" class="col-sm-9" style="margin-top: 20px;">
                        <?php
                        if (!empty($avi_details)) {
                            foreach ($avi_details as $room) {

                                echo "<div class='media'>";
                                echo "<a class='pull-left' href='#' data-toggle='modal' data-target='#sigiriya'>";
                                echo "<img class='media-object' src='" . base_url() . $room->rm_cover_img . "' alt='Media Object'>";
                                echo "</a>";
                                echo "<div class='media-body'>";
                                echo "<h4 class='media-heading'><span style='font-size: 24px;'>" . $room->rm_name . "</span></h4>";
                                echo "<span style='font-size: 28px;'><i class='fa fa-dollar'></i>&nbsp;&nbsp;" . $room->rm_amount . "/<span style='font-size: 20px;'>Night</span></span><br>";
                                echo $room->rm_detail;
                                echo "<br><button type='button' class='btn btn-success'><i class='fa fa-key'></i>&nbsp;&nbsp;Order Now</button>&nbsp;&nbsp;";
                                echo "<button type='button' class='btn btn-success'><i class='fa fa-list-alt'></i>&nbsp;&nbsp;View Details</button>";
                                echo "</div>";
                                echo "</div><br>";
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div><!--availability-->

        <div class="modal fade" id="sigiriya" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"><center>Beautiful Sigiriya</center></h4>                   
                    </div>
                    <div class="modal-body">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 500px; margin: 0 auto">
                            <!-- Indicators -->
                            <ol class="carousel-indicators hidden-xs">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target = "#myCarousel" data-slide-to = "1" class = ""></li>
                                <li data-target = "#myCarousel" data-slide-to = "2" class = ""></li>
                                <li data-target = "#myCarousel" data-slide-to = "3" class = ""></li>
                                <li data-target = "#myCarousel" data-slide-to = "4" class = ""></li>
                                <li data-target = "#myCarousel" data-slide-to = "5" class = ""></li>
                                <li data-target = "#myCarousel" data-slide-to = "6" class = ""></li>
                                <li data-target = "#myCarousel" data-slide-to = "7" class = ""></li>
                            </ol>
                            <div class = "carousel-inner">
                                <!--Item 1 -->
                                <?php
                                if (!empty($images)) {
                                    foreach ($images as $room_imgs) {
                                        echo "<div class = '" . $room_imgs->class . "' > ";
                                        echo "<img src = '" . base_url() . $room_imgs->ril_img_url . "' class = 'properties' alt = 'properties' style='width: 600px; height: 376px; top: 22px; left: 15px;'/>";
                                        echo "</div>";
                                    }
                                }
                                ?>

                            </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" ></span></a>
                            <a class = "right carousel-control" href = "#myCarousel" data-slide = "next"><span class = "glyphicon glyphicon-chevron-right"></span></a>
                        </div><br><br>
                        <p>Sigiriya the ruins of an ancient palace complex built during the reign of King Kasyapa (477 – 495 AD). The most distinctive landmark within the ancient palace grounds is the amazing Sigiriya Rock, also called Lion Rock, a hardened magma plug from a long extinct and eroded volcano. It looms out over the plains.<br>
                            Standing tall over the surrounding plains, Sigiriya Rock offers splended views for miles in all directions. Sigiriya Rock lies on a steep mound that rises over the otherwise flat plains, and is itself a further 370 meters tall. The rock is sheer on all sides, and in many parts even overhangs the base. From the top, it is elliptical in plan. Its top is flat, and slopes gradually along the elliptical axis.</p>
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                        <a href="hotel_categories.php#sigiriya"><button type="button" class="btn btn-primary" onclick="">Book Now!</button></a>
                    </div>
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
