<!-- Top header -->
<div id="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="th-text pull-left">
                    <div class="th-item"> <a href="#"><i class="fa fa-phone"></i> +94 777 777 070</a> </div>
                    <div class="th-item"> <a href="#"><i class="fa fa-envelope"></i> duwagroup@icloud.com</a></div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="th-text pull-right">
                    <div class="th-item">
                        <div class="btn-group">
                            <button class="btn btn-default btn-xs dropdown-toggle js-activated" type="button" data-toggle="dropdown"> English <span class="caret"></span> </button>
                            <ul class="dropdown-menu">
                                <li> <a href="#">ENGLISH</a> </li>
                                <li> <a href="#">FRANCE</a> </li>
                                <li> <a href="#">GERMAN</a> </li>
                                <li> <a href="#">SPANISH</a> </li>
                                <li> <a href="#">LATHIN ONE TWO</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="th-item">
                        <div class="social-icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube-play"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header>
    <!-- Navigation -->
    <?php
    if ($title == "base") {
        $active = "active";
    }
    ?>
    <div class="navbar yamm navbar-default" id="sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="index.html" class="navbar-brand">         
                    <!-- Logo -->
                    <div id="logo"> <img id="default-logo" src="<?php echo base_url(); ?>/resoures/images/logo.png" alt="Starhotel" style="height:44px;"> <img id="retina-logo" src="<?php echo base_url(); ?>/resoures/images/logo-retina.png" alt="Starhotel" style="height:44px;"> </div>
                </a> </div>
            <div id="navbar-collapse-grid" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown <?php  if ($title == "base") { echo "active"; } ?>"> <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="dropdown <?php  if ($title == "room") { echo "active"; } ?>"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Rooms<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>index.php/room/roomlist">Room List View</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/room/roomdetail">Room Detail</a></li>
                        </ul>
                    </li>
                    <li class="dropdown <?php  if ($title == "feature") { echo "active"; } ?>"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Features<b class="caret"></b></a>
                        <div class="dropdown-menu"> 
                            <div class="yamm-content">
                                <div class="row">
                                    <ul class="col-sm-3 list-unstyled mt20">
                                        <li>
                                            <p><strong>Elements</strong></p>
                                        </li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>				
                                    <ul class="col-sm-3 list-unstyled mt20">
                                        <li>
                                            <p><strong>Layout</strong></p>
                                        </li>
                                        <li><a href="boxed-pattern.html"><i class="fa fa-square-o"></i> Boxed</a></li>
                                        <li><a href="index.html"><i class="fa fa-arrows-h"></i> Wide</a></li>
                                        <li><a href="boxed-background.html"><i class="fa fa-picture-o"></i> Image</a></li>
                                    </ul>					  
                                    <ul class="col-sm-6 list-unstyled mt20">
                                        <li>
                                            <p><strong>Yamm! Megamenu</strong></p>
                                            <ul class="list-unstyled">
                                                <li class="row">
                                                    <ul class="col-sm-12 list-unstyled">
                                                        <li>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere justo posuere, commodo nibh sit amet, malesuada nisi. Nam vitae mauris vel ante laoreet placerat. Praesent pellentesque consectetur lobortis. Pellentesque lacinia nibh leo, sed pharetra tortor sagittis id. Cras a scelerisque eros. Nunc ornare diam turpis, id vulputate massa sagittis sed.
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>	
                                    </ul>		
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown <?php  if ($title == "blog") { echo "active"; } ?>"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Blog<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>index.php/blog/blogmain">Blog grid</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/blog/blogpost">Blog post</a></li>
                        </ul>
                    </li>
                    <li class="<?php  if ($title == "gallery") { echo "active"; } ?>"> <a href="<?php echo base_url(); ?>index.php/gallery/">Gallery</a></li>
                    <li class="dropdown <?php  if ($title == "contact") { echo "active"; } ?>"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Contact<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>index.php/contact/contact_one">Contact 1</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/contact/contact_two">Contact 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>