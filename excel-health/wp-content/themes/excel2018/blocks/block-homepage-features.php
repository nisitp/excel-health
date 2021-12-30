<section class="homepage-features">
    <div class="homepage-features__container">
        <div class="homepage-features__inner">
            <h2 class="homepage-features__title"><?php print get_sub_field('headline'); ?></h2>
            <p class="homepage-features__desc"><?php print get_sub_field('description'); ?></p>
            <div class="homepage-features__tabs">
                <?php foreach(get_sub_field('tabs') as $i => $tab): ?>
                    <a class="homepage-features__tab<?php print $i == 0 ? " homepage-features__tab--active" : ""; ?>" href="#tab<?php print $i ?>">
                        <?php print $tab['title']; ?>
                        <i class="fa <?php print $i == 0 ? "fa-chevron-up" : "fa-chevron-down"; ?>" aria-hidden="true"></i>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="homepage-features__tab-content homepage-features__tab-content--arr0">
                <?php foreach(get_sub_field('tabs') as $i => $tab): ?>    
                    <div id="tab<?php print $i ?>" class="homepage-features__tab-content-inner<?php print $i == 0 ? " homepage-features__tab-content-inner--active" : ""; ?>">
                        <?php print $tab['content']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
