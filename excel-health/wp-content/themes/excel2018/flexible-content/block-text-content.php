<?php
  $class = "";  
  $style = "";
  // how we get the fields depends on whether we're in a 'flexible content' block or direct (i.e. via gutenberg editor)  
  if (get_field('flexible_content')) {
    $function = 'get_sub_field';
  } else {
    $function = 'get_field';
  }

  
    
  $class = $function('css_class');
  $bgimg = $function('background_background_image');
  $bgcol = $function('background_color'); 
  if ($bgcol) $style .= " background-color: $bgcol" . ";";
  if ($bgimg) $style .= " background-image: url(" . $bgimg . ");";

?>

<section class="fc-text-content fc-text-content--<?php print $bgcol; ?> <?php print $class; ?>" style="<?php print $style; ?>">
    <div class="fc-text-content__container">
        <div class="fc-text-content__inner">
            <?php if($head = $function('headline')): ?>
                <h2 class="fc-text-content__title"><?php print $head; ?></h2>
            <?php endif; ?>
            <?php if($function('content')): ?>
                <div class="fc-text-content__content" style="column-count: <?php print esc_attr(get_sub_field('columns')); ?>">
                    <?php print get_sub_field('content'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
