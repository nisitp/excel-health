<section class="fc-two-columns-with-headline">
	<div class="fc-two-columns-with-headline__inner">
		<div class="fc-two-columns-with-headline__headline">
				 <?php if(get_sub_field('headline')): ?><h3 class="fc-two-columns-with-headline__title"><?php print get_sub_field('headline'); ?></h3><?php endif; ?>
		</div>
		<div class="fc-two-columns-with-headline__content">
	        <div class="fc-two-columns-with-headline__left">
	            <?php
	                if(have_rows('left_flexible_content')) {
	                    while(have_rows('left_flexible_content')) {
	                        the_row();
	                        get_template_part('flexible-content/block', get_row_layout());
	                    }
	                }
	            ?>
	        </div>
	        <div class="fc-two-columns-with-headline__right">
	            <?php
	                if(have_rows('right_flexible_content')) {
	                    while(have_rows('right_flexible_content')) {
	                        the_row();
	                        get_template_part('flexible-content/block', get_row_layout());
	                    }
	                }
	            ?>
	        </div>
		</div>
	</div>
</section>
