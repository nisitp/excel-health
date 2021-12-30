<?php
$background = get_sub_field('background');
$style = $background['type'] == 'image'
    ? "background-image: url('".esc_attr($background['image'])."');"
    : "";

$button = get_sub_field('button');
$button['link'] = $button['link']['link_to'] == 'internal'
    ? get_permalink($button['link']['link'])
    : $button['link']['link'];

$featured_content = get_sub_field('featured_content');
$featured_content_image = sizeof($featured_content['content']) == 1 && $featured_content['content'][0]['image'];
?>
<section class="fc-hero <?php print $featured_content['enable'] ? 'fc-hero--with-featured-content' : ''; ?>" style="<?php print $style; ?>">
    <?php if($background['type'] == 'video'): ?>
        <div class="fc-hero__video-container">
            <div class="fc-hero__video-overlay"></div>
            <video class="fc-hero__video" autoplay muted loop>
                <source src="<?php print esc_attr($background['video']); ?>" type="video/mp4">
            </video>
        </div>
    <?php endif; ?>
    <h1 class="fc-hero__headline"><?php print esc_html(get_sub_field('headline')); ?></h1>
    <?php if($button['enable']): ?>
        <a class="fc-hero__button" href="<?php print esc_attr($button['link']); ?>"><?php print esc_html($button['text']); ?></a>
    <?php endif; ?>
    <?php if($featured_content['enable']): ?>
        <div class="fc-hero__shadowbox-container">
            <div class="fc-hero__shadowbox">
                <div class="fc-hero__shadowbox-inner">
                    <?php foreach($featured_content['content'] as $content): ?>
                        <?php if($featured_content_image): ?>
                            <div class="fc-hero__feature fc-hero__feature--image">
                                <img class="fc-hero__feature-image" src="<?php print esc_attr($content['image']); ?>" alt="<?php print esc_attr($content['title']); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="fc-hero__feature <?php print $featured_content_image ? 'fc-hero__feature--with-image' : ''; ?>">
                            <h3 class="fc-hero__feature-title"><?php print $content['title']; ?></h3>
                            <p class="fc-hero__feature-desc">
                                <?php print strip_p_tags($content['description']); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
