<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package excel_health
 */

get_header(); ?>

<div class="hr">
	
</div>

<!-- <?php
	//get_template_part( 'template-parts/banner-news' );
?> -->


	<div id="primary" class="content-area container-sub">
    		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
