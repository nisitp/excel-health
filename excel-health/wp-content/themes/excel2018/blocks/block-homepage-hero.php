<?php
$type = get_sub_field('type');
$style = $type == 'image'
    ? "background-image: url('".esc_attr(get_sub_field('image'))."');"
    : "";
?>
<section class="homepage-hero" style="<?php print $style; ?>">
    <?php if($type == 'video'): ?>
        <div class="homepage-hero__video-container">
            <div class="homepage-hero__video-overlay"></div>
            <video class="homepage-hero__video" autoplay muted loop>
                <source src="<?php print esc_attr(get_sub_field('video')); ?>" type="video/mp4">
            </video>
        </div>
    <?php endif; ?>
    <h1 class="homepage-hero__headline"><?php print get_sub_field('headline'); ?></h1>
    <a class="homepage-hero__button" href="<?php print esc_attr(get_sub_field('button_link')); ?>"><?php print get_sub_field('button_text'); ?></a>
    <div class="homepage-hero__shadowbox-container">
        <div class="homepage-hero__shadowbox">
            <div class="homepage-hero__shadowbox-inner">
                <?php foreach(get_sub_field('teaser') as $teaser): ?>
                    <div class="homepage-hero__feature">
                        <h3 class="homepage-hero__feature-title"><?php print $teaser['title']; ?></h3>
                        <p class="homepage-hero__feature-desc">
                            <?php print strip_p_tags($teaser['description']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
