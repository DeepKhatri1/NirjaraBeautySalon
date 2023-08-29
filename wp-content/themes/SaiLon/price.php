<?php get_header();
/* 
*
* Template Name: Price
*
*/

?>

<!-- Page Header Start -->
<!-- <div class="page-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/bOmDP2Mvs.png" alt="">
    <div class="cover-layer">
        <p>Price</p>
    </div>
</div> -->
            <!-- Page Header End -->


            <!-- Pricing Start -->
            <!-- <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p><?php echo get_post_meta(31, 'pricing', true); ?></p>
                <h2><?php echo get_post_meta(31, 'service_subtitle', true); ?></h2>
            </div>
            <div class="row"> -->

                <?php

                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'posts_per_page' => 16,
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                ?>

                        <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="price-item">
                                <div class="price-img" style="height: 100px; overflow: hidden;">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image">
                                </div>
                                <div class="price-text">
                                    <h2><?php the_title(); ?></h2>
                                    <h3>₹<?php echo get_post_meta(get_the_ID(), 'cost', true); ?></h3>
                                </div>
                            </div>
                        </div> -->

                <?php

                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
<!-- 
            </div>
        </div>
    </div> -->
        <!-- Pricing End -->

<?php get_footer(); ?>