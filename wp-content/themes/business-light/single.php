<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Business_Light
 */

get_header();
?>
<section class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-2.jpg');">
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
                <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content-page', get_post_type() );
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
                        <img class="author-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ubuntu.png" alt="">
                    </div>
                    <div class="author-details">
                        <h5 class="title"><?php the_author_posts_link() ?></h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur laboriosam veritatis modi voluptates repellendus, eius corporis! Accusantium aliquam iure, optio nam repudiandae ex facilis ipsam id natus enim tempora quia.</p>
                    </div>
                </div>
			<!-- Blog Section -->
			<section class="recent-news-section padding">
             <div class="container">
                <div class="heading">
                    <h3>Related Posts</h3>
                </div>
                <div class="recent-news-container">
                    <article class="recent-news">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-img-1.jpg">
                        </div>
                        <div class="article-info">
                            <div class="categories">
                                <a href="#">News, </a>
                                <a href="#">Tech</a>
                            </div>
                            <h5><a href="#">By 2022, every person in the planet will have a smartphone.</a></h5>
                            <span class="date">Dec 22, 2018</span>
                        </div>
                    </article>
                    <article class="recent-news">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-img-2.jpg">
                        </div>
                        <div class="article-info">
                            <div class="categories">
                                <a href="#">News, </a>
                                <a href="#">Tech</a>
                            </div>
                            <h5><a href="#">By 2022, every person in the planet will have a smartphone.</a></h5>
                            <span class="date">Dec 22, 2018</span>
                        </div>
                    </article>
                    <article class="recent-news">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-img-3.jpg">
                        </div>
                        <div class="article-info">
                            <div class="categories">
                                <a href="#">News</a>
                            </div>
                            <h5><a href="#">By 2022, every person in the planet will have a smartphone.</a></h5>
                            <span class="date">Dec 22, 2018</span>
                        </div>
                    </article>
                </div>
             </div>
            </section>
			<?php
		
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
            ?>
                </div>
                </main><!-- #main -->
                <?php get_sidebar(); ?>
			</div>
		</div>
	</div>
            
<?php
get_footer();
