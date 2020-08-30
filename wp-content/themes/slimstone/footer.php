<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    <div class="container">
        <div class="info-holder">
            <h2>How can we help?</h2>
            <div class="quote">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum cum voluptatum eaque suscipit sit, voluptatem impedit sint quo deleniti excepturi libero, non veritatis odit eos delectus eligendi aliquid officia cupiditate!</div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="circle one">
                        <div class="image"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="circle two">
                        <div class="image"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                     <div class="circle three">
                         <div class="image"></div>
                     </div>
                </div>
			</div>
			<div class="contact-form-holder">
				<div class="row">
					<div class="col-lg-6">
						<input type="text" placeholder="Name">
						<input type="text" placeholder="Email Address">
						<input type="text" placeholder="Phone Number">
					</div>
					<div class="col-lg-6">
						<textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
						<input type="submit">
					</div>
				</div>
			</div>
        </div>
    </div>

</div><!-- container end -->

<?php wp_footer(); ?>

</body>

</html>

