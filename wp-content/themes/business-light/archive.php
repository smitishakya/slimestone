<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Business_Light
 */

get_header();
?>
<section class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-3.jpg');">
	<div class="container">
		<?php
			the_archive_title( '<h2 class="page-title">', '</h2>' );
		?>
		<ul class="thm-breadcrumb list-unstyled">
			<li><i class="fas fa-clock"></i><span><?php the_time('F j, Y') ?></span></li>
		</ul><!-- /.thm-breadcrumb -->
	</div><!-- /.container -->
</section>
	<div class="site-content">
		<div class="container">
			<div class="site-row">
				<main id="primary" class="site-main">
					<div class="blog-posts">
						<?php if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );
						?>
					<?php
						endwhile;

					endif;
					?>
					</div>
					</main><!-- #main -->
				<?php get_sidebar(); ?>
			</div>
		</div>	
	</div>
<?php
get_footer();
