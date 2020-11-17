<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Business_Light
 */

get_header();
?>
<section class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-1.jpg');">
	<div class="container">
		<?php the_title( '<h2>', '</h2>' ); ?>
		<ul class="thm-breadcrumb list-unstyled">
			<li><i class="fas fa-clock"></i><span><?php the_time('F j, Y') ?></span></li>
		</ul><!-- /.thm-breadcrumb -->
	</div><!-- /.container -->
</section>
<div class="site-content">
	<div class="container">
		<div class="site-row">
			<main id="primary" class="site-main">
				<div class="single-page">
					<div class="site">
						<?php
						while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
						?>
						<hr>
						<div class="page-socialshare">
							<a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i> Share</a>
							<a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i>Tweet</a>
							<a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i>Share</a>
							<a href="#" class="pinterest" target="_blank"><i class="fa fa-pinterest"></i>Pin it</a>
						</div>
						<div class="author-info-container">
							<div class="image">
								<img class="author-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/behance.png" alt="">
							</div>
							<div class="author-details">
								<h5 class="title"><?php the_author_posts_link() ?></h5>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur laboriosam veritatis modi voluptates repellendus, eius corporis! Accusantium aliquam iure, optio nam repudiandae ex facilis ipsam id natus enim tempora quia.</p>
							</div>
						</div>
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						endwhile; // End of the loop.
						?>
					</div>
				</div>	
				</main><!-- #main -->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php
get_footer();
