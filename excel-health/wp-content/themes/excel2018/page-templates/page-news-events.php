<?php
/**
 * Template Name: News and Events
 */

get_header();

get_template_part('template-parts/banner');

$posts = get_posts([
    'post_type' => 'post',
    'numberposts' => -1,
 ]);

  $pid = get_the_ID();// save for later

?>

<div class="container clear">
    <div class="col-50 left">
        <h2>News</h2>
        <?php foreach($posts as $post): ?>
          <div class="news_item">
            <p class="news_item__headline"><a href="<?php print get_permalink($post); ?>"><?php print esc_html($post->post_title); ?></a></p>
            <p class="news_item__date">
                <?php print get_the_date('',$post->ID); ?>
            </p>
          </div>
            
        <?php endforeach; ?>

    </div>

    <div class="col-50 left calendar">

        <h2>Events</h2>

        <ul class="events_list">
            <?php
                    $event_archive_query = new WP_Query('showposts=-1&post_type=tribe_events');
                    while ($event_archive_query->have_posts()) : $event_archive_query->the_post();
            ?>
            <li class="events_list__event">
                        <span class="events_list__event__date">
                            <?php
                                if (tribe_event_is_all_day())
                                    echo tribe_get_start_date(null, false, 'j F');
                                else
                                    echo tribe_get_start_date(null, false, 'j F')
//                                        .' at ' . tribe_get_start_date(null, true, 'h:i')
                                    ;
                            ?>
                        </span>
                        
                        <span class="events_list__event__title">
                        
                        <?php 
                          $link = tribe_get_event_meta( get_the_ID(), '_EventURL', true );
                          if ($link != "#"): 
                        ?>
                            <a href="<?php
            						echo tribe_get_event_meta( get_the_ID(), '_EventURL', true );
            						?>" target="_blank">
                                <?php the_title(); ?>
                            </a>
                        <?php else: ?>
                            <?php the_title(); ?>    
                        <?php endif; ?>
                            
                        </span>

            </li>

            <?php endwhile; ?>

        </ul>

        <a id="inline" href="#data" class="btn btn-white btn-sml fancybox">Meet Us</a>

        <div style="display:none">
            <div id="data" class="team-desc">

                <?php echo do_shortcode( '[contact-form-7 id="178" title="Meet Us"]' ); ?>

            </div>
        </div>
    </div>
</div>

<?php 
if(have_rows('content_blocks', $pid)):
    while(have_rows('content_blocks', $pid)):
        the_row();
        get_template_part('blocks/block', get_row_layout());
    endwhile;
endif;
?>


<?php
get_footer();
