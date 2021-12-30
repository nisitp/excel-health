<?php
/**
 * Template Name: Excel Health Uni
 */

get_header(); ?>

<?php
	get_template_part( 'template-parts/banner' );
?>

<div class="container clear">
	<div class="col-45 left">	
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/EHU.png" />
		<br /><br />	
		<p>
			Welcome to Excel Health University.  As a client, you will have access to this online resource 24/7. this will allow you to learn on your time and refresh a subject at anytime. 
		</p>
		<p>
			The University is included in your subscription but will require a login. 
		</p>
		<a href="http://excelhealthuniversity.com/" target="_blank" class="btn btn-sml btn-white">Login</a>			
		<a href="<?php echo get_bloginfo('url'); ?>/trial-request-access/" class="btn btn-sml btn-white">Request Access</a>
		<br /><br />		
	</div>

	<div class="col-50 right calendar">	
		<iframe width="560" height="315" src="https://www.youtube.com/embed/xOZdmtXYPJ0?rel=0?ecver=1" frameborder="0" allowfullscreen style="max-width:100%;"></iframe>
		<br /><br />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/survey.jpg" />		
	</div>
</div>

<?php
get_footer();
