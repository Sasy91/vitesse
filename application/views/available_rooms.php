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
            function validateEmail() {
                var email = $("#email").val();
                $.ajax({
                    url: 'http://localhost/duwa/vitesse/index.php/UserRegistation/validate_user',
                    type: 'post',
                    data: {'action': 'check_user', 'email': email},
                    success: function (rowData) {
                        if (rowData == "1") {
                            $('#val_email').text("Email is Already Taken!");
                        } else {
                            $('#val_email').text("");
                        }
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
           $(function () {
                //$(".no_guest").prop('disabled', true);
                $(".no_guest").change(function () {
                    if (!$(".package").is(":checked")) {
                        alert("Please Put a Tick to the Checkbox Abow");
                    }
                });
                if ($("#session").val() && $("#session_reservation").val() && $("#session_pack_id").val()) {
                    $.ajax({
                        url: 'http://localhost/duwa/vitesse/index.php/booking/get_invoice',
                        type: 'post',
                        data: {'action': 'get_invoice'},
                        success: function (rowData) {
                            if (rowData != false) {
                                $("#invoice_output").empty();
                                $("#invoice_output").append(rowData);
                                resetActive(event, 60, 'step-4');
                                $("#invoice").addClass("activestep");
                            } else {
                                resetActive(event, 60, 'step-3');
                                $("#invoice").addClass("activestep");
                            }
                        },
                        error: function (xhr, desc, err) {
                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);
                        }
                    });
                } else if ($("#session").val() && $("#session_reservation").val()) {
                    resetActive(event, 40, 'step-2');
                    $("#pack").addClass("activestep");
                }

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
            function continue_booking() {
                if ($("#session").val() && $("#session_reservation").val()) {
                    location.reload();
                } else {
                    alert("Please Select Room and Continue");
                }

            }
            function cancel() {
                $.ajax({
                    url: 'http://localhost/duwa/vitesse/index.php/booking/cancel_booking',
                    type: 'post',
                    data: {'action': 'cancel_booking'},
                    success: function (rowData) {
                        if (rowData) {
                            location.reload();
                        }
                    },
                    error: function (xhr, desc, err) {
                        console.log(xhr);
                        console.log("Details: " + desc + "\nError:" + err);
                    }
                });
            }
            function book_another_room() {
                $.ajax({
                    url: 'http://localhost/duwa/vitesse/index.php/room/check_availablilty',
                    type: 'post',
                    data: {'action': 'check_ava'},
                    success: function (rowData) {
                        $("#preloader").hide();
                        $("#hotel_details").empty();
                        $("#hotel_details").append(rowData.split("*")[0]);
                        $('#checkin').datepicker("setDate", new Date(rowData.split("*")[1]));
                        $('#checkout').datepicker("setDate", new Date(rowData.split("*")[2]));
                        resetActive(event, 60, 'step-1');
                        $("#div1").addClass("activestep");
                        $("#hotel_details").show();
                    },
                    error: function (xhr, desc, err) {
                        console.log(xhr);
                        console.log("Details: " + desc + "\nError:" + err);
                    }
                });
            }
            function check_availability() {
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
            function register_user() {
                var title = $('#title').val();
                var f_name = $('#f_name').val();
                var l_name = $('#l_name').val();
                var email = $('#email').val();
                var tel = $('#tel').val();
                var country = $('#country').val();
                var id_type = $('#id_type').val();
                var id_number = $('#id_number').val();
                var username = $('#username').val();
                var password = $('#password').val();
                $.ajax({
                    url: 'http://localhost/duwa/vitesse/index.php/UserRegistation/register_user',
                    type: 'post',
                    data: {'action': 'register_user', 'title': title, 'f_name': f_name, 'l_name': l_name, 'email': email, 'tel': tel, 'country': country, 'id_type': id_type, 'id_number': id_number, 'username': username, 'password': password},
                    success: function (rowData) {
                        alert(rowData);
                        if (rowData) {
                            alert("Registerd Successfull, Please Login to Continue Booking Process!");
                        }
                    },
                    error: function (xhr, desc, err) {
                        alert("fail")
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

            $(document).on('click', 'span.del', function () {
                var r = confirm("Are you sure you want to delete this Reservation ?");
                if (r == true) {
                    var room_id = $(this).attr("id");
                    $.ajax({
                        url: 'http://localhost/duwa/vitesse/index.php/booking/delete_booking',
                        type: 'post',
                        data: {'action': 'delete_booking', 'temp_booking_id': room_id},
                        success: function (rowData) {
                            if (rowData == "FALSE") {
                                resetActive(event, 60, 'step-1');
                                $("#div1").addClass("activestep");
                            } else {
                                $("#booked_rooms").empty();
                                $("#booked_rooms").append(rowData);
                            }
                        },
                        error: function (xhr, desc, err) {
                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);
                        }
                    });
                }
            });
            $(document).on('click', 'button.btn_proceed', function () {
                if ($(this).attr("id") == "proceed_yes") {
                    var packagers = [];
                    var guest = [];
                    $('input[name^="mailId"]').each(function () {
                        if ($(this).is(":checked")) {
                            packagers.push($(this).val());
                        }
                    });
                    $('input[name^="noId"]').each(function () {
                        if ($(this).val()) {
                            guest.push($(this).val());
                        }
                    });

                    $.ajax({
                        url: 'http://localhost/duwa/vitesse/index.php/booking/add_package',
                        type: 'post',
                        data: {'action': 'add_packge', 'packagers': JSON.stringify(packagers), 'guest': JSON.stringify(guest)},
                        success: function (rowData) {
                            if (rowData != false) {
                                $("#invoice_output").empty();
                                $("#invoice_output").append(rowData);
                                resetActive(event, 60, 'step-4');
                                $("#invoice").addClass("activestep");
                            } else {
                                resetActive(event, 60, 'step-3');
                                $("#invoice").addClass("activestep");
                            }
                        },
                        error: function (xhr, desc, err) {
                            alert("fail");
                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);
                        }
                    });
                } else {
                    $.ajax({
                        url: 'http://localhost/duwa/vitesse/index.php/booking/add_package',
                        type: 'post',
                        data: {'action': 'do_not_add_packge'},
                        success: function (rowData) {
                            if (rowData != false) {
                                $("#invoice_output").empty();
                                $("#invoice_output").append(rowData.split("*")[0]);
                                $("#billing_details").empty();
                                $("#billing_details").append(rowData.split("*")[1]);
                                resetActive(event, 60, 'step-4');
                                $("#invoice").addClass("activestep");
                            } else {
                                resetActive(event, 60, 'step-3');
                                $("#invoice").addClass("activestep");
                            }
                        },
                        error: function (xhr, desc, err) {
                            alert("fail");
                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);
                        }
                    });
                }

            });
            $(document).on('click', 'button.order', function () {
                var room_id = $(this).attr("id");
                var check_in = $("#checkin").val();
                var check_out = $("#checkout").val();
                var audlt = $("#adult").val() * 1;
                var child = $("#child").val() * 1;

                if (child == null) {
                    child = 0;
                }
                var guests = audlt + child;
                $.ajax({
                    url: 'http://localhost/duwa/vitesse/index.php/booking/create_booking',
                    type: 'post',
                    data: {'action': 'create_session', 'check_in': check_in, 'check_out': check_out, 'room_id': room_id, 'guests': guests, 'adult': audlt, 'child': child},
                    success: function (rowData) {
                        $("#booked_rooms").empty();
                        $("#booked_rooms").append(rowData);
                        resetActive(event, 40, 'step-2');
                        $("#pack").addClass("activestep");
                    },
                    error: function (xhr, desc, err) {
                        alert("fail");
                        console.log(xhr);
                        console.log("Details: " + desc + "\nError:" + err);
                    }
                });

            });
        </script>
    </head>

    <body id="body">
        <!--Header Import-->
        <?php include_once './resoures/imports/temp_header.php'; ?>





        <div class="container" id="booking">
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
                    <div id="div1" class="col-md-2 activestep">
                        <span class="fa fa-home"></span>
                        <p>Availability</p>
                    </div>
                    <div id="pack" class="col-md-2">
                        <span class="fa fa-binoculars"></span>
                        <p>Packagers</p>
                    </div>
                    <div id="register" class="col-md-2">
                        <span class="fa fa-pencil"></span>
                        <p>Registration</p>
                    </div>
                    <div id="invoice" class="col-md-2">
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
            <div class="row setup-content step activeStepInfo " id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12 well text-center ">
                        <h2>Find Available Rooms</h2>
                        <div class="row">
                            <?php
                            if (!empty($check_in && $check_out)) {
                                ?>
                                <div class="col-sm-3 selection">
                                    <form id="checkinform" style="margin-top: 10px;" method="POST" action="">
                                        <div class="form-group" >
                                            <label style="font-family: sans-serif; color: white; ;">Arrival</label>
                                            <input type="hidden" id="session" value="<?php echo $this->session->userdata('uniqueId'); ?>">
                                            <input type="hidden" id="session_reservation" value="<?php echo $this->session->userdata('room_id') ?>">
                                            <input type="hidden" id="session_pack_id" value="<?php echo $this->session->userdata('pack_id') ?>">
                                            <input type="text"  id="checkin" value="<?php echo $check_in; ?>" onchange="validate(this);" class="form-control" placeholder="Check in" name="arrive" class="required" />
                                        </div>

                                        <div class="form-group">
                                            <label style="font-family: sans-serif; color: white; ;">Departure</label>
                                            <input type="text" id="checkout" value="<?php echo $check_out; ?>" onchange="validate(this);" class="form-control" placeholder="Check out" name="depart" class="required" />
                                        </div>

                                        <div class="form-group">
                                            <label style="font-family: sans-serif; color: white; ;">Adults</label>
                                            <select id="adult" class="form-control" name="adult" onchange="check_availability();" style=" font-size:14px;">
                                                <option selected value="1">1</option>
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
                                            <label style="font-family: sans-serif; color: white; ;" >Kids <br>(Select If Age Above 5)</label>
                                            <select id="child" class="form-control" onchange="check_availability();" name="child"  style=" font-size:14px;">
                                                <option disabled selected value="0">Children</option>
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
                                            <button type="button" class="btn btn-warning" onclick="check_availability();">Check Availability</button><br><br>
                                            <button type="button" class="btn btn-warning" onclick="continue_booking();">Continue Booking</button>
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
                                        echo "<h4 class='media-heading'><span style='font-size: 35px; color:#2a7b72; padding:0px;'>" . $room->rm_name . "</span></h4>";
                                        echo "<span style='font-size: 25px; color:#2a7b72;'><i class='fa fa-dollar'></i>&nbsp;&nbsp;" . $room->rm_amount . "/<span style='font-size: 20px;'>Per Week and Person</span></span><br>";
                                        echo "<p style='color: #fff; margin-top: 20px; padding-left:15px;  padding-right:15px; padding-top:0;  padding-bottom:0;'>". $room->rm_detail ."</p>";
                                        echo "<br><br><button id='" . $room->rm_id . "' type='button' class='btn btn-success order'><i  style='font-size: 10px;    padding-right:11px' class='fa fa-key'></i>&nbsp;&nbsp;Order Now</button>&nbsp;&nbsp;";
                                        echo "<button type='button' class='btn btn-success view' id='" . $room->rm_id . "' data-toggle='modal' data-target='#sigiriya'><i style='font-size: 10px;' class='fa fa-list-alt'></i>&nbsp;&nbsp;View Details</button>";
                                        echo "</div>";
                                        echo "</div></br><hr 'isplay: block; height: 1px; border: 0; border-top: 1px solid #2a7b72;; margin: 1em 0; padding: 0;'><br>";
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
                            <div id="booked_rooms" class="col-sm-3 selection" >
                                <?php
                                if (!empty($booking_data)) {
                                    $i = 1;
                                    foreach ($booking_data as $bd) {
                                        ?>
                                        <form id="checkinform" style='margin-top: 10px; font-family: sans-serif;' method="POST" action="<?php echo base_url(); ?>index.php/room/check_availablilty">
                                            <span class='label label-success pull-left'>Reservation <?php echo $i; ?></span><a href='#'><span class='label label-danger pull-right del' id='<?php echo $bd->id; ?>'>Delete</span></a><br>
                                            <div class="form-group" >
                                                <label style=" color: white; ;">Arrival</label>
                                                <input type="text"  id="arriavle" value="<?php echo $bd->check_in ?>" class="form-control" disabled />
                                            </div>

                                            <div class="form-group">
                                                <label style=" color: white; ;">Departure</label>
                                                <input type="text" id="departure" value="<?php echo $bd->check_out ?>" class="form-control" disabled/>
                                            </div>

                                            <div class="form-group">
                                                <label style=" color: white; ;">Guests&nbsp;<i style=";" class="fa fa-user-plus"></i></label><br>
                                                <label style="font-family: cursive; color: white; font-size: 12px;"><span id="no_adult"><?php echo $bd->adult ?></span>  Adults and <span id="no_child"><?php echo $bd->child ?></span> Children</label>
                                            </div>
                                            <div class="form-group">
                                                <label style=" color: white; ;">Room Type&nbsp;<i style=";" class="fa fa-glass"></i></label><br>
                                                <label style="font-family: cursive; color: white; font-size: 12px;"><span id="suite_name"><?php echo $bd->room_name ?></span></label>
                                            </div>
                                            <div class="form-group">
                                                <hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'>
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left" style=" color: #e4e4e4; font-size: 16px;" >Total Rate</label><span style=" color: #e4e4e4; font-size: 16px;" class="pull-right">USD <samp id="amount"><?php echo $bd->price ?></samp></span><br>
                                            </div>
                                            <div class="form-group">
                                                <hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'>
                                                <hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'>
                                            </div>
                                        </form>
                                        <?php
                                        $i++;
                                    }
                                }
                                ?>
                                <div class="form-group">
                                    <button type="button" class="btn btn-warning" onclick="book_another_room();">Book Another Room</button>
                                </div>


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
                                                        <h3 style="color: #2a7b72;" ><?php echo $pack->name ?></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="col-lg-6 col-md-6">
                                                            <a href="#">
                                                                <img class="img-responsive" alt="Bootstrap template" src="http://placehold.it/300x200" />
                                                            </a>
                                                        </div>
                                                        <p style="color: #fff ; text-align: left;">
                                                            <?php echo $pack->short_detail ?><br><span style="font-weight: bold; width: 10%;">Rate : USD<?php echo $pack->amount ?></span>                         
                                                            <br><br><label><input class=" package" style=" border: 1px solid  #2a7b72; color: #fff; font-weight: bold   width: 10%;" type="checkbox" name="mailId" id="<?php echo $pack->id ?>" value="<?php echo $pack->id ?>">&nbsp;&nbsp;Order This Package</label>
                                                            <br><label>&nbsp;&nbsp;No of Peoples<input type="input" style="background: #000000;  border: 1px solid  #2a7b72; color: #ffffff;" name="noId" class=" col-sm-3 no_guest" id="<?php echo $pack->id ?>" value=""></label>
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
                           <div id="button" ><button type="button" onclick="cancel();" class="btn btn_proceed" style="background:#52292A; border:0px; color:#fff;">Cancel Booking</button>&nbsp;<button class="btn btn-primary btn_proceed" id="proceed_no">Proceed Without Packagers</button>&nbsp;<button class="btn btn-primary btn_proceed" id="proceed_yes">Proceed Next</button>
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
                                    <select id="title" class="form-control" name="title">
                                        <option>Not Available</option>
                                        <option>MRS.</option>
                                        <option>MS.</option>
                                        <option>MR</option>
                                        <option>JR</option>                                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fname" class="col-lg-2 control-label">First Name</label>
                                <div class="col-lg-4">
                                    <input type="text" id="f_name" name="f_name" class="form-control" placeholder="Enter First Name.." required="required"/>
                                    <span class="help-block" id="firstNameMessage" />
                                </div>
                                <label for="mname" class="col-lg-2 control-label">Last Name</label>
                                <div class="col-lg-4">
                                    <input type="text" id="l_name" name="l_name" class="form-control" value="N/A"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lname" class="col-lg-2 control-label">Country</label>
                                <div class="col-lg-4">
                                    <input type="text" id="country" name="country" class="form-control" placeholder="Enter Country.." required="required"/>
                                </div>
                                <label for="slname" class="col-lg-2 control-label">Email</label>&nbsp;&nbsp;&nbsp;<span id="val_email" style="color: red;"></span>
                                <div class="col-lg-4">
                                    <input type="email" onchange="validateEmail();" id="email" name="email" class="form-control" placeholder="Enter Email.." required/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="slname" class="col-lg-2 control-label">Telephone</label>
                                <div class="col-lg-4">
                                    <input type="text" id="tel" name="tel" class="form-control" value="N/A"/>
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
                                    <input type="text" id="username" name="username" class="form-control emailAddress" placeholder="Enter First Name.." required="required"/>
                                    <span class="help-block" id="firstNameMessage" />
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="mname" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-4">
                                    <input type="password" id="password" name="password" class="form-control emailAddress" placeholder="Enter Password!" required="required"/>
                                </div>
                                <label for="lname" class="col-lg-2 control-label">Confirm Password</label>
                                <div class="col-lg-4">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Enter Password Again!" required="required"/>
                                </div>
                            </div><br><br>
                            <div class="form-group" style="margin-left: 50px;">
                                <button type="button" style="width: 150px; height: 50px;" onclick="register_user();" class="btn btn-default">Register</button><span>&nbsp;</span>
                                <button type="button" style="width: 150px; height: 50px;" data-toggle='modal' data-target='#login_form' class="btn btn-default">Sign In</button>
                                <button type="button" style="width: 150px; height: 50px;" class="btn btn-default" onclick="javascript: resetActive(event, 40, 'step-2');">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row setup-content step hiddenStepInfo" id="step-4">
                <div class="col-xs-12">
                    <div class="col-md-12 well text-center" style="font-family: sans-serif;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center">
                                    <button type="button" class="btn btn_proceed pull-left">Back To Reservation</button>
                                    <h2>Invoice for Reservation</h2>
                                    <?php
                                    $unique_id = "";
                                    $unique_id = uniqid();
                                    $this->session->set_userdata('secureId', $unique_id);
                                    ?>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                                        <div class="panel panel-default height">
                                            <div class="panel-heading">Billing Details</div>
                                            <div class="panel-body" id="billing_details">
                                                <strong><?php
                                                    if (!empty($this->session->userdata['registerd_users_data']['username'])) {
                                                        echo $this->session->userdata['registerd_users_data']['title'] . " " . $this->session->userdata['registerd_users_data']['f_name'] . " " . $this->session->userdata['registerd_users_data']['l_name'];
                                                    }
                                                    ?></strong><br>
                                                <strong><?php
                                                    if (!empty($this->session->userdata['registerd_users_data']['username'])) {
                                                        echo $this->session->userdata['registerd_users_data']['country'];
                                                    }
                                                    ?></strong><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="panel panel-default height">
                                            <div class="panel-heading">Order Preferences</div>
                                            <div class="panel-body">
                                                <strong>Packages Selected</strong> No<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="text-center" style="font-family: sans-serif; color: #000;"><strong>Order Summary - Camp Poe</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <td><strong>Reservations</strong></td>
                                                        <td class="text-center"><strong>Arrive</strong></td>
                                                        <td class="text-center"><strong>Depature</strong></td>
                                                        <td class="text-center"><strong>Cost</strong></td>
                                                        <td class="text-center"><strong>Guest</strong></td>
                                                        <td class="text-right"><strong>Total</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody id="invoice_output">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url() . "index.php/payments/de_purchase/" . $this->session->userdata('uniqueId'); ?>"><button type="button" class="btn btn-default">Proceed Payment</button></a>&nbsp;&nbsp;<button type="button" onclick="cancel();" class="btn btn_proceed">Cancel Booking</button>
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
