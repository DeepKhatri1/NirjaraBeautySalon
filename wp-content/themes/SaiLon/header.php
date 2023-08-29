<!DOCTYPE html>
<html lang="en" style="overflow-x:hidden;">

<head>
    <meta charset="utf-8">
    <title>
        <?php
        $site_name=get_bloginfo('name');
        $site_tagline=get_bloginfo('description');
        $site_title=$site_name . " | " . $site_tagline;
        echo $site_title;
        ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <?php
    echo '<link rel="icon" type="image/png" href="' . esc_url(get_site_icon_url()) . '">';
    ?>

    <!-- Lightbox 2 CDN css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo get_template_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>//lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- AOS cdn CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- slick slider  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>

</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-bar-left">
                        <div class="text">
                            <h2><?php echo get_theme_mod('opening_time') ?></h2>
                            <p>Opening Days: <?php echo get_theme_mod('opening_days') ?></p>
                        </div>
                        <div class="text">
                            <h2><?php echo get_theme_mod('phone_number') ?></h2>
                            <p>Call Us For Appointment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-bar-right">
                        <div class="social">
                            <?php if (get_theme_mod('instagram_link')) : ?>
                                <li class="sm-item mx-1">
                                    <a href="<?php echo esc_url(get_theme_mod('instagram_link')); ?>" class="sm-links link">
                                        <span><i class="fab fa-instagram"></i></span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_theme_mod('facebook_link')) : ?>
                                <li class="sm-item mx-1">
                                    <a href="<?php echo esc_url(get_theme_mod('facebook_link')); ?>" class="sm-links link">
                                        <span><i class="fab fa-facebook-f"></i></span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_theme_mod('youtube_link')) : ?>
                                <li class="sm-item mx-1">
                                    <a href="<?php echo esc_url(get_theme_mod('youtube_link')); ?>" class="sm-links link">
                                        <span><i class="fab fa-youtube"></i></span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_theme_mod('tiktok_link')) : ?>
                                <li class="sm-item mx-1">
                                    <a href="<?php echo esc_url(get_theme_mod('tiktok_link')); ?>" class="sm-links link">
                                        <span><i class="fab fa-tiktok"></i></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-black navbar-dark">
        <div class="container-fluid">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>


            <a href="<?php echo esc_url(home_url('home')); ?>" class="navbar-brand">
            <?php
            if ($logo_url){
                echo '<img src="' . esc_url($logo_url[0]) . '" alt="Logo">';
            }
            ?>
            </a>
            
            
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => false,
                        'menu_class' => 'srdsdasdas',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s" style="margin: 10px 0;" >%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->