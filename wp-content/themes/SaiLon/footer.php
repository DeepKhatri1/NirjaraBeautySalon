<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-contact">
                            <h2>Address</h2>
                            <p><i class="fa fa-map-marker-alt"></i><?php echo get_theme_mod('salons_location'); ?></p>
                            <p><i class="fa-solid fa-phone"></i><?php echo get_theme_mod('phone_number'); ?></p>
                            <p><i class="fa fa-envelope"></i><?php echo get_theme_mod('salons_email') ?></p>
                            <div class="footer-social">
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

                                <?php if (get_theme_mod('twitter_link')) : ?>
                                    <li class="sm-item mx-1">
                                        <a href="<?php echo esc_url(get_theme_mod('twitter_link')); ?>" class="sm-links link">
                                            <span><i class="fab fa-twitter"></i></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-link">
                            <h2>Quick Links</h2>
                            <a href="<?php echo esc_url(home_url('about-us')); ?>">About US</a>
                            <a href="<?php echo esc_url(home_url('service')); ?>">Our Service</a>
                            <a href="<?php echo esc_url(home_url('gallery')); ?>">Gallery</a>
                            <a href="<?php echo esc_url(home_url('blog')); ?>">Blog</a>
                            <a href="<?php echo esc_url(home_url('contact-us')); ?>">Contact US</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="footer-newsletter">
                    <h2>Our Aim</h2>
                    <p>
                    <?php echo get_theme_mod('salons_aim') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#"><?php echo esc_html(get_bloginfo('name')); ?></a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="https://an4soft.com">AN4SOFT</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="<?php echo get_template_directory_uri(); ?>/mail/jqBootstrapValidation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/mail/contact.js"></script>

<!-- slick slider cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- AOS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Lightbox2 CDN JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Template Javascript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<script>
    jQuery(function () {

// Youtube player
window.videoPlayer;

window.onYouTubeIframeAPIReady = function () {
 var videoPlayerId = $('#videoPlayer').attr('data-videoid');
 window.videoPlayer = new YT.Player('videoPlayer', {
  height: '1080',
  width: '1920',
  videoId: videoPlayerId,
  playerVars: {
   'controls': 0,
   'autoplay': 1,
   'mute': 1,
   'loop': 1,
   'showinfo': 0,
   'modestbranding': 1
  },
  events: {
   'onReady': onVideoPlayerReady,
   'onStateChange': onVideoPlayerReady
  }
 });
}

function onVideoPlayerReady(event) {
 videoPlayer.playVideo();
}
});
</script>


<?php wp_footer(); ?>
</body>

</html>