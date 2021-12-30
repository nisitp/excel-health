<?php
      $headshot = get_field('headshot');

      if (is_array($headshot)) {
        $hsclass = "";
        $hsstyle = " style=\"background-image: url('{$headshot['sizes']['medium']}\"')";
      } else {
        $hsclass = " no-image";
        $hsstyle = "";
      }
?>
<div class="fc-testimonial-featured">
    <div class="fc-testimonial-featured__testimonial">
        <p class="fc-testimonial-featured__testimonial-content"><?php print get_field('testimonial'); ?></p>
        <small class="fc-testimonial-featured__testimonial-position"><?php print get_field('name'); ?> <br><?php print get_field('position'); ?>, <?php print get_field('company'); ?></small>
    </div>
    <div class='fc-testimonial-featured__headshot<?php print $hsclass;?>' <?php print $hsstyle; ?>></div>      
</div>
