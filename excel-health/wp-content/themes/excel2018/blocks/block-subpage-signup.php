<?php
$first_name = isset($_GET['first_name']) ? $_GET['first_name'] : "";
$last_name = isset($_GET['last_name']) ? $_GET['last_name'] : "";
$company = isset($_GET['company']) ? $_GET['company'] : "";
$email = isset($_GET['email']) ? $_GET['email'] : "";

$errors = isset($_GET['errors']) && $_GET['errors'] == "true";

?>
<section class="subpage-signup" id="signup-form">
    <div class="subpage-signup__inner">
        <form action="<?php print esc_attr(get_sub_field('endpoint_url')); ?>" class="subpage-signup__form" id="resources">
            <?php if(isset($_GET['success'])): ?>
                <?php print get_sub_field('success_message'); ?>
            <?php else: ?>
                <h2 class="subpage-signup__headline">Sign Up for Updates</h2>
                <?php if($errors): ?><p class="subpage-signup__error">Please check and try again.</p><?php endif; ?>
                <div class="subpage-signup__input-group">
                    <input class="subpage-signup__form-input" type="text" required="required" name="first_name" value="<?php print esc_attr($first_name); ?>" placeholder="First Name *">
                    <input class="subpage-signup__form-input" type="text" required="required" name="last_name" value="<?php print esc_attr($last_name); ?>" placeholder="Last Name *">
                </div>
                <div class="subpage-signup__input-group">
                    <input class="subpage-signup__form-input" type="text" required="required" name="company" value="<?php print esc_attr($company); ?>" placeholder="Company *">
                    <input class="subpage-signup__form-input" type="text" required="required" name="email" value="<?php print esc_attr($email); ?>" placeholder="Email *">
                </div>
                <div class="subpage-signup__input-group">
                    <input class="subpage-signup__form-submit" type="submit" value="Sign Up">
                </div>
            <?php endif; ?>
        </form>
    </div>
</section>
