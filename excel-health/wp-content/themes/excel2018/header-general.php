<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package excel_health
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.6.1/iframeResizer.min.js"></script>
	<script src="//app-sj27.marketo.com/js/forms2/js/forms2.min.js"></script>
</head>
<body <?php body_class(); ?>>	
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); }  else { ?>	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4G8GCH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php } ?>

<?php get_alert(); ?>
<div class="topbar">
    <div class="topbar__inner">
        <div class="topbar__phone"><a href="tel:678.813.1590">678.813.1590</a></div>
        <div class="topbar__nav">
            <?php wp_nav_menu(['theme_location' => 'topbar']); ?>
	    <?php if (0): ?>
            <form class="topbar__form" action="https://prod1.excelhealthportal.com/hos/login.ashx" method="POST">
                <input type="text" name="username" placeholder="Username">	
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login">
            </form>
	    <?php endif; ?>
        </div>
    </div>
</div>

<div class="navigation">
    <div class="navigation__inner">
        <a class="navigation__logo" href="<?php echo get_home_url(); ?>">
            <h1>Excel Health</h1>
        </a>
        <div class="navigation__nav">
            <?php wp_nav_menu(['theme_location' => 'menu-1']); ?>
        </div>
    </div>
</div>
