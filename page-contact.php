<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Big-Cat-Rescue
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- top bar -->
        <div class="top-bar-light">            
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 hidden-xs">
                        <div class="top-bar-socials">
                            <a href="https://www.facebook.com/bigcatrescue?_rdr=p" target="_blank" class="social-icon-sm si-gray si-gray-round si-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/bigcatrescue" target="_blank" class="social-icon-sm si-gray si-gray-round si-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://plus.google.com/+bigcatrescue/posts" target="_blank" class="social-icon-sm si-gray si-gray-round si-g-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="https://www.instagram.com/bigcatrescue/" class="social-icon-sm si-gray si-gray-round si-instagram">
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div><!-- top-bar-socials -->
                    </div><!-- col-sm-5 hidden-xs -->
                    <div class="col-sm-7 text-right">
                        <ul class="list-inline top-dark-right">                      
                            <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i> <a href="mailto:info@bigcatrescue.org">info@bigcatrescue.org</a></li>
                            <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i><a href="tel:813-920-4130">(813)-920-4130</a></li>
                        </ul>
                    </div><!-- col-sm-7 text-right -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!--top-bar end here-->

        <!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-inverse navbar-static-top yamm sticky" role="navigation">
            <div class="container">
            <!-- Logo -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/"><img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/logo2.png" alt="Big Cat Rescue"></a>
                </div><!-- navbar-header -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://wpmmp.bmcc.cuny.edu/~rojimene/">Home</a></li> 
                        <li><a href="https://wpmmp.bmcc.cuny.edu/~rojimene/about">About</a></li>
                        <li><a href="https://wpmmp.bmcc.cuny.edu/~rojimene/photos-facts">Photos & Facts</a></li>
                        <li><a href="https://wpmmp.bmcc.cuny.edu/~rojimene/contact">Contact</a></li>
                        <li><a href="https://wpmmp.bmcc.cuny.edu/~rojimene/faq">FAQS</a></li>  
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->

        <div class="divide50"></div>
        <div class="container">
            <div id="map-canvas"></div>
        </div><!--.container-->
        <div class="divide60"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 margin30">
                    <h3 class="heading">Contact Big Cat Rescue</h3>
                    <p>
                        General inquiries: Please use the contact form below and we will get back to you soon.
                    </p>
                    <div class="divide30"></div>
                    <div class="form-contact">
                        <div class="required">
                            <p>( <span>*</span> fields are required )</p>
                        </div>

                       <form name="sentMessage" id="contactForm" method="post" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Email Address<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12  controls">
                                    <label>Phone Number<span>*</span></label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label>Message<span>*</span></label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-theme-bg btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div><!--contact form-->
                </div>
                <div class="col-md-4">
                    <h3 class="heading">Contact info</h3>
                    <ul class="list-unstyled contact contact-info">
                        <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> 12802 Easy ST Tampa, FL 33625</p></li> 
                        <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="mailto:info@bigcatrescue.org">info@bigcatrescue.org</a></p></li>
                        <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> (813)-920-4130</p></li>
                    </ul>
                    <div class="divide40"></div>
                    <h4>Like, Share, and Tweet</h4>
                     <div class=" margin10">
                            <a href="https://www.facebook.com/bigcatrescue?_rdr=p" target="_blank" class="social-icon si-dark si-colored-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/bigcatrescue" target="_blank" class="social-icon si-dark si-colored-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://plus.google.com/+bigcatrescue/posts" target="_blank" class="social-icon si-dark si-colored-google-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div><!--socials-->
                </div>
            </div>
        </div>
        <div class="divide40"></div>

        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(28.059795, -82.572379);

                var mapOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>Big Cat Rescue</strong></p><p>12802 Easy ST Tampa, FL 33625</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
