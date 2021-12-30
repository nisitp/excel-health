<?php
/**
 * Template Name: Support Page
 */

get_header(); ?>

<?php
	get_template_part( 'template-parts/banner' );
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
	
	<div class="grey-container clear">
		<div class="container-sub">			
			<div class="left col-45">		
				<h3>						
					<i class="fa fa-fw fa-3x fa-envelope green left" aria-hidden="true"></i>		
					Email <br>24 hours day
				</h3>
				<p>
					<a href="mailto:support@excelhealthgroup.com">support@excelhealthgroup.com</a>
				</p>
			</div>
				
			<div class="right col-45">				
				<h3 style="line-height: 2.8;">
					<i class="fa fa-fw fa-3x fa-phone green left" aria-hidden="true"></i>
					Call Us
				</h3>
				<p>
					<b>Monday - Friday 8am to 5:30pm EST:</b>  	
					<a href="tel:6788131590">678-813-1590</a>	
				</div>
				<div class="clear"></div>
				
				<div class="col-45" style="margin: 0 auto;">
					<h3>
						<i class="fa fa-fw fa-3x fa-user green left" aria-hidden="true"></i>
						Do you know your account manager? 
					</h3>
					Email us at <a href="mailto:info@excelhealthgroup.com">info@excelhealthgroup.com</a> to connect with your assigned account manager. 	
				</div>
			</div>
		</div>
<?php
get_footer();
