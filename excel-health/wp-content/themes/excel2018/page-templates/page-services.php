<?php
/**
 * Template Name: Services Page
 */

get_header(); ?>

<?php
	get_template_part( 'template-parts/banner' );
?>
<div id="primary" class="content-area container-sub services">
    <main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- Home -->
        <?php if ( is_page(22)) { ?>

        <header class="entry-header text-center">
            <img src="<?php bloginfo('template_directory'); ?>/images/house.jpg" />
            <h1 class="entry-title green text-center">Home Health</h1>
            <br />
        </header><!-- .entry-header -->

        <div class="entry-content">
            <h3 style="margin:0;"><span style="color: #c1d749;">Benchmark your hospitalization rates, speed of care, number of therapy vs. nursing visits, and patient mix versus your peers</span></h3>
        </div><!-- .entry-content -->

        <?php ; } ?>


        <!-- Hospice -->
        <?php if ( is_page(24)) { ?>

        <header class="entry-header text-center">
            <img src="<?php bloginfo('template_directory'); ?>/images/heart.jpg" />
            <h1 class="entry-title lt-blue text-center">Hospice</h1>
            <br />
        </header><!-- .entry-header -->

        <div class="entry-content">
            <h3 style="margin:0;"><span style="color: #6698d4;">Benchmark quality metrics like hospitalization rate, ALOS and intensity of care last 7 days, versus your peers, county and state averages</span></h3>
        </div><!-- .entry-content -->

        <?php ; } ?>



        <!-- Hospital -->
        <?php if ( is_page(124)) { ?>

        <header class="entry-header text-center">
            <img src="<?php bloginfo('template_directory'); ?>/images/hospital.jpg" />
            <h1 class="entry-title dk-blue text-center">Hospital</h1>
            <br />
        </header><!-- .entry-header -->

        <?php ; } ?>

    </main><!-- #main -->
</div><!-- #primary -->

<!-- Services Diagram -->

<?php if ( is_page(22)) { ?>

<div class="services-diagram">
    <a href="<?php echo get_bloginfo('template_directory'); ?>/images/home-diagram.jpg" class="fancybox">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/home-diagram.jpg">
    </a>

    <div class="text-center">
        <br />Click on the image to zoom in
        <br /><br />
        <a class="btn btn-white" href="<?php echo get_bloginfo('url'); ?>/request-a-demo/">REQUEST DEMO</a>
        &nbsp; &nbsp;
        <a class="btn btn-lt-blue" href="<?php echo get_bloginfo('url'); ?>/solutions/hospice/">Hospice</a>
    </div>

    <?php ; } ?>

    <?php if ( is_page(24)) { ?>

    <div class="services-diagram">
        <a href="<?php echo get_bloginfo('template_directory'); ?>/images/hospice-diagram.jpg" class="fancybox">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/hospice-diagram.jpg">
        </a>

        <div class="text-center">
            <br />Click on the image to zoom in
            <br /><br />
            <a class="btn btn-white" href="<?php echo get_bloginfo('url'); ?>/request-a-demo/">REQUEST DEMO</a>
            &nbsp; &nbsp;
            <a class="btn btn-green" href="<?php echo get_bloginfo('url'); ?>/solutions/home-health">Home Health</a>
        </div>

        <?php ; } ?>

        <?php if ( is_page(124)) { ?>
        
        <div class="services-diagram">
            <a href="<?php echo get_bloginfo('template_directory'); ?>/images/hospital-diagram.jpg" class="fancybox">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/hospital-diagram.jpg">
            </a>

            <div class="text-center">
                <br />Click on the image to zoom in
                <br /><br />
                <a class="btn btn-green" href="<?php echo get_bloginfo('url'); ?>/solutions/home-health">Home Health</a>
                &nbsp; &nbsp;
                <a class="btn btn-lt-blue" href="<?php echo get_bloginfo('url'); ?>/solutions/hospice/">Hospice</a>
                &nbsp; &nbsp;
                <a class="btn btn-white" href="<?php echo get_bloginfo('url'); ?>/request-a-demo/">REQUEST DEMO</a>
            </div>

            <?php ; } ?>

            <!-- Home -->
            <?php if ( is_page(22)) { ?>

            <div class="green-container text-center clear">
                <h2><?php the_field('featured_text'); ?></h2>
            </div>

            <div class="mockup">
                <a href="<?php echo get_bloginfo('template_directory'); ?>/images/home-health-screen.jpg" class="fancybox">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/home-health-mockup.jpg">
                </a>
                <br />Click on the image to zoom in
            </div>

            <?php ; } ?>
            
            <!-- Hospice -->
            <?php if ( is_page(24)) { ?>

            <div class="lt-blue-container text-center clear">
                <h2><?php the_field('featured_text'); ?></h2>
            </div>

            <div class="mockup">
                <a href="<?php echo get_bloginfo('template_directory'); ?>/images/hospice-screen.png" class="fancybox">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/hospice-mockup.jpg">
                </a>
                <br />Click on the image to zoom in<br /><br />
            </div>

            <?php ; } ?>

<?php
get_footer();
