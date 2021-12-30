<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package excel_health
 */

?>
</div>

<footer class="footer">
    <div class="footer__inner">
        <div class="footer__nav">
            <?php wp_nav_menu(['theme_location' => 'footer']); ?>
        </div>
        <div class="footer__copyright">
            &copy; <?php echo date('Y'); ?> Excel Health. All rights reserved.
            <?php wp_nav_menu(['theme_location' => 'footer-legal']); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- <script type="text/javascript">
_linkedin_partner_id = "454313";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=454313&fmt=gif" />
</noscript> -->

<script type="text/javascript">

    (function(i,s,o,g,r,a,m){i['SLScoutObject']=r;i[r]=i[r]||function(){

    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

    })(window,document,'script','https://scout-cdn.salesloft.com/sl.js','slscout');

    slscout(["init", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0IjoxMTgyOH0.tJIwQOzr1O3gfjWQsoT3B4DqaHJgAAeFX0IPOJfPjX0"]);

</script>
</body>
</html>
