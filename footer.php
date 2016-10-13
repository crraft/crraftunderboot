<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package crraftunderboot
 */
?>

<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="site-info">
                      &copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a>

                        <small class="pull-right">Theme: <a href="<?php echo esc_url( __( 'http://crraftunderboot.me/', 'crraftunderboot' ) ); ?>"><?php printf( __( '%s', 'crraftunderboot' ), 'crraftunderboot' ); ?></a> <?php version(); ?>

                        <span class="sep"> | </span>

                        Proudly powered by <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'crraftunderboot' ) ); ?>"><?php printf( __( '%s', 'crraftunderboot' ), 'WordPress' ); ?></a></small>
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<?php if ( is_active_sidebar( 'carousel' ) ): ?>
<script>
$(function(){
   $("div.item:first").addClass("active");
})
</script>
<?php endif; ?>

</body>

</html>
