<section class="subpage-hero" style="background-image: url('<?php print esc_attr(get_sub_field('image')); ?>');">
    <h1 class="subpage-hero__headline"><?php print get_sub_field('headline'); ?></h1>
    <?php if(get_sub_field('has_feature')): ?>    

	<?php while( have_rows('featured_area') ): the_row(); ?>
    <div class="subpage-hero__shadowbox-container">
        <div class="subpage-hero__shadowbox">
            <div class="subpage-hero__shadowbox-inner">
                <div class="subpage-hero__featured">
                    <img class="subpage-hero__featured-image" src="<?php print esc_attr(get_sub_field('featured_image')); ?>" alt="<?php print esc_attr(get_sub_field('featured_headline')); ?>">
                </div>
                <div class="subpage-hero__featured">
                    <h3 class="subpage-hero__featured-headline"><?php print get_sub_field('featured_headline'); ?></h3>
                    <p class="subpage-hero__featured-content">
                        <?php print get_sub_field('featured_content'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    
    <?php endif; ?>
</section>
