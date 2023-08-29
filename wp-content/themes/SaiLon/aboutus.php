<?php get_header();
/* 
*
* Template Name: About Us
*
*/

?>


<!-- Page Header Start -->
<div class="page-header">
    <img src="<?php echo esc_url(get_theme_mod('other_background_image')) ?>" alt="">
    <div class="cover-layer">
        <p>About Us</p>
    </div>
</div>
<!-- Page Header End -->

<?php

while (have_posts()) :
    the_post();
?>
    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <h2><?php echo get_post_meta(25, 'experience', true); ?></h2>
                    </div>
                    <div class="about-text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile;
wp_reset_postdata();
?>

<!-- About End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p><?php echo get_post_meta(34, 'our_team', true); ?></p>
            <h2><?php echo get_post_meta(34, 'team_subtitle', true); ?></h2>
        </div>
        <div class="row">

            <?php

            $args = array(
                'post_type' => 'team',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
            ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
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
    </div>
</div>
<!-- Team End -->

<?php get_footer(); ?>