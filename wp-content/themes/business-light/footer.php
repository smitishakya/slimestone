<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_Light
 */

?>
<footer id="colophon" class="site-footer">
	<div class="footer-main">
		<div class="container">
			<div class="row">
				<div class="footer-widget_column">
					<?php
					if (is_active_sidebar('footer-1')) {
						dynamic_sidebar('footer-1');
					}
					?>
					</div>
				<div class="footer-widget_column">
					<?php
					if (is_active_sidebar('footer-2')) {
						dynamic_sidebar('footer-2');
					}
					?>
					</div>
			<div class="footer-widget_column">
				<?php
				if ( is_active_sidebar( 'footer-3' ) ) {
					dynamic_sidebar( 'footer-3' );
				}
				?>
			</div>
			<div class="footer-widget_column">
				<?php
				if ( is_active_sidebar( 'footer-4' ) ) {
					dynamic_sidebar( 'footer-4' );
				}
				?>
			</div>
		</div>
	</div>
	<div class="site-info">
			<div class="container">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'business-light' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'business-light' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'business-light' ), 'business-light', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>

