<?php get_header();
/* 
*
* Template Name: Gallery
*
*/

?>

<!-- Page Header Start -->
<div class="page-header">
    <img src="<?php echo esc_url(get_theme_mod('other_background_image')) ?>" alt="">
    <div class="cover-layer">
        <p>Gallery</p>
    </div>
</div>
<!-- Page Header End -->


<!-- Gallery Start -->
<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            <p>Barber Image Gallery</p>
            <h2>Some Images From Our Barber Gallery</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>

                    <?php
                    $terms = get_terms('gallery_category');
                    if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                    ?>
                            <li data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
                    <?php
                        }
                    }

                    ?>

                </ul>
            </div>
        </div>
        <div class="row portfolio-container" style="margin: auto;">

            <?php

            $args = array(
                'post_type' => 'gallery_all',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
                    $term_obj_list = get_the_terms($post->ID, 'gallery_category');
                    $terms_string = join(' ', wp_list_pluck($term_obj_list, 'slug'));

            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item <?php echo $terms_string; ?>">
                        <div class="portfolio-wrap">
                            <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="portfolio">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </a>
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
<!-- Gallery End -->

<?php get_footer(); ?>