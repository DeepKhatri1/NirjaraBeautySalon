(function ($) {
  "use strict";
  

  
  // Back to top button
  $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
          $('.back-to-top').fadeIn('slow');
      } else {
          $('.back-to-top').fadeOut('slow');
      }
  });
  $('.back-to-top').click(function () {
      $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
      return false;
  });
  
  
  // Sticky Navbar
  $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
          $('.navbar').addClass('nav-sticky');
      } else {
          $('.navbar').removeClass('nav-sticky');
      }
  });
  
  
  // Dropdown on mouse hover
  $(document).ready(function () {
      function toggleNavbarMethod() {
          if ($(window).width() > 992) {
              $('.navbar .dropdown').on('mouseover', function () {
                  $('.dropdown-toggle', this).trigger('click');
              }).on('mouseout', function () {
                  $('.dropdown-toggle', this).trigger('click').blur();
              });
          } else {
              $('.navbar .dropdown').off('mouseover').off('mouseout');
          }
      }
      toggleNavbarMethod();
      $(window).resize(toggleNavbarMethod);
  });
  
  
  // Modal Video
  $(document).ready(function () {
      var $videoSrc;
      $('.btn-play').click(function () {
          $videoSrc = $(this).data("src");
      });
      console.log($videoSrc);

      $('#videoModal').on('shown.bs.modal', function (e) {
          $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
      })

      $('#videoModal').on('hide.bs.modal', function (e) {
          $("#video").attr('src', $videoSrc);
      })
  });


  // Testimonials carousel
  $(".testimonials-carousel").owlCarousel({
      autoplay: true,
      animateIn: 'slideInDown',
      animateOut: 'slideOutDown',
      items: 1,
      smartSpeed: 450,
      dots: false,
      loop: true,
      nav : true,
      navText : [
          '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ]
  });
  
  
  // Blogs carousel
  $(".blog-carousel").owlCarousel({
      autoplay: true,
      dots: false,
      loop: true,
      nav : true,
      navText : [
          '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ],
      responsive: {
          0:{
              items:1
          },
          576:{
              items:1
          },
          768:{
              items:2
          },
          992:{
              items:3
          }
      }
  });


  $('.main-banner-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    // prevArrow: "<button type='button' class='custom-slick-prev'></button>",
    // nextArrow: "<button type='button' class='custom-slick-next'></button>",
  });
  $('.works-slider').slick({
    centerMode: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          centerMode: true,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 476,
        settings: {
          centerMode: false,
          arrows:true,
          slidesToShow: 1
        }
      }
    ]
  });

  
  AOS.init();

  
  
  // Portfolio isotope and filter
  var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
  });

  $('#portfolio-flters li').on('click', function () {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({filter: $(this).data('filter')});
  });


  //Lightbox 2
  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
  }) 

  
})(jQuery);






