<?php
$vertical = get_sub_field('icons_layout') == 'vertical';
?>
<section class="homepage-solutions">
    <div class="homepage-solutions__container">
        <div class="homepage-solutions__inner">
            <h2 class="homepage-solutions__title"><?php print get_sub_field('headline'); ?></h2>
            <p class="homepage-solutions__desc"><?php print get_sub_field('description'); ?></p>
            <div class="homepage-solutions__solutions">
                <?php foreach(get_sub_field('icons') as $icon): ?>
               
                    <<?php echo $icon['link'] ? 'a' : 'div'; ?> class="homepage-solutions__solution<?php print $vertical ? " homepage-solutions__solution--vertical" : ""; ?>" href="<?php print esc_attr($icon['link']); ?>">
                        <div class="homepage-solutions__solution-icon"><span class="fa <?php print esc_attr($icon['icon']); ?>"></span></div>
                        <p class="homepage-solutions__solution-desc">
                            <strong><?php print $icon['text']; ?></strong>
                            <?php if($vertical) print "<br>".$icon['description']; ?>
                        </p>
                    </<?php echo $icon['link'] ? 'a' : 'div'; ?>>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
