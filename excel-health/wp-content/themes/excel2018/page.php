<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package excel_health
 */

get_header(); ?>



<?php 
	if ( is_page(219)) { 
?>

<section class="clear" style="background: #ecf1f1; margin-bottom: 30px;">
	
		<div class="col-50 left">			
				<img src="/wp-content/uploads/free-report.png" alt="" />
		</div>
		
		<div class="col-50 grey-container cform right">

				<?php
					echo do_shortcode('[contact-form-7 id="213" title="Free Report"]');
				?>

				<script>
					document.addEventListener( 'wpcf7mailsent', function( event ) {
    					location = '/wp-content/uploads/Excel-Health-2016-Home-Health-Adherence-50-State-Report.pdf';
					}, false );
				</script>
		</div>	

	<div class="clear"></div>

</section>

<div class="clear"></div>

<?php 
	} elseif ( is_page(348)) { 
?>

<section class="clear" style="background: #ecf1f1; margin-bottom: 30px;">
	
		<div class="col-50 left">			
				<img src="/wp-content/uploads/home-health-ROI.jpg" alt="" />
		</div>
		
		<div class="col-50 grey-container cform right">

				<?php
					echo do_shortcode('[contact-form-7 id="351" title="Download Presentation: Home Health ROI"]');
				?>

				<script>
					document.addEventListener( 'wpcf7mailsent', function( event ) {
    					location = '/wp-content/uploads/HomeHealthROI.pdf';
					}, false );
				</script>
		</div>	

	<div class="clear"></div>

</section>

<div class="clear"></div>

<?php } else {?>

<?php
	get_template_part( 'template-parts/banner' );
?>

<?php
	} 
?>

	<div id="primary" class="content-area container-sub">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
