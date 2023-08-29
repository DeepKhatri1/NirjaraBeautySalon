<?php get_header();
/* 
*
* Template Name: Home
*
*/

?>


<!-- Hero Start -->
<section class="sc-main-banner">
    <div class="sc-wrapper">
        <div class="main-banner-slider h-100">


        <?php
$args = array(
    'post_type' => 'slider',
    'posts_per_page' => 3,
    'post_status' => 'publish'
);
$my_query = new WP_Query($args);

if ($my_query->have_posts()) :
    while ($my_query->have_posts()) :
        $my_query->the_post();

        $video_url = get_field('video_url'); // Assuming you have an ACF field 'video_url' for the video URL
        $image = get_the_post_thumbnail_url();

        if (!empty($video_url)) {
            // Display video if video URL is available
            ?>
            <div class="item h-100">
                <div class="item-wrapper h-100">
                    <div class="img-cover h-100 bg-overlay heero">
                    <video src="<?php echo esc_url($video_url); ?>" autoplay loop muted plays-inline></video>
                        <div class="overlay"></div>
                        <p data-aos="fade-right" data-aos-duration="2000">
                            <?php the_title(); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        } elseif ($image) {
            // Display image if no video URL is available but image is present
            ?>
            <div class="item h-100">
                <div class="item-wrapper h-100">
                    <div class="img-cover h-100 bg-overlay heero">
                        <img src="<?php echo esc_url($image); ?>" alt="" />
                        <p data-aos="fade-right" data-aos-duration="2000">
                            <?php the_title(); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }

    endwhile;
endif;

wp_reset_postdata();
?>


        </div>
    </div>
</section>
<!-- Hero End -->


<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img" data-aos="fade-up" data-aos-duration="500">
                    <img src="<?php echo get_the_post_thumbnail_url(25); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left" data-aos="fade-up" data-aos-duration="800">
                    <p>LEARN ABOUT US</p>
                    <h2><?php echo get_post_meta(25, 'experience', true); ?></h2>
                </div>
                <div class="about-text" data-aos="fade-up" data-aos-duration="900">
                <p>
                    <?php echo wpautop(get_theme_mod('landing_about_us')); ?>
                </p>

                <div class="ab-btn d-flex">
                    <a class="btn" href="<?php echo get_page_link(25); ?>" data-aos="fade-up" data-aos-duration="900">Learn More</a>

                    <div class="video-container">
                        <button id="open-video-btn" class="btn">Watch Video</button>
                        <div id="video-popup" class="video-popup">
                            <div class="video-content">
                                <div class="close-btn" id="close-video-btn">&times;</div>
                                <?php
                                $page_id = 277; // The ID of the page you want to retrieve the content from
                                $content = get_post_field('post_content', $page_id);

                                // Extract the embedded video URL from the post content
                                $embedded_video = get_media_embedded_in_content($content, array('iframe'));

                                // Check if there is a valid embedded video
                                if (!empty($embedded_video)) {
                                    echo $embedded_video[0];
                                } else {
                                    echo "No embedded video found.";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                    


                <script>
                    // JavaScript/jQuery code
                    document.getElementById('open-video-btn').addEventListener('click', function() {
                        document.getElementById('video-popup').style.display = 'block';
                    });

                    document.getElementById('close-video-btn').addEventListener('click', function() {
                        document.getElementById('video-popup').style.display = 'none';
                        // Stop the video playback when closing the popup (optional)
                        document.getElementById('video-frame').src = '';
                    });
                </script>
                
                
                
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service">
    <div class="container service-c">
        <div class="section-header text-center" data-aos="fade-up" data-aos-duration="600">
            <p>Our Salon Services</p>
            <h2>Best Salon and Barber Services for You</h2>
        </div>


        <div class="row">

            <?php

            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'posts_per_page' => 3,
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
            ?>


                    <div class="col-lg-4 col-md-6">
                        <div class="service-item" data-aos="fade-up" data-aos-duration="600">
                            <div class="service-img">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="height: 350px;" alt="Image">
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>" class="btn" href="">Learn More</a>
                        </div>
                    </div>

            <?php

                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <a href="<?php echo esc_url(home_url('our-service')); ?>" class="btn service-btn" href="" data-aos="fade-up" data-aos-duration="700">More Services</a>
    </div>
</div>
<!-- Service End -->


<!-- Pricing Start -->

<!-- <div class="price">
    <div class="container service-c">
        <div class="section-header text-center" data-aos="fade-up" data-aos-duration="600">
            <p><?php echo get_post_meta(31, 'pricing', true); ?></p>
            <h2><?php echo get_post_meta(31, 'service_subtitle', true); ?></h2>
        </div>
        <div class="row"> -->

            <?php

            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'posts_per_page' => 4,
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
            ?>

                    <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item" data-aos="fade-up" data-aos-duration="600">
                            <div class="price-img" style="height: 100px; overflow: hidden;">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2><?php the_title(); ?></h2>
                                <h3>₹<?php echo get_post_meta(get_the_ID(), 'cost', true); ?></h3>
                            </div>
                        </div> -->
                    </div>

            <?php

                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        <!-- </div>
        <a href="<?php echo esc_url(home_url('price')); ?>" class="btn service-btn" href="" data-aos="fade-up" data-aos-duration="700">View All</a>
    </div>
</div> -->
<!-- Pricing End -->


<!-- Testimonial Start -->
<div class="testimonial" data-aos="fade-up" data-aos-duration="1000">

    <img src="<?php echo esc_url(get_theme_mod('testimonial_background_image')) ?>" alt="">

    <div class="testi-bg">
        <div class="container">

            <div class="owl-carousel testimonials-carousel test-center">

                <?php

                $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'posts_per_page' => 16,
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                ?>

                        <div class="testimonial-item">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image">
                            <p><?php the_content(); ?></p>
                            <h2><?php the_title(); ?></h2>
                            <h3>Profession: <?php echo get_post_meta(get_the_ID(), 'profession', true); ?></h3>
                        </div>

                <?php

                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="team">
    <div class="container service-c">
        <div class="section-header text-center" data-aos="fade-up" data-aos-duration="600">
            <p><?php echo get_post_meta(34, 'our_team', true); ?></p>
            <h2><?php echo get_post_meta(34, 'team_subtitle', true); ?></h2>
        </div>
        <div class="row">

            <?php

            $args = array(
                'post_type' => 'team',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'posts_per_page' => 4,
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
            ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-item" data-aos="fade-up" data-aos-duration="800">
                            <div class="team-img">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2><?php echo get_post_meta(get_the_ID(), 'team_name', true); ?></h2>
                                <p><?php echo get_post_meta(get_the_ID(), 'position', true); ?></p>
                            </div>
                        </div>
                    </div>

            <?php

                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <a href="<?php echo get_page_link(25); ?>" class="btn service-btn" href="" data-aos="fade-up" data-aos-duration="900">View More</a>
    </div>
</div>
<!-- Team End -->


<!-- Contact Start -->
<div class="contact">
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="600">
                    <img src="<?php echo esc_url(get_theme_mod('contact_background_image')) ?>" style="width: 100%;" alt="">
                </div>
                <div class="col-md-8" data-aos="fade-up" data-aos-duration="1000">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up" data-aos-duration="600">
            <p><?php echo get_post_meta(40, 'blog_title', true); ?></p>
            <h2><?php echo get_post_meta(40, 'blog_subtitle', true); ?></h2>
        </div>
        <div class="owl-carousel blog-carousel" data-aos="fade-up" data-aos-duration="800">

            <?php

            $args = array(
                'post_type' => 'blogging',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'paged' => $paged
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
            ?>

                    <?php
                    $post_id = get_the_ID(); // Get the current post ID
                    $published_date = get_the_date('F j, Y', $post_id); // Get the formatted published date
                    ?>

                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-calendar-alt"></i>
                            <p><?php echo $published_date; ?></p>
                        </div>
                        <div class="blog-text">
                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php echo wp_trim_words(strip_tags(get_post_field('post_content', $post_id)), 16, '..'); ?>
                            </p>
                            <a class="btn" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>

            <?php

                endwhile;
            endif;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
<!-- Blog End -->


<?php get_footer(); ?>