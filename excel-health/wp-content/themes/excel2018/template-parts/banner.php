<!-- SUB BANNER -->

<div class="sub-banner">

<!-- Full -->
<!-- Full -->
<?php
global $post;
$full= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="sub-banner-full">
    <div class="full" style="background-image: url(<?php echo $full[0]; ?> );"></div>
</div>

<!-- Med -->
<?php
global $post;
$med= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1000,1000 ), false, '' );
?>
<div class="sub-banner-med">
    <div class="med" style="background-image: url(<?php echo $med[0]; ?> );"></div>
</div>

<!-- Sml -->
<?php
global $post;
$sml= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 480,480 ), false, '' );
?>
<div class="sub-banner-sml">
    <div class="sml" style="background-image: url(<?php echo $sml[0]; ?> );"></div>
</div>

<div class="text">
<p><?php the_field('page_tagline'); ?></p>

</div>
</div>
<!-- SUB BANNER END -->