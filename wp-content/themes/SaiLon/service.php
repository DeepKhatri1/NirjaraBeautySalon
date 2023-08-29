<?php get_header();
/* 
*
* Template Name: Service
*
*/

?>

<!-- Page Header Start -->
<div class="page-header">
    <img src="<?php echo esc_url(get_theme_mod('other_background_image')) ?>" alt="">
    <div class="cover-layer">
        <p>Service</p>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Salon Services</p>
                <h2>Best Salon and Barber Services for You</h2>
            </div>


            <div class="row">

                <?php

                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                ?>


                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="height: 350px;" alt="Image">
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo strip_tags(get_the_content());  ?></p>
                                <a class="d-none" href="<?php the_permalink(); ?>" class="btn" href="">Learn More</a>
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
<!-- Service End -->


<?php get_footer(); ?>