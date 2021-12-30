<?php
/**
 * Template Name: Team
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
	
	<section class="partners top-border">
		<div class="left">			
			<img src="<?php bloginfo('template_directory'); ?>/images/data.jpg" alt="" />			
		</div>
		
		<div class="oh">
			<div class="text">
				<h2>Most powerful data set in the market</h2>
				<ul class="services mt">
					<li>Direct from CMS Chronic Conditions Warehouse</li>
					<li>1.25 billion claims per year</li>
					<li>In depth analysis of every agency, facility,
					physician and patient in America</li>
					<li>100% Medicare Part A & Part B</li>
					<li>Most recent data in the industry, delivered quarterly</li>
					<li>Countless supporting data sources including mortalities by physician</li>
				</ul>
				<a href="/about-us/testimonials/" class="btn btn-green">Check out what our clients are saying about us!</a>
			</div>			
		</div>	
	</section><!-- end partners -->
	
	<div class="clear"></div>
	
	<div class="grey-container clear">
		<div class="container-sub">
				<h2>Meet the Leadership Team </h2>
				<?php if(have_rows('leadership_team')): ?>
				  <div class="team-list team-list--leadership">
					<?php while( have_rows('leadership_team')): the_row(); ?>
						<div class="team-member left">
							<img src="<?php echo get_sub_field('lt_image'); ?>" alt="<?php echo get_sub_field('lt_name'); ?>" />
							<h3><?php echo get_sub_field('lt_name'); ?></h3>
							<p><?php echo get_sub_field('lt_title'); ?></p>
							<a id="inline" href="#<?php echo get_sub_field('lt_nu'); ?>" class="btn btn-white btn-sml fancybox">Read More</a>
							<div style="display:none;width:600px;">
								<div id="<?php echo get_sub_field('lt_nu'); ?>" class="team-desc">
  								<div style="max-width:600px">
									<?php echo get_sub_field('lt_description'); ?>
  								</div>
								</div>
							</div>
						</div>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endwhile; ?>
				  </div>
				<?php endif; ?>	
				
				<div class="clear"></div>
				<br /><br />
				<h2>Meet the Board of Directors </h2>
				
				<?php if(have_rows('board_of_directors')): ?>
				  <div class="team-list team-list--board">				
					<?php while( have_rows('board_of_directors')): the_row(); ?>
						<div class="team-member left">
							<img src="<?php echo get_sub_field('bd_image'); ?>" alt="<?php echo get_sub_field('bd_name'); ?>" />
							<h3><?php echo get_sub_field('bd_name'); ?></h3>
							<a id="inline" href="#<?php echo get_sub_field('bd_nu'); ?>" class="btn btn-white btn-sml fancybox">Read More</a>
							<div style="display:none">
								<div id="<?php echo get_sub_field('bd_nu'); ?>" class="team-desc">
  								<div style="max-width:600px">  								
  									<?php echo get_sub_field('lt_description'); ?>
  								</div>
								</div>
							</div>
						</div>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endwhile; ?>
				  </div>
				<?php endif; ?>
			</div>
		</div>
<?php
get_footer();
