<?php
/**
 * Template Name: New News and Events 
 */

get_header(); ?>

<?php
	get_template_part( 'template-parts/banner' );
?>

<div class="container mb clear">
    <div class="col-70 left">

        <h2>In the News</h2>

        <div class="latest-news">
            <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div>
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                <span class="posted-on">
                    <?php the_date(); ?>
                </span>
            </div>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endwhile; ?>
        </div>

        <br><a href="/in-the-news" class="btn btn-white btn-sml">View more articles</a>

    </div>

    <div class="col-30 right calendar">

        <h2>Events </h2>
        <h3>
            See You There!
        </h3>

        <ul>
            <?php
                    $event_archive_query = new WP_Query('showposts=2&post_type=tribe_events');
                    while ($event_archive_query->have_posts()) : $event_archive_query->the_post();
            ?>
            <li>
                        <span class="date">
                            <?php
                                if (tribe_event_is_all_day())
                                    echo tribe_get_start_date(null, false, 'j F');
                                else
                                    echo tribe_get_start_date(null, false, 'j F')
//                                        .' at ' . tribe_get_start_date(null, true, 'h:i')
                                    ;
                            ?>
                        </span>
                <a href="<?php
						echo tribe_get_event_meta( get_the_ID(), '_EventURL', true );
						?>" target="_blank">
                    <?php the_title(); ?>
                </a>
            </li>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
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

<div class="grey-container article-links clear">
    <h2>
        Article  Links
    </h2>
    <div class="article-block left">
        
        <h3>
            Home Health Adherence Slashes Medicare Costs, Readmissions
        </h3>
        <p>
            The home health care industry has seen consistent reimbursement cuts over the last several years, forcing providers to adapt. There are several reasons regulators and lawmakers think home health can get by with less, but overcoming stigmas about the industry and thinking like an economist can help boost home health’s reputation.
        </p>
        <a class="btn btn-white btn-sml" href="https://homehealthcarenews.com/2018/03/home-health-adherence-slashes-medicare-costs-readmissions/">Read Article</a>
    </div>

    <div class="article-block left">
        <h3>Home Health and Hospice Admissions, Utilization Trending Up</h3>
        <p>
            Home health care and hospice admissions and utilization are both on the rise, according to the latest data report from Excel Health. Hospice admissions grew 4.6% from the third quarter of 2016 to the third quarter of 2017, rising to 313,500, according to the report, which is based on 100% of the most recent Medicare Part A and B claims data. Excel Health offers on-demand, cloud-based data solutions and has robust medical databases.
        </p>
        <a class="btn btn-white btn-sml" href="https://homehealthcarenews.com/2018/03/home-health-and-hospice-admissions-utilization-trending-up/ ">Read Article</a>
    </div>
    
    <div class="article-block left">
        <h3>The Florida Home Care Connection </h3>
        <p>
            The Official Publication of the Florida Home Care Connection
        </p>
        <a class="btn btn-white btn-sml" href="https://www.excelhealthgroup.com/wp-content/uploads/HCAF_Summer17_prf9.pdf">Download Publication </a>
    </div>
    
</div>

<div class="container">

    <?php if(have_rows('pres-web')): ?>

    <?php while( have_rows('pres-web')): the_row(); ?>

    <div class="pres-web-block">
        <h2>
            <?php if( get_sub_field('category') ): ?>
            <img src="https://www.excelhealthgroup.com/wp-content/themes/excel-health/images/chevron.png" alt=""> <?php echo get_sub_field('category'); ?>
            <?php endif; ?>

        </h2>

        <div class="left col-25">
            <img src="<?php echo get_sub_field('thumbnail'); ?>" alt="<?php echo get_sub_field('heading'); ?>" />
        </div>
        <div class="oh">
            <h3>
                <?php echo get_sub_field('heading'); ?>
            </h3>
            <p><?php echo get_sub_field('text'); ?></p>

            <a class="btn btn-green" href="<?php echo get_sub_field('download'); ?>">Read it now</a>

        </div>
    </div>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endwhile; ?>

    <?php endif; ?>

    <div class="hr mb"></div>

    <p class="mb text-center">
        <a class="btn btn-green" href="/resources/">Learn More!</a>
    </p>
</div>

<div class="hr mn"></div>
<section class="partners">

    <div class="left">
        <div class="download text-center clear">
            <img src="/wp-content/uploads/article-links.jpg" alt="" />
        </div>
    </div>

    <div class="oh">
        <div class="text">
            <h2>WE KNOW WHAT IT TAKES TO HELP YOU BECOME A MARKET LEADER</h2>
            <p>Excel Health enables you to thrive in the new paradigm of value-based care. With access to complete Medicare Part A and Part B datarefreshed quarterly with only a one quarter lag, (over 1.25 billion claims annually), Excel Health has one of the most current, comprehensive, and robust medical databases in the world powering its Home Health and Hospice portals. Our goal is for care networks to be constructed and providers selected based on care efficacy (superior outcomes) and care efficiency (reduced utilization). The potential of our suite of on-demand, cloud-based data solutions to profoundly impact healthcare and patient lives is immediately evident.
            </p>
            <a href="<?php bloginfo('url'); ?>/contact-us/" class="btn btn-sml btn-white" target="_blank">Contact Us</a>
        </div>
    </div>

</section><!-- end partners -->


<?php
get_footer();
