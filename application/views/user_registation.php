<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">

        <meta name="author" content="CAMP POE SRI LANKA">

        <title>CAMP POE | Room One</title>

        <?php include_once './resoures/imports/baseimports.php'; ?>
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
        </script>


    </head>

    <body id="body" style="background-color: #2d2d2d;">
        <!--Header Import-->
        <?php include_once './resoures/imports/temp_header.php'; ?>



        <div id="registration">
            <div class="container">
                <h3>Register Now<span class="pull-right" style="margin-right: 100px;"><button type="button" data-toggle='modal' data-target='#login_form' class="btn btn-default" style="width: 150px; font-size: 20px;"><i class="fa fa-lock fa-lg"></i>&nbsp; Log In</button></span></h3>
                <div class="row">
                    <form id="main-contact-form" style="margin-top: 20px;" class="contact-form" name="contact-form" method="post" action="<?php echo base_url(); ?>index.php/UserRegistation/register_user">

                        <div id="genaral">
                            <h4><i class="fa fa-user-plus fa-lg"></i> Personal Information</h4>  
                            <hr>
                            <div class="col-sm-5 col-sm-offset-1 pad">

                                <div class="form-group">
                                    <label>Tital *</label>
                                    <select id="title" class="form-control" name="title">
                                        <option>Not Available</option>
                                        <option>MR.</option>
                                        <option>MRS.</option>
                                        <option>MISS</option>
                                        <option>JR</option>                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>First Name *</label>
                                    <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label>ID Type</label>
                                    <select id="id_type" class="form-control" name="id_type">
                                        <option>NIC</option>
                                        <option>Passport</option>
                                        <option>Driver's License</option>                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ID Number  *</label>
                                    <input type="text" class="form-control" id="id_number" name="id_number" placeholder="Enter ID Number" required>
                                </div>

                            </div>
                            <div class="col-sm-5 pad">

                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" required>
                                </div>  
                                <div class="form-group">
                                    <label>Last Name  *</label>
                                    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email *</label>&nbsp;&nbsp;&nbsp;<span id="val_email" style="color: red;"></span>
                                    <input type="text" class="form-control" id="email" name="email" onchange="validateEmail();" placeholder="Enter Email" required>
                                </div>  
                                <div class="form-group">
                                    <label>Telephone *</label>
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Enter Phone" required>
                                </div>                      
                            </div>
                        </div>  <!--genaral--> 


                        <div id="login-info">

                            <div class="col-sm-6 col-sm-offset-3 pad">
                                <h4> <i class="fa fa-lock fa-lg"></i> Login Information</h4>
                                <hr>
                                <div class="form-group">
                                    <label>Username *</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                                </div> 
                                <div class="form-group">
                                    <label>Conform Password *</label>
                                    <input type="password" class="form-control" id="con_password" name="con_password" placeholder="Enter Password Again" required>
                                </div>  
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Info</button>
                                </div>
                            </div>
                        </div><!--login-info-->
                    </form> 
                </div>
            </div>
        </div> 
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
        <div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"><center><span id="room_name" style="color: #000000; font-family: sans-serif; font-weight: bold">CAMP POE Registered Users Login</span></center></h4>                   
                    </div>
                    <form class="col-md-12" style="margin-top: 10px;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control col-lg-1" placeholder="Password">
                        </div><br><br><br>
                        <div class="form-group"><center>
                                <button class="btn btn-primary">Sign In</button>
                            </center></div>
                    </form>
                    <div class="modal-footer">
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
