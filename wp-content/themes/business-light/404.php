<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Business_Light
 */

get_header();
?>
<section class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-2.jpg');">
	<div class="container">
		<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'travel-edge' ); ?></h2>
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
				<div class="search-page">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'business-light' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'business-light' ); ?></p>

								<?php
								get_search_form();

								?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
