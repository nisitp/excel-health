<?php
$testimonials = get_sub_field('select') == 'manual'
    ? get_sub_field('testimonials')
    : get_posts([
        'post_type' => 'eh_testimonial',
        'numberposts' => get_sub_field('count'),
      ]);
      
      $display_mode = get_sub_field("display_mode");
      
      if (count($testimonials) == 1) $display_mode = "featured";
      
?>
<section class="fc-testimonial-slider <?php print $display_mode;?>">
    <div class="fc-testimonial-slider__inner">
       <div class="fc-testimonial-slider__testimonials">
            <?php foreach($testimonials as $post): ?>
              <?php get_template_part('template-parts/partials/testimonial',  $display_mode); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
