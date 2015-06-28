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
                <h3>Registration Now<span class="pull-right" style="margin-right: 100px;"><button type="button" class="btn btn-default" style="width: 150px; font-size: 20px;"><i class="fa fa-lock fa-lg"></i>&nbsp; Log In</button></span></h3>
                <div class="row">
                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo base_url(); ?>index.php/UserRegistation/register_user">

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
        </div> <!--registation-> 
      
       
        
         
          
           
            
             
              
               
                
                 
                  
                   
                    
                     
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
        <!--
        <div class="form-group">
            <label for="InputMessage">First Name</label>
            <div class="input-group">
                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
            </div>
        </div>
        -->
        <!--
                                <div class="form-group">
                                    <label for="InputMessage">Last Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                    </div>
                                </div>
        -->
        <!--
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
        -->
        <!--
                                <div class="form-group">
                                    <label for="InputMessage">ID Number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                    </div>
                                </div>
        -->
        <!--
                                <div class="form-group">
                                    <label for="InputMessage">Email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                    </div>
                                </div>
        -->
        <!--
                                <div class="form-group">
                                    <label for="InputMessage">Country</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                    </div>
                                </div>
        -->
        <!--
                                <div class="form-group">
                                    <label for="InputMessage">Telephone</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                    </div>
                                </div>
        -->
        <!--
                                <div class="navbar navbar-inverse navbar-static-top" style="height: 10px; border-radius: 20px;">
                                    <p class="navbar-brand" style="color: white"><span class="fa fa-lock"></span>&nbsp;&nbsp;Login Information</p>
                                </div>
                                <div class="form-group">
                                    <label for="InputMessage">User Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                    </div>
                                </div>
        -->
        <!--
                                <div class="form-group">
                                    <label for="InputMessage">Password</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                    </div>
                                </div>
        -->
        <!--
                                <div class="form-group">
                                    <label for="InputMessage">Confirm Password</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter First Name" required>
                                    </div>
                                </div>
        -->
        <!--
                                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-left">
                            </div>
                        </form>
        -------------------------------------------------------------------------------------------------------------------------------------->



        <!--
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
        -->

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
