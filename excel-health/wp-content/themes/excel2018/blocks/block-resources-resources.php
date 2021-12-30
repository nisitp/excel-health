<?php
global $wp_query; 
echo paginate_links();

$filter_type = isset($_GET['type']) ? $_GET['type'] : "null";
$filter_category = isset($_GET['category']) ? $_GET['category'] : "null";

$btpgid=get_queried_object_id();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 0;
$postsPerPage = 12;
$postOffset = $paged * $postsPerPage;

$myposts = get_posts($args);


$tax_query = [];
if($filter_type != "null") {
  if ($filter_type == "press-release") {
    // right now press releases are posts; everything else is a "resource"
    $post_type = array('post');
  } else {
    $tax_query[] = [
        'taxonomy' => 'eh_resource_type',
        'field'    => 'slug',
        'terms'    => $filter_type,
    ];
    $post_type = array('eh_resource','post');      
  }
} else {
    $post_type = array('eh_resource','post');  
}

if($filter_category != "null") {
  $tax_query[] = [
      'taxonomy' => 'eh_resource_category',
      'field'    => 'slug',
      'terms'    => $filter_category,
  ];

}

$args = array(
   'post_type' => $post_type,
   'tax_query' => $tax_query,
   'meta_key'       => 'featured_resource',
   'orderby' => array(
    'meta_value' => 'desc',
    'post_date' => 'desc',
    ),
    'paged' => $paged,
    'posts_per_page'  => $postsPerPage,
);

$postslist = new WP_Query( $args );

// print "<pre>"; print_r($posts); exit;
  // since we had two arrays we need to re-sort them, or else the dates will be wrong.
  /*
  usort($posts, function ($item1, $item2) {
    return $item2->post_date <=> $item1->post_date;
  });
  */

$types = get_terms([
    'taxonomy' => 'eh_resource_type',
    'hide_empty' => false,
]);
$categories = get_terms([
    'taxonomy' => 'eh_resource_category',
    'hide_empty' => false,
]);
?>
<section class="resources-resources">
    <div class="resources-resources__inner">
        <form action="?#resources" class="resource__form resources-resources__form" id="resources">
            <div class="resources-resources__form-select-container resource__form -select-container">
                <label for="type">Type:</label>
                <select class="resources-resources__form-select resource__form-select" name="type" id="type">
                    <option value="null">- Any -</option>
                    <?php foreach($types as $type): ?>
                        <option value="<?php print esc_attr($type->slug); ?>" <?php print $type->slug == $filter_type ? " selected" : ""; ?>>
                            <?php print($type->name); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="resources-resources__form-select-container resource__form-select-container">
                <label for="category">Category:</label>
                <select class="resources-resources__form-select resource__form-select" name="category">
                    <option value="null">- Any -</option>
                    <?php foreach($categories as $category): ?>
                        <option value="<?php print esc_attr($category->slug); ?>" <?php print $category->slug == $filter_category ? " selected" : ""; ?>>
                            <?php print($category->name); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="resources-resources__form-select-container resource__form-select-container">
                <input class="resources-resources__form-submit resource__form-submit" type="submit" value="Search">
            </div>
        </form>
        <?php
          // Pagination fix
          $temp_query = $wp_query;
          $wp_query   = NULL;
          $wp_query   = $postslist;
        ?>          
          
        <?php if ( $postslist->have_posts() ): 
          while ( $postslist->have_posts() ) {
            $postslist->the_post(); 
          // really need to sync this with the homepage version for consistency
//          print "here w/ <pre>"; print_r($post); print "</pre>"; exit;

          ?>
          <div class="resources-resources__resource resource">
          <?php get_template_part('template-parts/partials/'.$post->post_type, 'teaser'); ?>
          </div>
          <?php
          }
        
        else: ?>
          <p>Sorry - no results matched your search. Please try again with a more limited set of search terms.</p>
        <?php endif; ?>
        
    </div>
    <div class="pagination resources-resources__pagination">
    <?php
      wp_reset_postdata();

      // Custom query loop pagination
      next_posts_link( 'Older Resources', $custom_query->max_num_pages );      
      previous_posts_link( 'Newer Resources' ); 

      
      // Reset main query object
      $wp_query = NULL;
      $wp_query = $temp_query;
      
    ?>        
    </div>
    
</section>
