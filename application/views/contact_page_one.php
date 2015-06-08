<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php include_once './resoures/imports/base_imports.php'; ?>
    </head>

    <body>
        <!-- header -->
        <?php include_once './resoures/html_imports/header.php'; ?>
        <!-- GMap -->
        <div id="map">
            <p>This will be replaced with the Google Map.</p>
        </div>
        <div class="container">
            <div class="row"> 
                <!-- Contact form -->
                <section id="contact-form" class="mt50">
                    <div class="col-md-8">
                        <h2 class="lined-heading"><span>Send a message</span></h2>
                        <p>Pellentesque facilisis justo sed enim facilisis luctus. Duis pretium nibh at lectus tempus, vel lacinia quam adipiscing. Nullam luctus congue mattis. Ut volutpat iaculis neque, sit amet fermentum nunc venenatis sed. In mauris sem, pulvinar sed arcu sit amet, fringilla condimentum nulla. Aenean at purus mi. Suspendisse potenti.</p>
                        <form class="clearfix mt50" role="form" method="post" action="php/contact.php" name="contactform" id="contactform">
                            <!-- Error message -->
                            <div id="message"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" accesskey="U"><span class="required">*</span> Your Name</label>
                                        <input name="name" type="text" id="name" class="form-control" value=""/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" accesskey="E"><span class="required">*</span> E-mail</label>
                                        <input name="email" type="text" id="email" value="" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" accesskey="S">Subject</label>
                                <select name="subject" id="subject" class="form-control">
                                    <option value="Booking">Booking</option>
                                    <option value="a Room">Room</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="comments" accesskey="C"><span class="required">*</span> Your message</label>
                                <textarea name="comments" rows="9" id="comments" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label><span class="required">*</span> Spam Filter: &nbsp;&nbsp;&nbsp;1 + 1 =</label>		  
                                <input name="verify" type="text" id="verify" value="" class="form-control" placeholder="Please enter the outcome" />
                            </div>
                            <button type="submit" class="btn  btn-lg btn-primary">Send message</button>
                        </form>
                    </div>
                </section>

                <!-- Contact details -->
                <section class="contact-details mt50">
                    <div class="col-md-4">
                        <h2 class="lined-heading"><span>Address</span></h2>
                        <a href="<?php echo base_url(); ?>/resoures/images/contact/948x632.gif" data-rel="prettyPhoto"><img src="<?php echo base_url(); ?>/resoures/images/contact/361x235.gif" alt="Image 1" class="img-thumbnail img-responsive"></a>
                        <address class="mt50">
                            <strong>Hotel</strong><br>
                            795 Las Palmas<br>
                            Spain, CA 94107<br>
                            <abbr title="Phone">P:</abbr> <a href="#">(123) 456-7890</a><br>
                            <abbr title="Email">E:</abbr> <a href="#">mail@example.com</a><br>
                            <abbr title="Website">W:</abbr> <a href="#">www.slashdown.nl</a><br>
                        </address>
                        <h2 class="lined-heading mt50"><span>Social</span></h2>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="box-icon"> <a href="#">
                                        <div class="circle"><i class="fa fa-facebook fa-lg"></i></div>
                                    </a> </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="box-icon"> <a href="#">
                                        <div class="circle"><i class="fa fa-twitter fa-lg"></i></div>
                                    </a> </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="box-icon"> <a href="#">
                                        <div class="circle"><i class="fa fa-linkedin fa-lg"></i></div>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Call To Action -->
        <section id="call-to-action" class="mt100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <h2>This is a Call to Action that you can use for all purposes!</h2>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="elements.html" class="btn btn-default btn-lg pull-right">More features</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once './resoures/html_imports/footer.php'; ?>
        <!-- Go-top Button -->
        <div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

    </body>
</html>