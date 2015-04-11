</div>
<?php if (is_active_sidebar('mba_footer1_sidebar')): ?>
<div class="footer-widgets">
    <div class="row">
        <?php dynamic_sidebar( 'mba_footer1_sidebar' ); ?>
        <?php dynamic_sidebar( 'mba_footer2_sidebar' ); ?>
        <?php dynamic_sidebar( 'mba_footer3_sidebar' ); ?>
        <?php dynamic_sidebar( 'mba_footer4_sidebar' ); ?>
    </div>
</div>
<?php endif; ?>
<footer class="site-footer">
    <div class="row">
        <?php if ( has_nav_menu( 'footer-menu' ) ) {
            wp_nav_menu( array( 'theme_location' => 'mba_footer_menu', 'menu_class' => 'inline-list', 'depth' => 1, 'container' => 'nav', 'container_class' => 'footer-menu medium-6 columns' ) );
            } ?>
        <div class="footer-text medium-6 columns"><p><?php _e( 'Mamba by' , 'mba' ); ?> <a href="http://www.jocoxdesign.co.uk/" title="<?php _e( 'Jo Cox Design' , 'mba' ); ?>" target="_blank"><?php _e( 'Jo Cox Design' , 'mba' ); ?></a></div>
    </div>
</footer>
<p id="back-top">
    <a href="#top"><span><i class="fa fa-chevron-up"></i></span></a>
</p>
<?php wp_footer(); ?>
</body>
</html>