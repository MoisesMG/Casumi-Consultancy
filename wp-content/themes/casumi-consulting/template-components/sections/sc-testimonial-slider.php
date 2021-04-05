<?php if( have_rows('testimonials_slider') ): ?>
<div class="custom-sc testimonial-slider-sc slider-cpt py-5">
    <?php 
        while( have_rows('testimonials_slider') ): the_row(); 
            $image = get_sub_field('photo');
            $url = $image['url'];
            $alt = $image['alt'];
            $size = 'testimonial_photo';
            $thumb = $image['sizes'][ $size ];
    ?>
    <div class="container d-block">
        <div class="row gy-5 gy-0">
            <div class="col-lg-5 col-12">
                <div class="photo-testimonial position-relative mx-auto">
                    <img class=""src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $alt ); ?>">
                    <button type="button" class="btn rounded-0 bg-white slide-arrow slide-prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn rounded-0 bg-white slide-arrow slide-next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-7 col-12 d-flex align-items-center">
                <div class="body-testimonial mx-auto mx-lg-0">
                    <h2 class="heading-testimonial fw-bold text-white mb-4"><?php the_sub_field('title'); ?></h2>
                    <p class="content-testimonial text-white mb-4"><?php the_sub_field('content'); ?></p>
                    <h5 class="name-testimonial mb-1"><?php the_sub_field('name'); ?></h5>
                    <h5 class="job-position-testimonial mb-1"><?php the_sub_field('position'); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?> 
</div>
<?php endif; ?>