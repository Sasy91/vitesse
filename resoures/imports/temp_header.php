<section id="navigation" class="navbar-fixed-top">
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
                    <img src="<?php echo base_url(); ?>/resoures/img/camp_poe.png" alt="Kasper Logo">
                </a>
            </span>
            <!-- /logo -->

        </div>

        <!-- main nav -->
        <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ROOMS<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url(); ?>/index.php/room/room_one">Suite 1</a></li>
                        <li><a href="#">Suite 2</a></li>
                        <li><a href="#">Suite 3</a></li>
                        <li><a href="#">Suite 4</a></li>
                        <li><a href="#">Suite 5</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Studios</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Poolside Bungalows</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>/index.php/camppoe">THE CAMP</a></li>
                <li><a href="#">TEAM POE</a></li>
                <li><a href="#">SHOP</a></li>
                <li><a href="#">PHOTOS</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">BOOK NOW</a></li>
            </ul>
        </nav>
        <!-- /main nav -->
    </div>

</div>
</section>
