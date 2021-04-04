(function ($) {
    $(document).ready(function () {
        $(".image-slider-cpt").slick({
			autoplay: false,
			autoplaySpeed: 6000,
            infinite: true,
            arrows: true,
            dots: false,
            nextArrow: "<button type='button' class='btn rounded-0 bg-white slide-arrow slide-next'><i class='fas fa-chevron-right'></i></button>",
            prevArrow: "<button type='button' class='btn rounded-0 bg-white slide-arrow slide-prev'><i class='fas fa-chevron-left'></i></button>"
        });

    });
})(jQuery);
