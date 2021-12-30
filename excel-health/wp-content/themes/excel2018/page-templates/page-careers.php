<?php
/**
 * Template Name: Careers
 */

get_header(); ?>

<!-- SUB BANNER -->
<div class="sub-banner">

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
        <p>Come work with us!</p>
        <a href="/career-opportunities/" class="btn btn-lt-blue">View Open Positions</a>
    </div>
</div>
<!-- SUB BANNER END -->

<div id="primary" class="content-area container-sub">
    <main id="main" class="site-main" role="main">


        <h2>About Excel Health</h2>

        <h4><img class="lazy left lazy-loaded" src="/wp-content/themes/excel-health/images/chevron.png" data-lazy-type="image" data-lazy-src="/wp-content/themes/excel-health/images/chevron.png" alt="" data-pin-nopin="true"><noscript><img class="left" src="/wp-content/themes/excel-health/images/chevron.png" alt="" data-pin-nopin="true" /></noscript> &nbsp; <b>We deliver critical healthcare analytics to positively impact every care path in America</b></h4>
        <p>Excel Health’s mission is to enable every provider to thrive in the new paradigm of value-based care. With access to complete Medicare Part A and part B data, refreshed quarterly with only a one quarter lag, (over 1.25 billion claims annually), Excel Health has one of the most current, comprehensive, and robust medical databases in the world powering its Home Health and Hospice portals. Our goal is for care networks to be constructed and providers selected based on care efficacy (superior outcomes) and care efficiency (reduced utilization). The potential of our suite of on-demand, cloud-based data solutions to profoundly impact healthcare and patient lives is immediately evident.</p>

        <div class="mb"></div>
        <h4 class="text-center mb">
            <a href="http://www.modernhealthcare.com/community/best-places/2018/3523291/excel-health/" target="_blank" style="color: #0d2850;">
                <img src="/wp-content/uploads/Trophy-icon.jpg" alt="" class="aligncenter">
                <b>#25 on the best Places to work</b>
                <br>
                by Modern Healthcare
            </a>
        </h4>

        <h2> Employee Perks</h2>

        <div class="clear perks">
            <div class="col-25 left text-center">
                <img src="/wp-content/uploads/icon-1.jpg">
                <p>
                    Stock Options
                </p>
            </div>
            <div class="col-25 left text-center">
                <img src="/wp-content/uploads/icon-2.jpg">
                <p>
                    Career growth in a startup environment
                </p>
            </div>
            <div class="col-25 left text-center">
                <img src="/wp-content/uploads/icon-3.jpg">
                <p>
                    Health, dental and vision benefits
                </p>
            </div>
            <div class="col-25 left text-center">
                <img src="/wp-content/uploads/icon-4.jpg">
                <p>
                    Innovative and entrepenurial ideas
                </p>
            </div>

            <div class="col-25 left text-center">
                <img src="/wp-content/uploads/icon-5.jpg">
                <p>
                    Fun team building activities
                </p>
            </div>
            <div class="col-25 left text-center">
                <img src="/wp-content/uploads/icon-6.jpg">
                <p>
                    Flexible Work Environment and PTO
                </p>
            </div>
            <div class="col-25 left text-center">
                <img src="/wp-content/uploads/icon-7.jpg">
                <p>
                    Unlimited locally brewed coffee, tea and fruit water
                </p>
            </div>
            <div class="col-25 left text-center">
                <img src="/wp-content/uploads/icon-8.jpg">
                <p>
                    Casual and modern offices
                </p>
            </div>
        </div>

        <h2>
            Culture
        </h2>

        <p>Our office space in Atlanta and Philadelphia reside in the WeWork technology startup community, which supports services for entrepreneurs, startups and small businesses. Offering locally brewed coffee, after-hour beer and frequent networking events, our offices are ideal for generating innovation and new ideas.</p>
        <div class="left col-45">
            <img src="/wp-content/uploads/Atlanta.jpg" alt="" class="">
            <a href="https://www.google.com/maps/place/Tower+Place+100,+3340+Peachtree+Rd+NE,+Atlanta,+GA+30326,+USA/@33.8474454,-84.373141,17z/data=!3m1!4b1!4m5!3m4!1s0x88f50f5f5b567887:0x78ff46f549aa0c24!8m2!3d33.8473727!4d-84.3708801">Directions</a>
        </div>

        <div class="right col-45">
            <img src="/wp-content/uploads/Philadelphia.jpg" alt="" class="">
            <a href="https://www.google.com/maps/place/Five+Penn+Center,+1601+Market+St,+Philadelphia,+PA+19103,+USA/@39.9531321,-75.1695471,17z/data=!3m1!4b1!4m5!3m4!1s0x89c6c631c6b5ca73:0x2ea8d77f6b654b6b!8m2!3d39.9530971!4d-75.1673521">Directions</a>
        </div>
        <div class="clear">

        </div>

        <br>
        <h4 class="tagline">
            <img src="https://www.excelhealthgroup.com/wp-content/themes/excel-health/images/chevron.png" alt="">
            Excel Health encourages diverse perspectives and celebrates curiosity, initiative, drive and a genuine passion for making a difference. Our collaborative culture is anchored by trust, transparency and inclusion.
        </h4>

        <p>
            Excel Health is expanding rapidly! We are seeking entrepreneurial talent in the fields of data science, development, sales and customer success. Thank you for your interest, we look forward to sharing our story with you!
        </p>

        <div class="clear mb"></div>

    </main><!-- #main -->
</div><!-- #primary -->

<div class="grey-container clear">
    <div class="container-sub">
        <div class="text-center"><a href="/career-opportunities/" class="btn btn-green">View Open Positions</a></div>
        <br>
        <p>If you need assistance with completing an application, please contact our recruiters
            at <a href="mailto:careers@excelhealthgroup.com">careers@excelhealthgroup.com</a>
        </p>
        <br>
        <p>
            <em>
                Excel Health is an equal opportunity employer. All persons will receive consideration for employment without regard to race,
                color, gender, sexual orientation, gender identity or expression, religion, national origin, marital status, age, disability,
                handicap, veteran status, genetic information or any other protected status as recognized by federal, state or local laws.
            </em>
        </p>
    </div>
</div>

<?php
get_footer();
