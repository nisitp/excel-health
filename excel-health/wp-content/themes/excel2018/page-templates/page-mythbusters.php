<?php
/**
 * Template Name: Mythbusters Page
 */

get_header(); ?>

<div class="hr"></div>
<div class="container mb">
<div class="col-30 grey-container cform right">

			<?php
					echo do_shortcode('[contact-form-7 id="271" title="Download Presentation: Myth Busters"]');
				?>

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://www.excelhealthgroup.com/wp-content/uploads/Excel-Health-Myth-Busters-Paper.pdf';
}, false );
</script>
	
		</div>	
<div class="col-70 left">
	
		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>
		
	</div>

	
	
		
	<div class="clear"></div>
</div>
<?php
get_footer();
