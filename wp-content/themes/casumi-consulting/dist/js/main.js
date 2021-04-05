(function ($) {
    $(document).ready(function () {
        $(".image-slider-cpt").slick({
            autoplay: true,
            autoplaySpeed: 6000,
            infinite: true,
            arrows: true,
            dots: false,
            nextArrow: "<button type='button' class='btn rounded-0 bg-white slide-arrow slide-next'><i class='fas fa-chevron-right'></i></button>",
            prevArrow: "<button type='button' class='btn rounded-0 bg-white slide-arrow slide-prev'><i class='fas fa-chevron-left'></i></button>"
        });
        $(".testimonial-slider-sc").slick({
          autoplay: false,
          fade: true,
          autoplaySpeed: 6000,
          infinite: true,
          arrows: true,
          dots: false,
          nextArrow: $('.testimonial-slider-sc .slide-next'),
          prevArrow: $('.testimonial-slider-sc .slide-prev')
      });
        $(".icon-box-carousel-cpt").slick({
            autoplay: false,
            autoplaySpeed: 6000,
            infinite: true,
            arrows: false,
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{

                breakpoint: 991,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: true
                }
              }
            ]
        });

    });
})(jQuery);
