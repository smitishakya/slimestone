<?php
/**
 * The template for home page 
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

	<main id="primary" class="site-main">
         <!-- Image Slider Section -->
         <section class="banner-slider fade">
            <div class="banner-one" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-1.jpg');">
                <div class="container">
                    <div class="banner-content" id="item-info-1">
                        <h1>We deliver nothing but the best</h1>
                        <p>Lorem ipsum dolor sit amet consecteturadipisicing elit. Distinctio reprehenderit</p>
                        <div class="slider-btn"><a href="#" class="primary-btn">Learn more</a></div>
                    </div>
                </div>
            </div>
            <div class="banner-one" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-3.jpg');">
                <div class="container">
                    <div class="banner-content" id="item-info-2">
                        <h1>We deliver nothing but the best</h1>
                        <p>Lorem ipsum dolor sit amet consecteturadipisicing elit. Distinctio reprehenderit</p>
                        <div class="slider-btn"><a href="#" class="primary-btn">Learn more</a></div>
                    </div>
                </div>
            </div>
            <div class="banner-one" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-2.jpg');">
                <div class="container">
                    <div class="banner-content" id="item-info-3">
                        <h1>We deliver nothing but the best</h1>
                        <p>Lorem ipsum dolor sit amet consecteturadipisicing elit. Distinctio reprehenderit</p>
                        <div class="slider-btn"><a href="#" class="primary-btn">Learn more</a></div>
                    </div>
                </div>
            </div>
                  
         </section>

         <!-- Service Section -->
         <section class="service-section padding">
             <div class="container service-container">
                <div class="service-info-wrapper margin-bottom">
                    <h3>We can take your business online</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab qui praesentium at, delectus a eligendi, perferendis molestias quaerat, dolore corporis eaque. Cum id odio voluptatem soluta, incidunt pariatur aperiam voluptatibus?</p>
                    <a href="#" class="primary-btn">View More</a>
                </div>
                <div class="service-display-wrapper margin-bottom">
                    <div class="service-box">
                        <i class="fas fa-mobile-alt"></i>
                        <h5><a href=""> Mobile Apps</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="service-box-overlay">
                            <h5><a href=""> Mobile Apps</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>    
                    </div>
                    <div class="service-box">
                        <i class="fas fa-share-alt-square"></i>
                        <h5><a href="#">Digital Marketing</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="service-box-overlay">
                            <h5><a href="#">Digital Marketing</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="service-box">
                        <i class="fas fa-desktop"></i>
                        <h5><a href="#">Web Development</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="service-box-overlay">
                            <h5><a href="#">Web Development</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="service-box">
                        <i class="fas fa-file-alt"></i>
                        <h5><a href="#">SEO</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="service-box-overlay">
                            <h5><a href="#">SEO</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
             </div>
         </section>
         <!-- About Section -->
         <section class="about-section padding">
             <div class="about-container container">
                 <div class="about-row-1 row-1">
                     <div class="about-content-wrapper">
                        <h3 class="section-title">Ways That Make You a Better Leader</h3>
                        <h5 class="section-subtitle">We're excited to help you on your journey. It is best for us!!</h5>
                        <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, illum saepe, impedit ad animi vel magni perspiciatis libero voluptas, quis inventore dicta provident blanditiis laboriosam minus laborum? Aliquam, alias provident.</p>
                     </div>
                     <div class="about-img">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-img.jpg"/>
                     </div>
                 </div>
                 <div class="about-row-1 about-row-2">
                    <div class="about-img">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-img-2.jpg"/>
                    </div>
                    <div class="about-content-wrapper">
                        <h3 class="section-title">Ways That Make You a Better Leader</h3>
                        <h5 class="section-subtitle">We're excited to help you on your journey. It is best for us!!</h5>
                        <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus saepe ipsum quos doloribus iste, nemo facilis nisi inventore perspiciatis ratione aliquam quidem sequi repudiandae amet non, quisquam qui modi. Beatae.</p>
                    </div>  
                 </div>
             </div>
         </section>
        <!-- Portfolio Section -->
        <section class="portfolio-section container padding">
            <div class="heading">
                <h3>Our Portfolio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi similique accusantium aliquid dolor rerum. Iste repudiandae reprehenderit odit quae.</p>
            </div>
            <nav class="portfolio-navbar" role="navigation">
                <ul id="filter">
                    <li class="nav-item"><a data-filter="*" class="active nav-link">All</a></li>
                    <li class="nav-item"><a data-filter=".branding" class="nav-link">Branding</a></li>
                    <li class="nav-item"><a data-filter=".design" class="nav-link">Design</a></li>
                    <li class="nav-item"><a data-filter=".business" class="nav-link">Business</a></li>
                </ul>
            </nav>
            <div class="portfolio-container" id="lightbox">
                <div class="portfoliobox business">
                    <div class="hover hover-3 text-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-1.jpg" alt="portfolio-img-1">
                        <div class="hover-overlay">
                        </div>
                        <div class="hover-3-content px-5 py-4">         
                            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><a href="<?php echo esc_url(home_url('/create')); ?>" rel="create">Creative Design</a></h3>
                            <p class="hover-3-categories small mb-0"><a href="#">Business & Marketing</a></p>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-1.jpg" class="view"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfoliobox business">
                    <div class="hover hover-3 text-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-2.jpg" alt="portfolio-img-2">
                        <div class="hover-overlay">
                        </div>
                        <div class="hover-3-content px-5 py-4">   
                            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><a href="<?php echo esc_url(home_url('/create')); ?>" rel="create">New Trends in SEO & Anaytics</a></h3>
                            <p class="hover-3-categories small mb-0"><a href="#">Business & Marketing</a></p>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-1.jpg" class="view"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfoliobox business">
                    <div class="hover hover-3 text-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-3.jpg" alt="portfolio-img-3">
                        <div class="hover-overlay">
                        </div>
                        <div class="hover-3-content px-5 py-4">                           
                            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"> <a href="<?php echo esc_url(home_url('/create')); ?>" rel="create">New Trends in SEO & Anaytics</a></h3>
                            <p class="hover-3-categories small mb-0"><a href="#">Business & Marketing</a></p>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-3.jpg" class="view"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfoliobox design">
                    <div class="hover hover-3 text-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-4.jpg" alt="portfolio-img-1">
                        <div class="hover-overlay">
                        </div>
                        <div class="hover-3-content px-5 py-4">
                            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"> <a href="<?php echo esc_url(home_url('/create')); ?>" rel="create">Creative Design</a></h3>
                            <p class="hover-3-categories small mb-0"><a href="#">Business & Marketing</a></p>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-4.jpg" class="view"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfoliobox branding">
                    <div class="hover hover-3 text-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-5.jpg" alt="portfolio-img-1">
                        <div class="hover-overlay">
                        </div>
                        <div class="hover-3-content px-5 py-4">
                            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"> <a href="<?php echo esc_url(home_url('/create')); ?>" rel="create">Web Development</a></h3>
                            <p class="hover-3-categories small mb-0"><a href="#">Business & Marketing</a></p>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-5.jpg" class="view"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfoliobox branding">
                    <div class="hover hover-3 text-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-6.jpg" alt="portfolio-img-1">
                        <div class="hover-overlay">
                        </div>
                        <div class="hover-3-content px-5 py-4">
                            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"> <a href="<?php echo esc_url(home_url('/create')); ?>" rel="create">Web Development</a></h3>
                            <p class="hover-3-categories small mb-0"><a href="#">Business & Marketing</a></p>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-img-6.jpg" class="view"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- Call to Action Video Section -->
         <section class="call-to-video-section padding">
             <div class="overlay"></div>
             <div class="call-to-video-wrapper container">
                <h3>Watch the Video</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, illo. Omnis labore adipisci aspernatur voluptate blanditiis maxime asperiores accusantium minima consectetur! Soluta omnis possimus quae porro autem magni, beatae molestias.</p>
                <div class="play-button">
                     <a class="popup-video fas fa-play-circle" href="https://www.youtube.com/watch?v=PO4JcgD3vq0"></a>
                </div>
             </div>
        </section>
        <!-- Team Section -->
        <section class="team-section container padding">
             <div class="heading">
                 <h3>Our People</h3>
                 <p>The people who make things happen in our company and who believe and build the future.</p>
             </div>
             <div class="teams-container">
                 <div class="team">
                     <div class="team-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-img-1.jpg" alt="">
                         <div class="team-social">
                            <a href="https://facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </div>
                     </div>
                     <div class="team-info">
                         <h5>Justin Roy</h5>
                          <h6>FOUNDER & CEO</h6>
                     </div>
                 </div>
                 <div class="team">
                     <div class="team-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-img-2.jpg" alt="">
                         <div class="team-social">
                            <a href="https://facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </div>
                     </div>
                     <div class="team-info">
                         <h5>Justin Roy</h5>
                          <h6>FOUNDER & CEO</h6>
                     </div>
                 </div>
                 <div class="team">
                     <div class="team-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-img-3.jpg" alt="">
                         <div class="team-social">
                            <a href="https://facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </div>
                     </div>
                     <div class="team-info">
                         <h5>Justin Roy</h5>
                          <h6>FOUNDER & CEO</h6>
                     </div>
                 </div>
                 <div class="team">
                     <div class="team-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-img-4.jpg" alt="">
                         <div class="team-social">
                            <a href="https://facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </div>
                     </div>
                     <div class="team-info">
                         <h5>Justin Roy</h5>
                          <h6>FOUNDER & CEO</h6>
                     </div>
                 </div>
                 <div class="team">
                     <div class="team-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-img-5.jpg" alt="">
                         <div class="team-social">
                            <a href="https://facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </div>
                     </div>
                     <div class="team-info">
                         <h5>Justin Roy</h5>
                          <h6>FOUNDER & CEO</h6>
                     </div>
                 </div>
                 <div class="team">
                     <div class="team-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-img-6.jpg" alt="">
                         <div class="team-social">
                            <a href="https://facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </div>
                     </div>
                     <div class="team-info">
                         <h5>Justin Roy</h5>
                          <h6>FOUNDER & CEO</h6>
                     </div>
                 </div>
                 <div class="team">
                     <div class="team-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-img-7.jpg" alt="">
                         <div class="team-social">
                            <a href="https://facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </div>
                     </div>
                     <div class="team-info">
                         <h5>Justin Roy</h5>
                          <h6>FOUNDER & CEO</h6>
                     </div>
                 </div>
                 <div class="team">
                     <div class="team-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-img-8.jpg" alt="">
                         <div class="team-social">
                            <a href="https://facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </div>
                     </div>
                     <div class="team-info">
                         <h5>Justin Roy</h5>
                          <h6>FOUNDER & CEO</h6>
                     </div>
                 </div>
             </div>
        </section>
        <!-- Recognition Section -->
        <section class="our-recognition-section padding">
            <div class="our-recognition-container container">
                <div class="content margin-bottom">
                    <h3>Our Recognition</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis facere consequatur impedit incidunt quo perferendis totam fugit voluptatibus eveniet enim perspiciatis, earum obcaecati voluptatum ipsum necessitatibus consequuntur animi nihil accusamus!</p>
                    <a href="#" class="primary-btn">Contact Us</a>
                </div>
                <div class="numbers margin-bottom">
                    <div class="number">
                        <h2 class="count">2011</h2>
                        <p>Our Awards</p>
                    </div>
                    <div class="number">
                        <h2 class="count">1023</h2>
                        <p>Reliable Clients</p>
                    </div>
                    <div class="number">
                        <h2 class="count">104</h2>
                        <p>Team</p>
                    </div>
                    <div class="number">
                        <h2 class="count">87</h2>
                        <p>Creative Projects</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonal Section -->
        <section class="customer-reviews-section container padding">
            <div class="heading">
                 <h3>Customer Reviews</h3>
                 <p>Get prompt responses from a friendly, professional and knowledgable support team.</p>
            </div>
            <div class="customer-reviews-container customer-slide">
                <div class="customer-review">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/review-img-1.jpg" alt="">
                    </div>
                    <blockquote>
                        <p>When you believe in what these people do, That makes all the difference. These people did what God couldn’t.</p>    
                        <cite>
                            Jonathan Kent
                            <span>DESIGNER</span>
                        </cite>
                    </blockquote> 
                </div>
                <div class="customer-review">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/review-img-2.jpg" alt="">
                    </div>
                    <blockquote>
                        <p>Some of the best people to do the right job for me and our agency. These guys make the job done in time.</p>    
                        <cite>
                            Ray Timberlake
                            <span>Blogger</span>
                        </cite>
                    </blockquote> 
                </div>
                <div class="customer-review">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/review-img-3.jpg" alt="">
                    </div>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ex numquam ratione odio maxime perspiciatis.</p>      
                        <cite>
                            Clara Lee
                            <span>Entrepreneur</span>
                        </cite>
                    </blockquote> 
                </div>
            </div>
        </section>
        <!-- Call to Action Section -->
        <section class="call-to-action-section padding">
            <div class="overlay"></div>
             <div class="call-to-action-wrapper container">
                <h3>Are You Impressed With Us?</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, illo. Omnis labore adipisci aspernatur voluptate blanditiis maxime asperiores accusantium minima consectetur! Soluta omnis possimus quae porro autem magni, beatae molestias.
                </p>
                <a href="#" class="primary-btn">Learn More</a>
             </div>
        </section>
        <!-- Key Features Section -->
        <section class="key-features-section container padding">
            <div class="heading">
                 <h3>Our Key Features</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi similique accusantium aliquid dolor rerum. Iste repudiandae reprehenderit odit quae.</p>
             </div>
             <div class="key-features-container">
                    <div class="item">
                        <i class="fas fa-key"></i>
                        <h5><a href="#">Economic activity</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="item">
                        <i class="far fa-gem"></i>
                        <h5><a href="#">Profit Motive</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="item">
                        <i class="fas fa-newspaper"></i>
                        <h5><a href="#">Buying and Selling</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="item">
                        <i class="fas fa-fire"></i>
                        <h5><a href="#">Creative and Dynamic</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="item">
                        <i class="fas fa-award"></i>
                        <h5><a href="#">Customer satisfaction</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="item">
                        <i class="fas fa-users"></i>
                        <h5><a href="#">Social Activity</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
             </div>
        </section>
        <!-- Blog Section -->
        <section class="recent-news-section padding">
             <div class="container">
                <div class="heading">
                    <h3>News & Announcements</h3>
                    <p>No one misses out our latest blogs and news letter as we give out freebies every week.</p>
                </div>
                <div class="recent-news-container">
                    <article class="recent-news">
                        <div class="image">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-img-1.jpg"></a>
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
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-img-2.jpg"></a>
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
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-img-3.jpg"></a>
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
                <div class="button-container">
                    <a href="#" class="primary-btn">View More</a>
                </div>
             </div>
        </section>
        <!-- Pricing Plan Section -->
        <section class="pricing-plan-section container padding">
             <div class="heading">
                 <h3>Our Best Pricing</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
             </div>
            <div class="pricing-plan-container">
                <div class="price-table-wrapper">
                    <header class="entry-header">
                        <h2 class="entry-title">
                            Basic Plan</h2>
                        <h3 class="price">
                            $15.00</h3>
                        <span>Annually</span>
                    </header>
                    <div class="entry-content">
                        <p>Although it depends mostly on the breed, hair length, and type of coat, regular grooming.</p>
                    </div>
                    <div class="more-link">
                        <a href="#" class="primary-btn outline-btn">Start Now</a>
                    </div>
                </div>
                <div class="price-table-wrapper highlight">
                    <header class="entry-header">
                        <h2 class="entry-title">
                            Pro Plan</h2>
                        <h3 class="price">
                            $25.00</h3>
                        <span>Annually</span>
                    </header>
                    <div class="entry-content">
                        <p>Although it depends mostly on the breed, hair length, and type of coat, regular grooming.</p>
                    </div>
                    <div class="more-link">
                        <a href="#" class="primary-btn outline-btn">Start Now</a>
                    </div>
                </div>
                <div class="price-table-wrapper">
                    <header class="entry-header">
                        <h2 class="entry-title">
                             Expert Plan</h2>
                        <h3 class="price">
                            $36.00</h3>
                        <span>Annually</span>
                    </header>
                    <div class="entry-content">
                        <p>Although it depends mostly on the breed, hair length, and type of coat, regular grooming.</p>
                    </div>
                    <div class="more-link">
                        <a href="#" class="primary-btn outline-btn">Start Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Brand Section -->
        <section class="call-to-brand-section padding">
             <div class="call-to-brand-container container">
                 <div class="info-wrapper">
                    <h3>Start Your Business Now!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio corporis beatae perferendis? Est tempora praesentium debitis exercitationem, assumenda magni nobis minus eos soluta laboriosam reiciendis animi perferendis! Distinctio, sapiente nisi.</p>
                    <a href="#" class="primary-btn outline-btn">Start Now!</a>
                 </div>
                 <hr>
                 <div class="brand-wrapper">
                    <div class="brand">
                        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cisco.png" alt=""></div> 
                        <div class="logo-title"><h5>Cisco</h5></div>
                    </div>
                    <div class="brand">
                        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/behance.png" alt=""></div>
                        <div class="logo-title"><h5>Behance</h5></div>
                    </div>
                    <div class="brand">
                        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ubuntu.png" alt=""></div>
                        <div class="logo-title"><h5>Ubuntu</h5></div>
                    </div>
                    <div class="brand">
                        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/xing.png" alt=""></div>
                        <div class="logo-title"><h5>Xing</h5></div>
                    </div>
                 </div>
             </div>
        </section>
        <!-- Contact Section -->
        <section class="contact-section padding">
             <div class="contact-container container">
                 <div class="contact-info-wrapper">
                     <h1>Get In Touch</h1>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aperiam molestiae natus itaque, delectus, beatae a hic tempore eum, doloribus sed dolorum ad iusto eos qui cum cupiditate corporis assumenda.</p>
                     <div class="contact-info-details-wrapper">
                         <div class="info-item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h5>Visit Us</h5>
                                <p>15th Street South Side</p>
                                <p>Kathmandu, Nepal</p>
                            </div>
                         </div>
                         <div class="info-item">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info">
                                <h5>Call Us</h5>
                                <p>+977-980-908-9966</p>
                            </div>
                         </div>
                         <div class="info-item">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h5>Email Us</h5>
                                <p>info@businesslight.com</p>
                            </div>
                         </div>
                     </div>
                 </div>
                 <div class="contact-form-wrapper">
                     <form action="#">
                         <input class="name" type="text" name="name" placeholder="Name">
                         <input class="email" type="text" name="email" placeholder="Email">
                         <input class="subject" type="text" name="subject" placeholder="Subject">
                         <textarea class="message" id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
                         <input type="submit" value="Submit" class="primary-btn submit-btn">
                     </form>
                 </div>
             </div>
        </section>
    </main><!-- #main -->
<?php
get_footer();