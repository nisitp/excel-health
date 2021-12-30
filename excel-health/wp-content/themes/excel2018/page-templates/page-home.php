<?php
/**
 * Template Name: Home
 */

get_header('new');

if(have_rows('content_blocks')):
    $c = 0;
    while(have_rows('content_blocks')):
        the_row();
        
        // accommodate both "block-" templates and newer "flexible-content" templates
        if (file_exists( get_template_directory() . "/flexible-content/block-" . get_row_layout() . ".php")) {
          $tpl = "flexible-content";
        } else { $tpl = "blocks"; }
        
//        print "looking for $tpl" . "/block-" . get_row_layout() . "<br />";
        if(get_sub_field('split') === true || $c != 0):
            if($c == 0):
?>
<div class="homepage-half">
    <div class="homepage-half__inner">
<?php
                get_template_part($tpl.'/block', get_row_layout());
                $c++;
            else:
                get_template_part($tpl.'/block', get_row_layout());
?>
    </div>
</div>
<?php
                $c = 0;
            endif;
        else:
            get_template_part($tpl.'/block', get_row_layout());
        endif;
    endwhile;
endif;

get_footer();
