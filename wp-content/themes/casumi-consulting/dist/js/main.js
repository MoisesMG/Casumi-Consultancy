(function ($) {
    $(document).ready(function () {
        $(".image-slider-cpt").slick({
			autoplay: false,
			autoplaySpeed: 6000,
            infinite: true,
            arrows: true,
            dots: false,
            nextArrow: "<button type='button' class='slick-next'><i class='fas fa-chevron-right'></i></button>",
            prevArrow: "<button type='button' class='slick-prev'>Previous</button>"
        });

    });
})(jQuery);
