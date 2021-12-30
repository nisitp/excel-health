<?php 
  /* Generate our query */
  $category = get_sub_field('category');

  global $wp_query; 
//    echo paginate_links();

  $btpgid=get_queried_object_id();
//  $paged = (get_query_var('paged')) ? get_query_var('paged') : 0;
  $paged = false;
  $postsPerPage = get_sub_field('items_to_show');
  
  $postOffset = $paged * $postsPerPage;
    
  $tax_query = [];

  if (is_array($category)) {
    $tax_query[] = [
        'taxonomy' => 'eh_resource_category',
        'field'    => 'term_id',
        'terms'    => $category,
    ];
  }

  $post_type = array('post','eh_resource');         
//  $post_type = array('eh_resource');

  $resources = [];    
  $stickies = get_option( 'sticky_posts' );
  $stickies_and_this = $stickies;
  $stickies_and_this[] = get_the_ID(); // used for the "not in" clause for non-stickies to make sure we don't pull the current page

  $args = array(
     'post_type' => $post_type,
     'post__in' => $stickies,
     'post__not_in' => get_the_ID(),
     'tax_query' => $tax_query,
      'paged' => $paged,
      'posts_per_page'  => $postsPerPage,
      'ignore_sticky_posts' => 1 // This SEEMS backwards but see https://wordpress.stackexchange.com/questions/202896/query-only-sticky-posts          
  );
  
  if (get_sub_field('randomize')) {
    $args['orderby'] = 'rand';
  } else {
    $args['orderby'] = array('post_date' => 'desc');
  }


  if (get_sub_field('limit_to_featured') == true) {
    $args['meta_value'] = '1';
    
    if (is_front_page()) {
     $args['meta_key'] = 'promote_home';
    } else {
      $args['meta_key'] = 'promote_related';
    }  
  } 


  $postslist = new WP_Query( $args );
  if ( $postslist->have_posts() ) { 
    while ( $postslist->have_posts() ) { 
        $postslist->the_post();
        $resources[] = $post;
    }
  }


  if ($postslist->post_count < $postsPerPage) {  
    // now get the non-sticky ones
    $remainder = $postsPerPage - $postslist->post_count;  
  //  print "<div style='margin-bottom:50px;'>here w/ $postsPerPage and " . $postslist->post_count . " = $remainder </div>"; exit;
    unset($args["post__in"]);
    $args['post__not_in'] = $stickies_and_this;
    $args['posts_per_page'] = $remainder;
    
    $postslist = new WP_Query( $args );
    if ( $postslist->have_posts() ) { 
      while ( $postslist->have_posts() ) { 
          $postslist->the_post();
          $resources[] = $post;
      }
    }
    
//    print "<pre>"; print_r($args); exit;  
  }    
  

  
  if (count($resources)):
?>
<?php $addClass = get_sub_field('class'); ?>
<section class="fc-portfolio-view <?php print $addClass;?>">
  <?php if(get_sub_field('headline')): ?>
      <h2 class="fc-teaser-grid__title"><?php print get_sub_field('headline'); ?></h2>
  <?php endif; ?>
  <div class="fc-portfolio-view__items">
    <?php
      
      // save our original $post object
      global $post;
      $oldpost = $post;
      
      // loop through our items
    foreach($resources as $post): ?>    

      <div class="fc-portfolio-view__items--item">
        <?php get_template_part('template-parts/partials/'.$post->post_type, 'teaser'); ?>      
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php 
  //reset post
  $post = $oldpost; wp_reset_postdata();
  endif;
?>
