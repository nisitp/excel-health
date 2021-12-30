<section class="content-teasers">
    <div class="content-teasers__inner">
        <?php foreach(get_sub_field('icons') as $icon): ?>
            <section class="content-teaser">
                <?php if($icon['link']): ?><a href="<?php print esc_attr($icon['link']);  ?>"><?php endif; ?><div class="content-teaser__icon icon__<?php print $icon['icon_color']; ?>"><span class="fa <?php print esc_attr($icon['icon']); ?>"></span></div> <?php if($icon['link']): ?></a><?php endif; ?>
                <h3 class="content-teaser__title"><?php if($icon['link']): ?><a href="<?php print esc_attr($icon['link']); ?>"><?php endif; ?><?php print $icon['text']; ?><?php if($icon['link']): ?></a><?php endif; ?></h3>
                <p class="content-teaser__desc">
                    <?php print $icon['description']; ?>
                </p>
                 <?php if($icon['link']): ?>
	                <div class="content-teaser__button">
	                	<a href="<?php print esc_attr($icon['link']);  ?>" class="button">Learn More</a>
	                </div>
                <?php endif; ?>
            </section>
        <?php endforeach; ?>
    </div>
</section>
    



