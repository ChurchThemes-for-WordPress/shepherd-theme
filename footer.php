<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Shepherd
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-inner">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'shepherd' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'shepherd' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'shepherd' ), 'Shepherd Pro', '<a href="https://upthemes.com/" rel="designer">UpThemes</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .site-footer-inner -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
