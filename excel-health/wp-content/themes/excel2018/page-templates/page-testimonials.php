<?php
/**
 * Template Name: Testimonials
 */

get_header(); ?>

<?php
	get_template_part( 'template-parts/banner' );
?>

<div class="testimonials">
	<div class="col-50 left">
		<div class="videoWrapper">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/18-lbXmca40?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-45 right">
		<p class="lrg">
With Excel Health data we found referral sources we should approach, and just as importantly we determined where we should not spend our time. This knowledge guides our liaisons in terms of effective time management and is aiding our decisions for future growth.
		</p>
		<p class="title">
			- Norma English
			<br> &nbsp; Hospice Partners of America
		</p>
	</div>
	
	<div class="clear"></div>
	<div class="hr"></div>
	
	<h2 class="text-center">
		Putting Insights into Action
	</h2>
	
	<div class="col-50 left">
		<div class="col-30 text-center left">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/Rodney-Plunkett.jpg" alt="Rodney Plunkett testimonial for Excel Health" />
		</div>
		<div class="col-70 left">
			<p>
Vague, directional data is no longer good enough in today’s value-based care environment.  With Excel Health, we are now able to share fact-based, physician-specific and diagnosis-specific insights with our referral partners, which in turn, enables us to demonstrate how CHI Health at Home is uniquely qualified to help improve both their clinical and financial outcomes.
			</p>
			<p class="title">- Rodney Plunkett
				<br> &nbsp; Vice President of Population Health Management at CHI Health at Home
			</p>
		</div>
	</div>
	<div class="col-50 right">
		<div class="col-30 text-center left">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/Michael-Brents.jpg" alt="Michael Brents testimonial for Excel Health" />
		</div>
		<div class="col-70 left">
			<p>
Excel Health is the only vendor to provide access to both Medicare Part A and B claims data, which gives us a level of visibility into both our hospital and physician referral activity that we’ve never had before. We can actually show our network partners which patients were discharged with home health instructions vs. those who were not vs. those who actually landed in home health. The comparative outcomes across all three buckets really helps them see where their processes are falling short and how we can be of great value.
			</p>
			<p class="title">- Michael Brents
				<br> &nbsp; Divisional Director of Clinical Analytics and Informatics for CHI Health at Home
			</p>
		</div>
	</div>
	<div class="clear"></div>
	
	<div class="container-sub download-block">
		<img src="<?php bloginfo('url'); ?>/wp-content/uploads/insights-in-action-cover.jpg" alt="Insights in Action" class="left" />
		<h3>
			Learn how progressive customers are using our data today!
		</h3>
		<p>
			We sat down with CHI Health at  Home to learn what it is like now that they have Excel Health market intelligence solutions on their side. Read their entire Q& A session now! 

		</p>
		<a href="http://go.excelhealthgroup.com/CHIHealthatHomeQA" class="btn btn-green">Download Now</a>
	</div>
	
	<!-- end new content -->

	<div class="slick-slider multiple-items">
		<?php if(have_rows('testimonials')): ?>
			<?php while( have_rows('testimonials')): the_row(); ?>
				<div class="slide">
					<p><?php echo get_sub_field('testimonial'); ?></p>
					<p class="title">- <?php echo get_sub_field('company'); ?></p>
				</div>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<div class="grey-container clear">
	<div class="container-sub">
		<h2>Why People choose Excel Health </h2>

		<div class="left col-45">
			<img src="<?php bloginfo('template_directory'); ?>/images/testimonial_03.jpg" alt="Recent & Quality Data" class="alignleft" width="150" />
			<div class="oh">
				<h3>Recent & Quality Data</h3>
				<p>Leadership uses Excel intelligence to strengthen C-Level hospital relationships. </p>
			</div>

 			<p>
				<em>“Our five minute meet and greet with the hospital CEO turned into a 90 minute meeting and a follow up with the head of discharge”</em>
			</p>
			<p class="title"> 
				-Agency CEO
			</p>
		</div>

		<div class="right col-45">
			<img src="<?php bloginfo('template_directory'); ?>/images/testimonial_02.jpg" alt="Relationship & Referral Insight " class="alignleft" width="150" />
			<div class="oh">
				<h3>Relationship & Referral Insight  </h3>
				<p> Sales representatives  leverage quality and discharge metrics to educate physician groups on the benefits of hospice.  
			</div>
			<p>
				<em>“Able to get a lunch with 3 members of a cardiology group based on  sharing their discharge metrics. And they paid for lunch!” </em>
			</p>
		</div>

		<div class="clear"></div>

		<div class="left col-45">
			<img src="<?php bloginfo('template_directory'); ?>/images/testimonial_04.jpg" alt="Quality Discharge Metrics" class="alignleft" width="150" />
			<div class="oh">
				<h3>Quality Discharge Metrics </h3>
				<p> Business Development utilizes Excel market share trends to evaluate joint ventures, acquisitions and expansion. </p>
			</div>

			<p>
				<em>“We were able to prove that a major preferred provider partnership, in which we’ve invested millions, was sending us less than 10% of their home health patients. Having the data fundamentally shifted to the dynamics to our favor, almost overnight.” </em>				</p>
			<p class="title">
				- Agency VP of Business Development
			</p>								
		</div>

		<div class="right col-45">
			<img src="<?php bloginfo('template_directory'); ?>/images/testimonial_01.jpg" alt="Benchmarking Against Competition" class="alignleft" width="150" />
			<div class="oh">
				<h3>Benchmarking Against Competition</h3>
				<p>
					Clinical teams enable the best care by benchmarking vs. peers. 
				</p>
			</div>

			<p>
				<em>”Key hospital prospect went from one hospice partnership program to two after we were able to demonstrate superior care quality metrics. They made the decision on the spot!”
				</em>
			</p>
			<p class="title"> 
				—Clinical Director
			</p>
		</div>
	</div>
</div>

<?php
get_footer();
