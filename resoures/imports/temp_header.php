<script>

    $(function () {

    });
    function logout() {
        $.ajax({
            url: 'http://localhost/duwa/vitesse/index.php/userregistation/logoutuser',
            type: 'post',
            data: {'action': 'logout'},
            success: function (rowData) {
                if (rowData != 0) {
                    $("#user").empty();
                    $("#user").append(rowData);
                } else {
                    $("#user").hide();
                }
            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    }
    function LoginUser() {
        var username = $("#username").val();
        var password = $("#password").val();

        $.ajax({
            url: 'http://localhost/duwa/vitesse/index.php/userregistation/check_member_login',
            type: 'post',
            data: {'action': 'login_check', 'username': username, 'password': password},
            success: function (rowData) {
                if (rowData == "Invalid") {
                    $("#login_result").append(rowData);
                } else {
                    $("#user").empty();
                    $("#user").append(rowData);
                    $("#login_form").modal('hide');
                }
            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    }
</script>
<section id="navigation" class="navbar-fixed-top wow fadeInUp" data-wow-duration="500ms" data-wow-delay="4000ms">
    <div class="container">

        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <span class="navbar-brand">
                <a href="#body">
                    <img src="<?php echo base_url(); ?>resoures/img/logo_head.png" alt="camp poe logo">
                </a>
            </span>
            <!-- /logo -->

        </div>

        <!-- main nav -->
        <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                <li class="dropdown">
                    <a href="<?php echo base_url(); ?>index.php/room/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ROOMS<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url(); ?>index.php/room/room_id/1">Suite 1</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/room/room_id/2">Suite 2</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/room/room_id/3">Suite 3</a></li>
                        <li><a href="#">Suite 4</a></li>
                        <li><a href="#">Suite 5</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Flexible Family Suite</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Bank Suite</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>index.php/camppoe">THE CAMP</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/teampoe">TEAM POE</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/shop">SHOP</a></li>
                <li><a href="#">PHOTOS</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/contact">CONTACT</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/room/availabe_rooms">BOOK NOW</a></li>
                <li style="border: 2px solid white; margin-top: 25px; font-size: 8px;"><p id="user" class="navbar-text" style="font-family: sans-serif; color: white; text-transform: uppercase;"><?php
                        if (!empty($this->session->userdata['loginData']['username'])) {
                            echo "<i class='fa fa-user'></i>&nbsp;" . $this->session->userdata['loginData']['username'] . " | <a href='#' id='logout' onclick='logout();' style= color: white;'><i class='fa fa-sign-out'></i></a>";
                        } else {
                            echo "<a href='#' data-toggle='modal' data-target='#login_form' style='color: white;'>Login</a>";
                        }
                        ?></p></li>
            </ul> 
        </nav>
        <!-- /main nav -->
    </div>
</section>

