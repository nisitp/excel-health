<?php
/**
 * Template Name: Email Blast
 */

get_header(); ?>


<section class="banner">
 <div class="slick-slider responsive">
        <div class="slide" style="background-image:url('<?php echo get_bloginfo('template_directory'); ?>/images/banner-07.jpg')"></div>
    </div>
        
  
    <div class="text">
      <h1>
        Creating Transparency <br />in Healthcare
      </h1>
      <p>Providing unprecedented, up-to-date market knowledge for your entire care network.</p>     
      <a href="<?php echo get_bloginfo('url'); ?>/trial-access/" class="btn btn-ghost">Start a Trial</a>
    </div>

    <div class="form">
      <?php echo do_shortcode( '[contact-form-7 id="253" title="Custom Report Request"]' ); ?>
    </div>
  
</section>



<section class="services">
    
    <div class="block left lt-blue">      
      <a href="<?php echo get_bloginfo('url'); ?>/solutions/hospice/">
        <img src="<?php bloginfo('template_directory'); ?>/images/heart.jpg" />
      </a>
      <h3>Hospice</h3>      
    </div>
    
    <div class="block left green">    
      <a href="<?php echo get_bloginfo('url'); ?>/solutions/home-health/">
        <img src="<?php bloginfo('template_directory'); ?>/images/house.jpg" />
      </a>
      <h3>Home Health</h3>
    </div>
    
    <div class="block left dk-blue">      
      <a href="<?php echo get_bloginfo('url'); ?>/solutions/hospitals/">
        <img src="<?php bloginfo('template_directory'); ?>/images/hospital.jpg" />
      </a>
      <h3>Hospital</h3>
    </div>
    
    <div class="clear"></div>

</section><!-- end services -->


  





<?php
get_footer();
