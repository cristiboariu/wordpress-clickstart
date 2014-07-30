<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package earthpro
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php 	
		if ( !function_exists( 'earthpro_footer' ) ) {?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'earthpro' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'earthpro' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'earthpro' ), 'earthpro', '<a href="http://www.vathemes.com" rel="designer">VA Themes</a>' ); ?>
			</div><!-- .site-info -->
		<?php } else {earthpro_footer();} ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
