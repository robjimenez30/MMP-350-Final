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

			

        <div class="divide50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2>Have questions?</h2>
                        <span class="center-line"></span>
                    </div><!--center-heading-->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div1").fadeToggle();
        $("#div2").fadeToggle("slow");
        $("#div3").fadeToggle(3000);
    });
});
</script>

<button>Click to fade in/out boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;background-color:red;"></div>
<br>
<div id="div2" style="width:80px;height:80px;background-color:yellow;"></div>
<br>
<div id="div3" style="width:80px;height:80px;background-color:green;"></div>
                </div>
            </div>
            <div class="divide10"></div>
            <div class="row">
                <div class="col-md-7">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Is there a way I can help at no cost?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    There are many ways to support our cats and help end abuse that cost nothing. Some are actions you can take or avoid. Others are ways to make purchases you already make in ways that result in funding for the sanctuary.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        What are some ways I can help at no cost?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Some actions you can take:
                                <ul>
                                    <li>A wonderful way to support the cats at no cost to you is to go to your Amazon.com account and sign up for Amazon Smile to have .5% of your purchases donated to Big Cat Rescue.</li>
                                    <li>Post your reviews at Google Places,  TripAdvisor, Yelp and Charity Navigator, as that helps others know about us and helps counter balance the 1 star reviews that animal abusers fraudulently post on those sites to bring down our overall ratings.</li>
                                    <li>Become an “Advocat”: AdvoCat tells you about our most recent rescues and how you can get involved, no matter where you live.</li>
                                    <li>Social Networking for Big Cats: If you have an account at MySpace, YouTube, Facebook, LinkedIn, Flickr, Photobucket, AOL, or any of the myriad of social networking sites, you can help promote Big Cat Rescue.  Add us as a friend, watch, rate and embed our videos, or post photos of our cats with links to our site. Your visitors will love it and you will be helping to save the big cats!</li>
                                </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Need Photos for a Story?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    For a few lion, tiger and other big cat photos that you can download immediately with photo credits to bigcatrescue.org just search our site, right click and save. All we ask is that you credit bigcatrescue.org
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        Need Video for a Story?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Use KeepVid to download our YouTube videos at YouTube.com/BigCatRescue or contact FilmCrew@BigCatRescue.org
                                </div>
                            </div>
                        </div>
                        
                           <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                        Will my website work in every web browser?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Yes. We perform quality assurance testing, ensuring cross-browser compatibility in IE 7+, Firefox 3.0+, Safari 1.0+ and Chrome 1.0+.
                                </div>
                            </div>
                        </div>
                           <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                        Are your web sites responsive?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Yes. We make your web page look good on wide range of devices from desktop computer, notebooks, mobile phones and tablets.
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--collapse col-->
                <div class="col-md-4 col-md-offset-1">
                    
                    <div class="sidebar-box margin40">
                        <h4>Have more questions?</h4>
                        <p>
                            Please visit our contact page and ask as many questions as you need and like. 
                        </p>
                        <hr>

        <?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_format() );
                ?>

            <?php endwhile; ?>


            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        <?php rewind_posts(); ?>

            <?php

            $args=array('post_type' => 'portfolio_item', 'posts_per_page' => 10);
            $loop = new WP_Query($args);
            while ($loop->have_posts()): $loop->the_post();

            the_title();
            echo'<div class="entry-content">';
            the_content();
            echo '</div>';

            endwhile;

            ?>
                    </div><!--sidebar-box-->           
                </div>
            </div>
        </div>
        <div class="divide60"></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
