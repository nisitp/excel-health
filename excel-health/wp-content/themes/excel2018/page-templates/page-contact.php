<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<?php
	get_template_part( 'template-parts/banner' );
?>
<div id="primary" class="content-area container-sub">
    <main id="main" class="site-main" role="main">
        <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );				

			endwhile; // End of the loop.
		?>
    </main><!-- #main -->
</div><!-- #primary -->

<div class="grey-container clear">

    <div class="col-30 left text-center">
        <i class="fa fa-fw fa-4x fa-phone green" aria-hidden="true"></i>
        <h4>Call Us</h4>
        <p><a href="tel:6788131590">(678) 813-1590</a></p>
    </div>

    <div class="col-30 left text-center">
        <i class="fa fa-fw fa-4x fa-envelope green" aria-hidden="true"></i>
        <h4>Email Us</h4>
        <p><a href="mailto:info@excelhealthgroup.com">info@excelhealthgroup.com</a></p>
    </div>

    <div class="col-30 left text-center">
        <i class="fa fa-fw fa-4x fa-map-marker green" aria-hidden="true"></i>
        <h4>Follow Us</h4>
        <a href="https://twitter.com/ExcelHealthG" target="_blank">
            <i class="fa fa-fw fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="https://www.linkedin.com/company/excel-health-group/ " target="_blank">
            <i class="fa fa-fw fa-linkedin" aria-hidden="true"></i>
        </a>
    </div>

</div>

<div class="col-50 left cform">
    <iframe src="https://go.excelhealthgroup.com/l/501091/2018-05-11/ksxk9" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
</div>

<div class="col-50 right">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.638253758245!2d-84.37309528493243!3d33.84743853594279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f50c0011d9591f%3A0x8d5c44438a338e91!2s3340+Peachtree+Rd+NE%2C+Atlanta%2C+GA+30326%2C+USA!5e0!3m2!1sen!2sza!4v1504519060102" height="650" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
</div>

<?php
get_footer();
