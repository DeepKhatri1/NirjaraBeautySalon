<?php get_header(); ?>

<!-- Page Header Start -->
<div class="page-header">
    <img src="<?php echo esc_url(get_theme_mod('other_background_image')) ?>" alt="">
    <div class="cover-layer">
        <p>Blogs</p>
    </div>
</div>
<!-- Page Header End -->

<!-- Single Page Start -->
<div class="single">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image">
                
                <div class="news-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Page End -->


<?php get_footer(); ?>