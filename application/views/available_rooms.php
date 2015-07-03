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
        <style>
            .modal.fade .modal-dialog {
                -webkit-transform: scale(0.1);
                -moz-transform: scale(0.1);
                -ms-transform: scale(0.1);
                transform: scale(0.1);
                top: 300px;
                opacity: 0;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
            }

            .modal.fade.in .modal-dialog {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                -webkit-transform: translate3d(0, -300px, 0);
                transform: translate3d(0, -300px, 0);
                opacity: 1;
            }
        </style>
        <script>
            $(function () {

                $("#preloader").hide();
                $("#checkin,#checkout").datepicker({
                    yearRange: '-120:+120',
                    changeMonth: true,
                    changeYear: true,
                    showAnim: 'slideDown',
                    minDate: 0, // 0 days offset = today
                    //maxDate: '2070-10-10', 
                    onChangeMonthYear: function (y, m, i) {
                        var d = i.selectedDay;
                        $(this).datepicker('setDate', new Date(y, m - 1, d));
                    }
                });


            });
            function validate(isField) {
                var check_in = $('#checkin').val().split("/");
                var check_out = $('#checkout').val().split("/");
                if (check_out != "") {
                    if (check_in > check_out) {
                        $("#wrongDate").modal('show');
                        isField.value = "";
                    }
                }

            }
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
                        $("#hotel_details").append(rowData.split("*")[0]);
                        $('#checkin').datepicker("setDate", new Date(rowData.split("*")[1]));
                        $('#checkout').datepicker("setDate", new Date(rowData.split("*")[2]));
                        $("#hotel_details").show();
                    },
                    error: function (xhr, desc, err) {
                        console.log(xhr);
                        console.log("Details: " + desc + "\nError:" + err);
                    }
                });
            }


            $(document).on('click', 'button.view', function () {
                var id = $(this).attr("id");
                //alert(id);
                //$("#loadgif").show();
                $.ajax({
                    url: 'http://localhost/duwa/vitesse/index.php/room/room_img_by_id',
                    type: 'post',
                    data: {'action': 'get', 'id': id},
                    success: function (rowData) {
                        $("#myCarousel").empty();
                        $("#myCarousel").html(rowData.split("*")[0]);
                        $("#details").html(rowData.split("*")[1]);
                        $("#room_name").html(rowData.split("*")[2]);
                    },
                    error: function (xhr, desc, err) {
                        console.log(xhr);
                        console.log("Details: " + desc + "\nError:" + err);
                    }
                });
            });
            $(document).on('click', 'button.order', function () {
                var id = $(this).attr("id");
                resetActive(event, 40, 'step-2');
                $("#pack").addClass("activestep");
            });
        </script>
    </head>

    <body id="body" style="background-color: rgb(25, 63, 23);">
        <!--Header Import-->
        <?php include_once './resoures/imports/temp_header.php'; ?>





        <div class="container" style="margin-top: 120px; margin-bottom: 100px;">
            <div class="row">
                <div class="progress" id="progress1">
                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                    </div>
                    <span class="progress-type" style="font-family: cursive; color: #fff; background-color: #5CB85C;">Overall Progress</span>
                    <span class="progress-completed">10%</span>
                </div>
            </div>
            <div class="row">
                <div class="row step">
                    <div id="div1" class="col-md-2 activestep" onclick="javascript: resetActive(event, 20, 'step-1');">
                        <span class="fa fa-home"></span>
                        <p>Availability</p>
                    </div>
                    <div id="pack" class="col-md-2">
                        <span class="fa fa-binoculars"></span>
                        <p>Packagers</p>
                    </div>
                    <div class="col-md-2" onclick="javascript: resetActive(event, 60, 'step-3');">
                        <span class="fa fa-pencil"></span>
                        <p>Registration</p>
                    </div>
                    <div class="col-md-2" onclick="javascript: resetActive(event, 80, 'step-4');">
                        <span class="fa fa-thumbs-up"></span>
                        <p>Confirmation</p>
                    </div>
                    <div class="col-md-2" onclick="javascript: resetActive(event, 80, 'step-5');">
                        <span class="fa fa-paypal"></span>
                        <p>Payment </p>
                    </div>
                    <div id="last" class="col-md-2" onclick="javascript: resetActive(event, 100, 'step-6');">
                        <span class="fa fa-smile-o"></span>
                        <p>Review </p>
                    </div>
                </div>
            </div>
            <div class="row setup-content step activeStepInfo" id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12 well text-center">
                        <h2>Find Available Rooms</h2>
                        <div class="row">
                            <?php
                            if (!empty($check_in && $check_out)) {
                                ?>
                                <div class="col-sm-3" style=" border: 1px #e4e4e4 solid; border-radius: 10px; background-color: #000;" >
                                    <form id="checkinform" style="margin-top: 10px;" method="POST" action="<?php echo base_url(); ?>index.php/room/check_availablilty">
                                        <div class="form-group" >
                                            <label style="font-family: sans-serif; color: white; font-size: 14px;">Arrival</label>
                                            <input type="text"  id="checkin" value="<?php echo $check_in; ?>" onchange="validate(this);" class="form-control" placeholder="Check in" name="arrive" class="required" />
                                        </div>

                                        <div class="form-group">
                                            <label style="font-family: sans-serif; color: white; font-size: 14px;">Departure</label>
                                            <input type="text" id="checkout" value="<?php echo $check_out; ?>" onchange="validate(this);" class="form-control" placeholder="Check out" name="depart" class="required" />
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
                                            <button type="button" class="btn btn-warning" data-toggle='modal' data-target='#login_form'>Login</button>
                                        </div>
                                    </form>
                                    <?php
                                }
                                ?>

                            </div>
                            <div id="preloader" style="margin-left: 700px; margin-top: 200px; color: #0072b1;">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div id="hotel_details" class="col-sm-9">
                                <?php
                                if (!empty($avi_details)) {
                                    foreach ($avi_details as $room) {

                                        echo "<div class='media list-group'>";
                                        echo "<a class='pull-left' href='#' data-toggle='modal' data-target='#sigiriya'>";
                                        echo "<img class='media-object' style='width: 250px; height: 220px;' width src='" . base_url() . $room->rm_cover_img . "' alt='Media Object'>";
                                        echo "</a>";
                                        echo "<div class='media-body'>";
                                        echo "<h4 class='media-heading'><span style='font-size: 24px; color: black;'>" . $room->rm_name . "</span></h4>";
                                        echo "<span style='font-size: 25px;'><i class='fa fa-dollar'></i>&nbsp;&nbsp;" . $room->rm_amount . "/<span style='font-size: 20px;'>Night</span></span><br>";
                                        echo $room->rm_detail;
                                        echo "<br><br><button id='" . $room->rm_id . "' type='button' class='btn btn-success order'><i style='font-size: 12px;' class='fa fa-key'></i>&nbsp;&nbsp;Order Now</button>&nbsp;&nbsp;";
                                        echo "<button type='button' class='btn btn-success view' id='" . $room->rm_id . "' data-toggle='modal' data-target='#sigiriya'><i style='font-size: 12px;' class='fa fa-list-alt'></i>&nbsp;&nbsp;View Details</button>";
                                        echo "</div>";
                                        echo "</div></br><hr style='isplay: block; height: 1px; border: 0; border-top: 1px solid #000; margin: 1em 0; padding: 0;'><br>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content step hiddenStepInfo" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12 well text-center">
                        <h2>Available Packagers </h2>
                        <div class="row">
                            <?php
                            if (!empty($check_in && $check_out)) {
                                ?>
                                <div class="col-sm-3" style=" border: 1px #e4e4e4 solid; border-radius: 10px; background-color: #000;" >
                                    <form id="checkinform" style="margin-top: 10px;" method="POST" action="<?php echo base_url(); ?>index.php/room/check_availablilty">
                                        <div class="form-group" >
                                            <label style="font-family: sans-serif; color: white; font-size: 14px;">Arrival</label>
                                            <input type="text"  id="arriavle" value="<?php
                                            $date = date_create_from_format('Ymd', date("Ymd", strtotime($check_in)));
                                            echo $date->format('F d Y')
                                            ?>" onchange="validate(this);" class="form-control" disabled />
                                        </div>

                                        <div class="form-group">
                                            <label style="font-family: sans-serif; color: white; font-size: 14px;">Departure</label>
                                            <input type="text" id="departure" value="<?php
                                            $date = date_create_from_format('Ymd', date("Ymd", strtotime($check_out)));
                                            echo $date->format('F d Y')
                                            ?>" onchange="validate(this);" class="form-control" disabled/>
                                        </div>

                                        <div class="form-group">
                                            <label style="font-family: sans-serif; color: white; font-size: 14px;">Guests&nbsp;<i style="font-size: 14px;" class="fa fa-user-plus"></i></label><br>
                                            <label style="font-family: cursive; color: white; font-size: 12px;">2 Adults and 2 Children</label>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-family: sans-serif; color: white; font-size: 14px;">Room Type&nbsp;<i style="font-size: 14px;" class="fa fa-glass"></i></label><br>
                                            <label style="font-family: cursive; color: white; font-size: 12px;">Suite 01</label>
                                        </div>
                                        <!--                                        <div class="form-group">
                                                                                    <label style="font-family: sans-serif; color: white; font-size: 14px;">Package&nbsp;<i style="font-size: 14px;" class="fa fa-binoculars"></i></label><br>
                                                                                    <label style="font-family: cursive; color: white; font-size: 12px;">1 week Surf Lesson</label>
                                                                                </div>-->
                                        <div class="form-group">
                                            <hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'>
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left" style="font-family: sans-serif; color: #e4e4e4; font-size: 16px;" >Total Rate</label><span style="font-family: sans-serif; color: #e4e4e4; font-size: 16px;" class="pull-right">USD 14250.00</span><br>
                                        </div>
                                        <div class="form-group">
                                            <hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'>
                                            <hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-warning" data-toggle='modal' data-target='#login_form'>Book Another Room</button>
                                        </div>
                                    </form>
                                    <?php
                                }
                                ?>

                            </div>
                            <div id="hotel_details" class="col-sm-9">
                                <?php
                                if (!empty($pack_details)) {
                                    foreach ($pack_details as $pack) {
                                        ?>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 style="color: #000; font-family: sans-serif;" ><?php echo $pack->name ?></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="col-lg-6 col-md-6">
                                                            <a href="#">
                                                                <img class="img-responsive" alt="Bootstrap template" src="http://placehold.it/300x200" />
                                                            </a>
                                                        </div>
                                                        <p style="color: #000; font-family: sans-serif; text-align: left;">
                                                            <?php echo $pack->short_detail ?><br><span style="font-weight: bold;">Rate : USD<?php echo $pack->amount ?></span>                         
                                                            <br><label><input type="checkbox" id="<?php echo $pack->id ?>" value="">&nbsp;&nbsp;Order This Package</label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row setup-content step hiddenStepInfo" id="step-3">
                <div class="col-xs-16">
                    <div class="col-md-16 well">
                        <h2 style="font-family: sans-serif;">Member Registration </h2>
                        <div class="navbar navbar-inverse navbar-static-top" style="font-family: sans-serif; border-radius: 10px; height: 20px;">
                            <p class="navbar-brand" style="color: white">&nbsp;&nbsp;Client Information</p>
                        </div><br>
                        <form class="form-horizontal" style="font-family: sans-serif; text-align: left; margin-right: 80px;">
                            <div class="form-group">
                                <label for="suffix" class="col-lg-2 control-label">Suffix</label>
                                <div class="col-lg-4">
                                    <select id="suffix_type" class="form-control" name="suffix_type">
                                        <option>Not Available</option>
                                        <option>Sr</option>
                                        <option>Jr</option>
                                        <option>II</option>
                                        <option>III</option>                                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fname" class="col-lg-2 control-label">First Name</label>
                                <div class="col-lg-4">
                                    <input type="text" id="fname" name="fname" class="form-control emailAddress" placeholder="Enter First Name.." required="required"/>
                                    <span class="help-block" id="firstNameMessage" />
                                </div>
                                <label for="mname" class="col-lg-2 control-label">Last Name</label>
                                <div class="col-lg-4">
                                    <input type="text" id="lname" name="mname" class="form-control emailAddress" value="N/A"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="lname" class="col-lg-2 control-label">Country</label>
                                <div class="col-lg-4">
                                    <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Last Name.." required="required"/>
                                </div>
                                <label for="slname" class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-4">
                                    <input type="text" id="slname" name="slname" class="form-control" value="N/A"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="slname" class="col-lg-2 control-label">Telephone</label>
                                <div class="col-lg-4">
                                    <input type="text" id="slname" name="slname" class="form-control" value="N/A"/>
                                </div>  
                            </div> 
                            <div class="form-group">
                                <label for="id_type" class="col-lg-2 control-label">Identity Type</label>
                                <div class="col-lg-4">
                                    <select id="id_type" class="form-control" name="id_type" >
                                        <option selected="selected">Drivers License</option>
                                        <option>State ID</option>
                                        <option>Passport</option>
                                        <option>Matricula Consular </option>
                                        <option>Other </option>                                           
                                    </select>
                                </div>
                                <label for="id_number" class="col-lg-2 control-label">ID Number</label>
                                <div id="myDiv" class="col-lg-4">
                                    <input type="text" id="id_number" name="id_number" class="form-control" placeholder="Enter ID Number.." required="required"/>
                                </div>
                            </div> 
                            <div class="navbar navbar-inverse navbar-static-top" style="font-family: sans-serif; border-radius: 10px; height: 20px;">
                                <p class="navbar-brand" style="color: white">&nbsp;&nbsp;Client Login Details</p>
                            </div><br>
                            <div class="form-group">
                                <label for="fname" class="col-lg-2 control-label">Username</label>
                                <div class="col-lg-4">
                                    <input type="text" id="fname" name="fname" class="form-control emailAddress" placeholder="Enter First Name.." required="required"/>
                                    <span class="help-block" id="firstNameMessage" />
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="mname" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-4">
                                    <input type="text" id="mname" name="mname" class="form-control emailAddress" value="N/A"/>
                                </div>
                                <label for="lname" class="col-lg-2 control-label">Confirm Password</label>
                                <div class="col-lg-4">
                                    <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Last Name.." required="required"/>
                                </div>
                            </div><br><br>
                            <div class="form-group" style="margin-left: 50px;">
                                <button type="button" style="width: 150px; height: 50px;" class="btn btn-default">Register</button><span>&nbsp;&nbsp;|&nbsp;</span>
                                <button type="button" style="width: 150px; height: 50px;" class="btn btn-default">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row setup-content step hiddenStepInfo" id="step-4">
                <div class="col-xs-12">
                    <div class="col-md-12 well text-center">
                        <h1>STEP 4</h1>

                    </div>
                </div>
            </div>
            <div class="row setup-content step hiddenStepInfo" id="step-5">
                <div class="col-xs-12">
                    <div class="col-md-12 well text-center">
                        <h1>STEP 5</h1>
                        <h3 class="underline">Instructions</h3>
                        Upload the application. 
                        This may require a confirmation email.
                    </div>
                </div>
            </div>
            <div class="row setup-content step hiddenStepInfo" id="step-6">
                <div class="col-xs-12">
                    <div class="col-md-12 well text-center">
                        <h1>STEP 6</h1>
                        <h3 class="underline">Instructions</h3>
                        Send us feedback on the overall process. 
                        This step is not obligatory.
                    </div>
                </div>
            </div>
        </div>

        <style>
            .hiddenStepInfo {
                display: none;
            }

            .activeStepInfo {
                display: block !important;
            }

            .underline {
                text-decoration: underline;
            }

            .step {
                margin-top: 27px;
            }

            .progress {
                position: relative;
                height: 25px;
            }

            .progress > .progress-type {
                position: absolute;
                left: 0px;
                font-weight: 800;
                padding: 3px 30px 2px 10px;
                color: #5CB85C;
                background-color: #5CB85C;
            }

            .progress > .progress-completed {
                position: absolute;
                right: 0px;
                font-weight: 800;
                padding: 3px 10px 2px;
            }

            .step {
                text-align: center;
            }

            .step .col-md-2 {
                background-color: #fff;
                border: 1px solid #C0C0C0;
                border-right: none;
            }

            .step .col-md-2:last-child {
                border: 1px solid #C0C0C0;
            }

            .step .col-md-2:first-child {
                border-radius: 5px 0 0 5px;
            }

            .step .col-md-2:last-child {
                border-radius: 0 5px 5px 0;
            }

            .step .col-md-2:hover {
                color: #F58723;
                cursor: pointer;
            }

            .step .activestep {
                color: #F58723;
                height: 100px;
                margin-top: -7px;
                padding-top: 7px;
                border-left: 6px solid #5CB85C !important;
                border-right: 6px solid #5CB85C !important;
                border-top: 3px solid #5CB85C !important;
                border-bottom: 3px solid #5CB85C !important;
                vertical-align: central;
            }

            .step .fa {
                padding-top: 15px;
                font-size: 40px;
            }
        </style>

        <script type="text/javascript">
            function resetActive(event, percent, step) {
                $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
                $(".progress-completed").text(percent + "%");

                $("div").each(function () {
                    if ($(this).hasClass("activestep")) {
                        $(this).removeClass("activestep");
                    }
                });

                if (event.target.className == "col-md-2") {
                    $(event.target).addClass("activestep");
                }
                else {
                    $(event.target.parentNode).addClass("activestep");
                }

                hideSteps();
                showCurrentStepInfo(step);
            }

            function hideSteps() {
                $("div").each(function () {
                    if ($(this).hasClass("activeStepInfo")) {
                        $(this).removeClass("activeStepInfo");
                        $(this).addClass("hiddenStepInfo");
                    }
                });
            }

            function showCurrentStepInfo(step) {
                var id = "#" + step;
                $(id).addClass("activeStepInfo");
            }
        </script>
































        <div class="modal fade" id="sigiriya" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"><center><span id="room_name" style="color: #000000;"></span></center></h4>                   
                    </div>
                    <div class="modal-body">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 500px; margin: 0 auto">
                            <!-- Indicators -->

                            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" ></span></a>
                            <a class = "right carousel-control" href = "#myCarousel" data-slide = "next"><span class = "glyphicon glyphicon-chevron-right"></span></a>
                        </div><br><br>
                        <p id="details"></p>
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                        <a href="hotel_categories.php#sigiriya"><button type="button" class="btn btn-primary" onclick="">Book Now!</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrongDate" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h4 class="modal-title" style="color: #000;">WARNING &nbsp;<i class="fa fa-warning"></i></h4></center>
                    </div>
                    <div class="modal-body">
                        <center><p>Please put a correct date!</p></center>                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
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
