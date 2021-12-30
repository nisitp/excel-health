<?php 
$people = get_sub_field('people'); 
if (count($people)):?>
<div class="fc-people">
  <div class="fc-people--inner">
  <?php    
  foreach($people as $post): ?>    
    <div class="fc-people-listing--item">
      <?php get_template_part('template-parts/partials/people', 'teaser'); ?>      
    </div>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>          
  <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>  