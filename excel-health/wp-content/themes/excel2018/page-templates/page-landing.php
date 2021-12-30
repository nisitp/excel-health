<?php
/**
 * Template Name: Basic Page with Content Blocks
 */

get_header('new');

if(have_rows('content_blocks')):
    $c = 0;
    while(have_rows('content_blocks')):
        the_row();
        get_template_part('blocks/block', get_row_layout());
    endwhile;
endif;

get_footer();
