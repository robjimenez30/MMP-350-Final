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

        <div class="divide40"></div>
        <div class="container">
            <div class="portfolio-cube">

                <div id="filters-container" class="cbp-l-filters-button">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".great" class="cbp-filter-item">
                        The Great Cats <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".lesser" class="cbp-filter-item">
                        The Lesser Cats <div class="cbp-filter-counter"></div>
                    </div>
                </div>
                
                <div id="grid-container" class="cbp"><!-- Projects container -->

                <!-- Project 1 -->
                    <div class="cbp-item great">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Jaguar.jpg" alt="Jaguar">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">

                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Jaguar.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Jaguar<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Jaguar</div>
                    </div><!-- cbp-item web-design graphic -->

                <!-- Project 2 -->
                    <div class="cbp-item great">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Leopard.jpg" alt="Leopard">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Leopard.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Leopard<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Leopard</div>
                    </div><!-- cbp-item graphic -->

                    <!-- Project 3 -->
                    <div class="cbp-item great">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Lion.jpg" alt="Lion">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Lion.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Lion<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Lion</div>
                    </div><!-- cbp-item web-design logos -->

                    <!-- Project 4 -->
                    <div class="cbp-item great">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Liger.jpg" alt="Liger">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Liger.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Liger<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Liger</div>
                    </div><!-- cbp-item graphic logos -->

                    <!-- Project 5 -->
                    <div class="cbp-item great">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Snow-Leopard.jpg" alt="Snow-Leopard">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Snow-Leopard.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Snow Leopard<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Snow-Leopard</div>
                    </div><!-- cbp-item identity web-design -->

                    <!-- Project 6 -->
                    <div class="cbp-item great">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Tiger.jpg" alt="Tiger">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Tiger.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Tiger<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Tiger</div>
                    </div><!-- cbp-item identity web-design -->

                    <!-- Project 7 -->
                    <div class="cbp-item lesser">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Bob-Cat.jpg" alt="Lynx">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Bob-Cat.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Lynx<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Lynx</div>
                    </div><!-- cbp-item identity graphic -->

                    <!-- Project 8 -->
                    <div class="cbp-item lesser">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Black-footed-Cat.jpg" alt="Black footed Cat">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Black-footed-Cat.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Black Footed Cat<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Black footed Cat</div>
                    </div><!-- cbp-item web-design graphic -->

                    <!-- Project 9 -->
                    <div class="cbp-item lesser">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Clouded-Leopard.jpg" alt="Clouded Leopard">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Clouded-Leopard.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Clouded Leopard<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Clouded Leopard</div>
                    </div><!-- cbp-item web-design graphic -->

                    <!-- Project 10 -->
                    <div class="cbp-item lesser">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Fishing-Cat.jpg" alt="Fishing Cat">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                        <a href="#" class="cbp-l-caption-buttonLeft" target="_blank">Learn More</a>
                                        <a href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/img/Fishing-Cat.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Fishing Cat<br>">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title">Fishing Cat</div>
                    </div><!-- cbp-item web-design graphic -->

                </div>
            </div><!-- End Projects container -->
        </div>

        <div class="divide60"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
