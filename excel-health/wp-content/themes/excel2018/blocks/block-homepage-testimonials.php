<section class="homepage-testimonials">
    <div class="homepage-testimonials__inner">
       <div class="homepage-testimonials__testimonials">
            <?php foreach(get_sub_field('testimonials') as $testimonial): ?>
                <div class="homepage-testimonials__testimonial">
                    <h2 class="homepage-testimonials__testimonial-name"><?php print $testimonial['name']; ?></h2>
                    <p class="homepage-testimonials__testimonial-content"><?php print $testimonial['testimonial']; ?></p>
                    <small class="homepage-testimonials__testimonial-position"><?php print $testimonial['position']; ?></small>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
