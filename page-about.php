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
                    <a href="index.html"><img src="img/logo2.png" alt="Big Cat Rescue"></a>
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

        <div class="divide80"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 margin20">
                    <h3 class="heading">A little about us</h3>
                    <p>
                        Big Cat Rescue operates on donations and earned revenue, such as gift shop sales.  All of our administrative and fundraising costs are paid by the earned revenue so that 100% of the donations go to the cats.  BCR is proud to keep our fundraising and administrative costs well under 20% when the industry standard considers 35% to be good.  The biggest expense to most businesses is staffing but people will train and work with wild animals for free, so we only pay staff to do the kind of work that volunteers won’t.
                        On average Big Cat Rescue typically has 80 Volunteers who clock in 40,000 man-power hours, in addition to 55 Intern trainees who clock in 32,000 man-power hours, plus 5,000 Volunteer Committee member hours. In total this amounts to 77,000 volunteer man-power hours per year, providing roughly the equivalent workforce of 37 more full time staff. None of our board members are paid for that service.  Between paid staff, part time staff, contractors and volunteers we averaged the equivalent of 50+ full time staff to care for approximately 80+ exotic cats.
                    </p>
                    
                </div>
                <div class="col-md-6">
                    <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/img/about.jpg" class="img-responsive" alt="New York">
                </div>
            </div><!--about intro-->

        </div><!--.container-->
        
        <div class="divide60"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2>Our Staff</h2>
                        <span class="center-line"></span>
                        <p class="lead">Big Cat Rescue is blessed to have such a dedicated staff, board, volunteer committee and team of veterinarians to insure the future for these magnificent cats.
                        See what a typical day at the sanctuary is like:  http://bigcatrescue.org/day-like-big-cat-rescue/</p>
                    </div><!--center-heading-->
                </div>
            </div>
           <div class="row">
                <div class="col-md-3 margin20">
                    <div class="team-wrap">
                        <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/img/Carole-Baskin.jpg" class="img-responsive" alt="">
                        <h4>Carole Baskin</h4>
                        <span>FOUNDER/ CEO</span>
                        <p>
                            Carole Baskin is the founder and CEO of Big Cat Rescue. She has run this Tampa based non profit since 1992 and has garnered international attention to the plight of captive big cats on CNN, Animal Planet, Discovery, U.S. News & World Report, People Magazine, The Today Show, Sports Illustrated, all of the local media outlets and many more national and international programs.
                        </p>
                          <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/rjmediaconsulting" target="_blank" class="social-icon-sm si-border si-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/RJ_Media_Cons_" target="_blank" class="social-icon-sm si-border si-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/pub/robert-a-jimenez/b2/7b5/9a0" target="_blank" class="social-icon-sm si-border si-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul><!--social-->
                    </div><!--team-wrap-->
                </div><!--team col-->
                <div class="col-md-3 margin20">
                    <div class="team-wrap">
                        <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/img/Howard-Baskin.jpg" class="img-responsive" alt="">
                        <h4>Howard Baskin</h4>
                        <span>CHIEF FINANCIAL OFFICER</span>
                        <p>
                            Howard Baskin is a retired management consultant who worked with early stage and fast growing companies in the areas of strategic planning, finance and operations. He now devotes full time to Big Cat Rescue and serves on the Audit Committee.
                        </p>
                        <br>
                        <br>
                        <br>
                        <br>
                            <ul class="list-inline">
                            <li>
                                <a href="#" class="social-icon-sm si-border si-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon-sm si-border si-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon-sm si-border si-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul><!--social-->
                    </div><!--team-wrap-->
                </div><!--team col-->
                <div class="col-md-3 margin20">
                    <div class="team-wrap">
                        <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/img/Susan-Bass.jpg" class="img-responsive" alt="">
                        <h4>Susan Bass</h4>
                        <span>PUBLIC RELATIONS</span>
                        <p>
                            Susan Bass has been the Director of Public Relations at Big Cat Rescue since 2011.
                            Susan’s primary role is expanding the reach of the sanctuary’s advocacy work and developing strategies and initiatives to bring the issues of big cats in captivity and in the wild to the forefront of the public and media.
                        </p>
                        <br>
                        <br>
                           <ul class="list-inline">
                            <li>
                                <a href="#" class="social-icon-sm si-border si-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon-sm si-border si-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon-sm si-border si-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul><!--social-->
                    </div><!--team-wrap-->
                </div><!--team col-->
                <div class="col-md-3 margin20">
                    <div class="team-wrap">
                        <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/img/Jamie-Veronica-Boorstein.jpg" class="img-responsive" alt="">
                        <h4>Jamie Veronica Boorstein</h4>
                        <span>PRESIDENT</span>
                        <p>
                            Jamie Veronica is President of Big Cat Rescue, a member of the Board of Directors, and Chair of the Volunteer Committee.  She has served in these capacities for well over ten years. She spent many years developing a sponsorship program whose financial success continues to contribute largely toward meeting our annual budget.
                        </p>
                        <br>
                          <ul class="list-inline">
                            <li>
                                <a href="#" class="social-icon-sm si-border si-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon-sm si-border si-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon-sm si-border si-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul><!--social-->
                    </div><!--team-wrap-->
                </div><!--team col-->
            </div>
        </div><!--team-->
        <div class="divide60"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
