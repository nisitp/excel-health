<?php
  
  // TODO: REFACTOR TO USE THE TEASERS. SEE block-portfolio-view.php
  // Or just change homepage to use a portfolio view instead.

$posts = 3;

$resources = [];  
  
// get stickies first
$stickies = get_option( 'sticky_posts' );

 $the_query = new WP_Query([
    'post_type' => array('post','eh_resource'),
    'post__in' => $stickies,
    'posts_per_page' => 3,
    'meta_key' => 'promote_home',
    'meta_value' => '1',
    'ignore_sticky_posts' => 1 // This SEEMS backwards but see https://wordpress.stackexchange.com/questions/202896/query-only-sticky-posts    
]);


if ( $the_query->have_posts() ) { 
    while ( $the_query->have_posts() ) { 
        $the_query->the_post();
        $resources[] = $post;
//        get_template_part('loop', 'feed-top-stories' );

    }    
    wp_reset_postdata();    
}

if ($the_query->post_count < $posts) {
  
  // now get the non-sticky ones
  $remainder = $posts - $the_query->post_count;

   $the_query = new WP_Query([
      'post_type' => array('post','eh_resource'),
      'post__not_in' => $stickies,
      'posts_per_page' => $remainder,
      'meta_key' => 'promote_home',
      'meta_value' => '1',
      'orderby' => 'rand',
      'ignore_sticky_posts' => 1 // This SEEMS backwards but see https://wordpress.stackexchange.com/questions/202896/query-only-sticky-posts    
  ]);
  
  if ( $the_query->have_posts() ) { 
      while ( $the_query->have_posts() ) { 
          $the_query->the_post();
          $resources[] = $post;
  //        get_template_part('loop', 'feed-top-stories' );
  
      }    
      wp_reset_postdata();    
  }
  
}

?>
<section class="homepage-featured-content">
    <div class="homepage-featured-content__inner">
        <div class="homepage-featured-content__contents">
            <h2 class="homepage-featured-content__headline"><?php print get_sub_field('headline'); ?></h2>
            <div class="homepage-featured-content__contents-container">
                <?php foreach($resources as $resource):
                  // add to use featured image if available
                  $img = ""; // unset first since we're looping
                  if (has_post_thumbnail( $resource->ID )) {
                    $img = wp_get_attachment_image_src( get_post_thumbnail_id( $resource->ID ), 'full' )[0];
                  }

                    $type = wp_get_post_terms($resource->ID, 'eh_resource_type');
                    $type = sizeof($type) > 0 ? $type[0]->name : "Press Release";

                    $text = get_field('resource_text', $resource->ID);
                    if($excerpt = get_field('excerpt', $resource->ID))
                        $text = $excerpt;
        
                    $linkType = get_field('resource_display_type', $resource->ID);
                    $linkClass = "";
                    $link = get_permalink($resource->ID);
                    if($linkType == 'iframe') {
                      $link = get_permalink($resource->ID);                      
//                        $linkClass = "fancybox";
//                        $link = "#modal_".$resource->ID;
                    } else if ($linkType == 'file') {
                        $link = get_field('resource_file', $resource->ID);
                    } else if ($linkType == 'link') {
                        $link = get_field('resource_link', $resource->ID);
                    }
                    if (!$link_text = get_field('resource_link_text', $resource->ID)) $link_text = "Read it Now";                    
                ?>
                    <div class="homepage-featured-content__content">
                        <h3 class="homepage-featured-content__content-category"><?php print $type; ?></h3>
                        
                        <?php if (!$img) $img = esc_attr(get_field('resource_image', $resource->ID));
                            if ($img) {
                              $imgstyle = "style='background-image: url($img);'";
                              $imgclass="";
                            } else {
                              $imgstyle = "";
                              $imgclass = "no-default"; 
                            }
                            ?>
                            <div <?php print $imgstyle;?> class="resource-image-placeholder <?php print $imgclass;?>"> <a class="<?php print esc_attr($linkClass); ?>" href="<?php print esc_attr($link); ?>"><?php print $resource->post_title;?></a></div>
                          
                        
                        <h3 class="homepage-featured-content__content-title"><a class="<?php print esc_attr($linkClass); ?>" href="<?php print esc_attr($link); ?>"><?php print $resource->post_title; ?></a></h3>
                        <p class="homepage-featured-content__content-excerpt">
                            <?php print $text; ?>
                            <a class="<?php print esc_attr($linkClass); ?>" href="<?php print esc_attr($link); ?>"><?php print $link_text; ?></a>
                        </p>
                        <?php if($linkType == 'iframe' && 0): ?>
                            <div style="display:none">
                                <div id="modal_<?php print $resource->ID; ?>" class="iframe-modal">
                                    <h3><?php print $resource->post_title; ?></h3>
                                    <p>Fill out the form below to download the pdf.</p>
                                    <?php echo get_field('resource_iframe', $resource->ID); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="homepage-featured-content__icons">
            <div class="homepage-featured-content__icons-inner">
                <h2 class="homepage-featured-content__headline"><?php print get_sub_field('icons_headline'); ?></h2>
                <p><?php print get_sub_field('icons_description'); ?></p>
                <?php foreach(get_sub_field('icons') as $icon): ?>
                    <a class="homepage-featured-content__icon" href="<?php print esc_attr($icon['link']); ?>">
                        <span class="fa <?php print esc_attr($icon['icon']); ?>"></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
