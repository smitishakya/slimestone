<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_Light
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'business-light' ); ?></a>
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<div class="container row">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$business_light_description = get_bloginfo( 'description', 'display' );
					if ( $business_light_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $business_light_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div class="site-nav">
					<button class="menu-toggle"  aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'fab-store' ); ?>
						<div class="hamburger-menu">
							<div></div>
						</div>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => '',
							'items_wrap' => '<ul class="%2$s">%3$s</ul>'
						)
					);
					?>
				</div><!-- /.navbar-collapse -->
				<div class="topbar-one__misc">
					<a href="#" class="facebook" target="_blank"><i class="fab fa-facebook"></i></a>
					<a href="#" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
					<a href="#" class="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="#" class="linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
				</div><!-- /.__misc -->
			</div><!-- /.container -->
		</nav>
	</header><!-- #masthead -->	