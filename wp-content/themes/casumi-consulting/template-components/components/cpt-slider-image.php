<?php if( have_rows('image_slider') ): ?>
<div class="custom-cpt slider-cpt image-slider-cpt mx-auto mx-lg-0">
    <?php 
        while( have_rows('image_slider') ): the_row(); 
        $image = get_sub_field('image_slide');
        $url = $image['url'];
        $alt = $image['alt'];
        $size = 'image_slide';
        $thumb = $image['sizes'][ $size ];
    ?>
    
        <img class="slide-item image-slide-item" src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $alt ); ?>">
    
    <?php endwhile; ?>
</div>
<?php endif; ?>