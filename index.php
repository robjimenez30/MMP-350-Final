<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Big-Cat-Rescue
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!--slider start-->
        <div class="fullwidthbanner">
            <div class="tp-banner">
                <ul>
                <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Get Involved">
                        <!-- MAIN IMAGE -->
                        <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/bg-1.jpg"  alt="Macbook"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYER NR. 1 -->
                        <div class="caption left-tile-text sfr tp-resizeme"
                             data-x="40"
                             data-y="110" 
                             data-speed="600"
                             data-start="1200"
                             data-end="9400"
                             data-endspeed="600">Get Involved
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600">Volunteer/ Intern
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600">Sign up for Amazon Smile
                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600">Become an “Advocat”
                        </div>

                        <!-- LAYER NR. 8 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 9 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600">Social Networking for Big Cats
                        </div>

                        <!-- LAYER NR. 10 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="40"
                             data-y="370" 
                             data-speed="600"
                             data-start="2400"
                             data-end="9400"
                             data-endspeed="600">And Much More...
                        </div>

                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Tiger">
                        <!-- MAIN IMAGE -->
                        <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/bg-2.jpg"  alt="Big Cat"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption text-center-top sft"
                             data-x="center"
                             data-y="220"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="easeOutExpo">
                            Photos & Facts
                        </div>

                        <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="center"
                             data-y="300"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="projects.html" class="btn border-white btn-lg">See More</a>
                        </div>

                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Help Us !">
                        <!-- MAIN IMAGE -->
                        <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/bg-3.jpg"  alt="Camera Lens"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <div class="caption text-center-top sft"
                             data-x="center"
                             data-y="210"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="easeOutExpo">
                            Be our voice :'(
                        </div>

                        <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="center"
                             data-y="300"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="projects.html" class="btn border-white btn-lg">Get Involved</a>
                        </div>
                    </li>
                    
                </ul>
            </div><!-- tp-banner -->
        </div><!--full width banner-->
        <!--revolution end-->
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
                    <a href="index.html"><img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/logo2.png" alt="Big Cat Rescue"></a>
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

        <div class="divide70"></div><!-- Gives Padding between slide and content -->

        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="center-heading">
                        <h2>Welcome to Big Cat Rescue</h2>
                        <span class="center-line"></span>
                        <p>
                            Big Cat Rescue is an animal sanctuary near Tampa, Florida, United States, devoted to rescuing and housing exotic felines, rehabilitating injured or orphaned native wild cats, and ending the private trade and ownership of exotic cats via educational outreach and legislation.
                        </p>
                        <img src="rev-images/mockup-all.jpg" alt="" class="img-responsive wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="100ms" style="display: block;margin: 40px auto">
                    </div><!-- center-heading -->
                </div><!-- col-sm-8 col-sm-offset-2 -->                   
            </div><!-- row -->   
        </div><!--features-box container end-->

        <section class="purchase-sec wow animated fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span>"I CAN'T SPEAK FOR MY SELF. YOU ARE MY VOICE."</span> 
                    </div>
                </div>
            </div>
        </section><!--purchase section end-->

        <!-- WHAT CLIENT SAYS -->
        <div class="testimonials-v-2 wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="center-heading">
                            <h2>The <strong>Most</strong> Important Thing <strong>You</strong> Can Do to <strong>Save</strong> Big Cats</h2>
                            <span class="center-line"></span>
                        </div>
                    </div>
                </div><!--center heading end-->

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="testi-slide">

                        <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Most-Important.png" alt="" >
                        
                            <p>This bill called the Big Cats and Public Safety Protection Act is the most important piece of legislation to ever be introduced to protect lions, tigers and other exotic wild cats from being kept as pets and in miserable roadside zoos. It ended the 113th Congressional session with more than 120 co sponsors.  Now we are working to re introduce the bill in early 2015.</p>
                        </div><!--flex slider testimonials end here-->
                    </div>
                </div><!--testi slider row end-->
            </div><!-- container -->
        </div><!--testimonials v-2 end-->
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
