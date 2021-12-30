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
 
if ($_GET["redir"]) ob_start(); // buffer output so we can redirect.
get_header('general');
?>
<div id="content" class="site-content legacy">







