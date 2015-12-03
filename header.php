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

        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- custom css (blue color by default) -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
      
        <!-- font awesome for icons -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- flex slider css -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">

        <!-- animated css  -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/css/animate.css" rel="stylesheet" type="text/css" media="screen">

        <!--Revolution slider css-->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/css/rev-style.css" rel="stylesheet" type="text/css" media="screen">

        <!--owl carousel css-->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">

        <!--mega menu -->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/css/yamm.css" rel="stylesheet" type="text/css">

        <!--popups css-->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

        <!--cube css-->
        <link href="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<!--scripts and plugins -->

        <!--must need plugin jquery-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/jquery.min.js"></script> 

        <!--bootstrap js plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  

        <!--easing plugin for smooth scroll-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/jquery.easing.1.3.min.js" type="text/javascript"></script>

        <!--sticky header-->
        <script type="text/javascript" src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/jquery.sticky.js"></script>

        <!--flex slider plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>

        <!--parallax background plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/jquery.stellar.min.js" type="text/javascript"></script>
        
        <!--digit countdown plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/waypoints.min.js"></script>

        <!--digit countdown plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/jquery.counterup.min.js" type="text/javascript"></script>

        <!--on scroll animation-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/wow.min.js" type="text/javascript"></script> 

        <!--owl carousel slider-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/owl.carousel.min.js" type="text/javascript"></script>

        <!--popup js-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

        <!--you tube player-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        
        <!--customizable plugin edit according to your needs-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/custom.js" type="text/javascript"></script>

        <!--revolution slider plugins-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/revolution-custom.js" type="text/javascript"></script>

        <!--cube portfolio plugin-->
        <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
         <script src="https://wpmmp.bmcc.cuny.edu/~rojimene/wp-content/themes/big-cat-rescue-php/assets/js/cube-portfolio.js" type="text/javascript"></script>
        <!--customizable plugin edit according to your needs-->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
