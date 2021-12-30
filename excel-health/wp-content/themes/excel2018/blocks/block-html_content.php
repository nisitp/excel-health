<?php
  $class = "";  
  $style = "";
  // how we get the fields depends on whether we're in a 'flexible content' block or direct (i.e. via gutenberg editor)  
  if (get_field('flexible_content') or get_field('content_blocks')) {
    $function = 'get_sub_field';
  } else {
    $function = 'get_field';
  }

  
  $background = $function('background');
$style = $background['type'] == 'image'
    ? "background-image: url('".esc_attr($background['image'])."');"
    : "";
    
  $class = $function('css_class');
  $bgimg = $function('background_image');
  $bgcol = $function('background_color'); 
  if ($bgcol) $style .= " background-color: $bgcol" . ";";
  if ($bgimg) $style .= " background-image: url(" . $bgimg . ");";
  
?>

<section class="html-content fc-text-content--<?php print $function('color'); ?> <?php print $class; ?>" style="<?php print $style; ?>">
  <div class="html-content__inner">
    <?php if ($head = $function('subheader')): ?>
    <h2 class="html-content__subheader subheader"><?php print $head; ?></h2>
    <?php endif;?>
    <div class="html-content__content">
      <?php print $function('content'); ?>
    </div>
  </div>
</section>

