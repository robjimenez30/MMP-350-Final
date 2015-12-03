<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big-Cat-Rescue
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'big-cat-rescue' ) ); ?>"><?php //printf( esc_html__( 'Proudly powered by %s', 'big-cat-rescue' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'big-cat-rescue' ), 'big-cat-rescue', '<a href="http://underscores.me/" rel="designer">RJ</a>' ); ?>
		</div><!-- .site-info -->

		<div class="container">

                <div class="row">
                    <div class="col-md-4 contact-details margin30">
                        <div class="footer-col">
                            <h3>About Big Cat Rescue</h3>
                            <p>
                                Big Cat Rescue is an animal sanctuary near Tampa, Florida, United States, devoted to rescuing and housing exotic felines, rehabilitating injured or orphaned native wild cats, and ending the private trade and ownership of exotic cats via educational outreach and legislation.
                            </p>
                        </div>                        
                    </div><!--footer col-->

                    <div class="col-md-4 contact-details margin30">
                        <div class="footer-col">
                            <h3>Contact</h3>
                            <ul class="list-unstyled contact">
                                <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> 12802 Easy ST Tampa, FL 33625</p></li> 
                                <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="mailto:info@bigcatrescue.org">info@bigcatrescue.org</a></p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> (813)-920-4130</p></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->

                    <div class="col-md-4 contact-details margin30">
                        <div class="footer-col">
                            <h3>Visit</h3>
                            <ul class="list-inline footer-social">
                                <li>
                                    <a href="https://www.facebook.com/bigcatrescue?_rdr=p" target="_blank" class="social-icon si-dark si-gray-round si-colored-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/bigcatrescue" target="_blank" class="social-icon si-dark si-gray-round si-colored-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/+bigcatrescue/posts" target="_blank" class="social-icon si-dark si-gray-round si-colored-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/bigcatrescue/" class="social-icon si-dark si-gray-round si-colored-instagram">
                                        <i class="fa fa-instagram"></i>
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-btm">
                            <p>&copy; 2015 Big Cat Rescue ALL RIGHTS RESERVED</p>
                        </div>
                    </div>
                </div>

            </div>

		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
