<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Business_Light
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-img">
		<?php business_light_post_thumbnail(); ?>
	</div>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogdesk' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<footer class="entry-footer">
	<div class="page-tags"><?php echo get_the_tag_list() ?></div>
	<?php if ( get_edit_post_link() ) : ?>
	<?php
	edit_post_link(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Edit <span class="screen-reader-text">%s</span>', 'blogdesk' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			wp_kses_post( get_the_title() )
		),
		'<span class="edit-link">',
		'</span>'
	);
	?>
			
	</footer><!-- .entry-footer -->
<?php endif; ?>
