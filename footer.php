
<?php
/**
 * The template for displaying the footer
 * 
*/
?>
<footer>
    <?php  if (get_option( 'zebe_option_footer_layout', 'Layout1' ) == "layout2") : ?>
        <div class="footer-inner <?php echo get_option( 'zebe_option_footer_layout'); ?>">
        <?php get_template_part( 'template-parts/footer/footer', 'layout_2' ); ?>
    <?php else: ?>
        <div class="footer-inner <?php echo get_option( 'zebe_option_footer_layout'); ?>">
        <?php get_template_part( 'template-parts/footer/footer', 'layout_1' ); ?>
    <?php endif; ?>
    </div>
    <div class="copyright">
        <?php echo get_option( 'zebe_option_copyright_name', '' ); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>