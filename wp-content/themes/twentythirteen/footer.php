<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

</div><!-- #main -->
<footer id="colophon" class="site-footer row clearfix" role="contentinfo">
    <div id="floating-footer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sk.png" alt="Simon Kerr"/>
        <p class="h1"><a href="/web">webby</a>, <a href="/art">arty</a>, <a href="/">bloggy</a> stuff.</p>

    </div>
    <?php get_sidebar('main'); ?>

    <div class="site-info col-sm-12">
        <?php do_action('twentythirteen_credits'); ?>
        <a href="<?php echo esc_url(__('http://wordpress.org/', 'twentythirteen')); ?>" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'twentythirteen'); ?>"><?php printf(__('Proudly powered by %s', 'twentythirteen'), 'WordPress'); ?></a>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" ></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47024193-1', 'justthisguy.co.uk');
  ga('send', 'pageview');

</script>
</body>
</html>