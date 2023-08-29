<?php get_header();
/* 
*
* Template Name: Blog
*
*/

$paged = get_query_var('paged') ? get_query_var('paged') : 1;


?>

<!-- Page Header Start -->
<div class="page-header">
    <img src="<?php echo esc_url(get_theme_mod('other_background_image')) ?>" alt="">
    <div class="cover-layer">
        <p>Blogs</p>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Latest From Blog</p>
            <h2>Learn More from Latest Barber Blog</h2>
        </div>
        <div class="row blog-page">

            <?php

            $args = array(
                'post_type' => 'blogging',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'posts_per_page' => 9,
                'paged' => $paged,
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

                    <div class="col-lg-4 col-md-6">
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
                    </div>

            <?php

                endwhile;
            endif;
            wp_reset_postdata();
            ?>

        </div>

        <?php wp_pagenavi(array('query' => $my_query)) ?>

        <!-- <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> 
                    </div>
                </div> -->
    </div>
</div>
<!-- Blog End -->

<?php get_footer(); ?>

<!-- <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div> -->