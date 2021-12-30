<?php
/**
 * Template Name: Trial Page
 */

get_header(); ?>

<?php
	get_template_part( 'template-parts/banner' );
?>
	<div id="primary" class="content-area container-sub trial">
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
				<div class="entry-content">
					<h3>
						Excel Health will give you insights and actionable intelligence you need now to stand out in this industry.
						<br><br> We promise, you’ve never seen data this recent or complete before. 
					</h3>

					<div class="col-50 register-steps left">
						<!-- Step 1 -->				
						<h3>
							<div class="circle">
						  		<span class="number">1</span>
							</div>
							Register for your trial.</h3>
						<p class="clear"> 
							<img src="http://www.excelhealthgroup.com/wp-content/themes/excel-health/images/register-icon.jpg" class="alignleft" alt="Register for your trial">
							Our database is based by state. We will need this info for your database access. It will not be shared. 
						</p>
	
						<!-- Step2 -->					
						<h3>
							<div class="circle">
 								<span class="number">2</span>
							</div>
							Schedule your training.</h3>
						<p class="clear"> 
							<img src="http://www.excelhealthgroup.com/wp-content/themes/excel-health/images/calendar-icon.jpg" class="alignleft" alt="Schedule your training">
							Schedule a time to speak with our team. Pick a date that works best for you and we will send you a meeting invite that works with YOUR schedule.
						</p>
						
						<!-- Step3 -->
						<h3>
							<div class="circle">
						  		<span class="number">3</span>
							</div>
							GO! </h3>
						<p class="clear">
							<img src="http://www.excelhealthgroup.com/wp-content/themes/excel-health/images/email-icon.jpg" class="alignleft" alt="GO">
							After your training you will receive an email confirmation from our team regarding login credentials.  
						</p>
					</div>					
					<div class="col-45 right">
						<iframe src="https://go.excelhealthgroup.com/l/501091/2018-05-16/l4n9c" width="100%" height="600" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
					</div>
				</div><!-- .entry-content -->
			
				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									esc_html__( 'Edit %s', 'excel-health' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->	
	
	<div class="lt-blue-container text-center clear">	
		<h2>Time to beat competition and increase referrals. </h2>
		<br />
		<a href="/contact-us/" class="btn btn-white">CONTACT US NOW! </a>				
	</div>	

<?php
get_footer();
