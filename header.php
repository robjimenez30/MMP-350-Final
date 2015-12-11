<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big-Cat-Rescue
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- My Links -->

<!-- Bootstrap -->

        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- custom css (blue color by default) -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
      
        <!-- font awesome for icons -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- flex slider css -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">

        <!-- animated css  -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/css/animate.css" rel="stylesheet" type="text/css" media="screen">

        <!--Revolution slider css-->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/css/rev-style.css" rel="stylesheet" type="text/css" media="screen">

        <!--owl carousel css-->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">

        <!--mega menu -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/css/yamm.css" rel="stylesheet" type="text/css">

        <!--popups css-->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

        <!--cube css-->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<!--scripts and plugins -->

        <!--must need plugin jquery-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/jquery.min.js"></script> 

        <!--bootstrap js plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  

        <!--easing plugin for smooth scroll-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/jquery.easing.1.3.min.js" type="text/javascript"></script>

        <!--sticky header-->
        <script type="text/javascript" src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/jquery.sticky.js"></script>

        <!--flex slider plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>

        <!--parallax background plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/jquery.stellar.min.js" type="text/javascript"></script>
        
        <!--digit countdown plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/waypoints.min.js"></script>

        <!--digit countdown plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/jquery.counterup.min.js" type="text/javascript"></script>

        <!--on scroll animation-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/wow.min.js" type="text/javascript"></script> 

        <!--owl carousel slider-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/owl.carousel.min.js" type="text/javascript"></script>

        <!--popup js-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

        <!--you tube player-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        
        <!--customizable plugin edit according to your needs-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/custom.js" type="text/javascript"></script>

        <!--revolution slider plugins-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/revolution-custom.js" type="text/javascript"></script>

        <!--cube portfolio plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
         <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/MMP-350-Final/assets/js/cube-portfolio.js" type="text/javascript"></script>
        <!--customizable plugin edit according to your needs-->


<?php wp_head(); ?>
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
                        <li><a href="https://wpmmp.bmcc.cuny.edu/~rojimene/faq">FAQS</a></li>  
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
