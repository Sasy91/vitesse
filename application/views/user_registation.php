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

    </head>

    <body id="body" style="background-color: #A1DBB2;">
        <!--Header Import-->
        <?php include_once './resoures/imports/temp_header.php'; ?>

        <div class="container" style=" height: 1000px; border: 1px #e4e4e4 solid; border-radius: 10px; background-color: white;">
            <div class="row">
                <form role="form" style="font-family: sans-serif; margin: 20px;" >
                    <div class="col-lg-6">
                        <hr style="margin: 10px;">
                        <div class="well well-sm"><strong>User Registration</strong></div>
                        <div class="navbar navbar-inverse navbar-static-top" style="height: 10px; border-radius: 20px;">
                            <p class="navbar-brand" style="color: white"><span class="fa fa-user"></span>&nbsp;&nbsp;Personal Information</p>
                        </div>
                        <div class="form-group" >
                            <label for="InputEmail">Title</label>
                            <div class="input-group">
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
                            <label for="InputMessage">First Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Last Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">ID Type</label>
                            <div class="input-group">
                                <select id="suffix_type" class="form-control" name="suffix_type">
                                    <option>NIC</option>
                                    <option>Passport</option>
                                    <option>Driver's License</option>                                            
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">ID Number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Country</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Telephone</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="navbar navbar-inverse navbar-static-top" style="height: 10px; border-radius: 20px;">
                            <p class="navbar-brand" style="color: white"><span class="fa fa-lock"></span>&nbsp;&nbsp;Login Information</p>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">User Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Password</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Confirm Password</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-left">
                    </div>
                </form>
                <form class="form-inline col-lg-5" role="form" style="font-family: sans-serif;">
                    <hr style="margin: 10px;">
                    <div class="well well-sm"><strong>Registered User Information Retrieval</strong></div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input style="margin-left: 32px;" type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group" style="margin-top: 5px;">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                    </div><br><br>
                    <button type="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </form>
                <div class="col-lg-5 col-md-push-1" style="font-family: sans-serif;">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                        </div>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                        </div>
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
