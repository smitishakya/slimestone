<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Business_Light
 */

get_header();
?>
<section class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-2.jpg');">
	<div class="container">
		<h2><?php single_post_title(); ?></h2>
		<ul class="thm-breadcrumb list-unstyled">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<li><span>Blog</span></li>
		</ul><!-- /.thm-breadcrumb -->
	</div><!-- /.container -->
</section>
	<div class="site-content">
		<div class="container">
			<div class="site-row">
				<main id="primary" class="site-main">
					<div class="blog-posts">
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_type() );


							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

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
