<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Business_Light
 */

get_header();
?>
<section class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-2.jpg');">
	<div class="container">
		<h2><?php /* translators: %s: search query. */
			printf( esc_html__( 'Search Results for: %s', 'fabstore' ), '<span>' . get_search_query() . '</span>' );
			?></h2>
		<ul class="thm-breadcrumb list-unstyled">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<li><span>Search</span></li>
		</ul><!-- /.thm-breadcrumb -->
	</div><!-- /.container -->
</section>
<div class="site-content">
	<div class="container">
		<div class="site-row">
			<main id="primary" class="site-main">
			<div class="site-content search-page">
			<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'business-light' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->
			<div class="blog-posts">
				<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

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
