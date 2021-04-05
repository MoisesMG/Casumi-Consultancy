<div class="custom-cpt overlapping-image-cpt position-relative">
    <div class="overlapping-image back-image d-md-inline-block text-center mb-3">
        <?php 
        $back_img = get_sub_field('back_image_overlapping_image'); 
        $url = $back_img['url'];
        $alt = $back_img['alt'];
        $size = 'overlapping_image';
        $thumb = $back_img['sizes'][ $size ];
        ?>
        <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $alt ); ?>">
    </div>
    <div class="overlapping-image front-image d-md-inline-block text-center mb-3">
        <?php 
        $front_img = get_sub_field('front_image_overlapping_image'); 
        $url = $front_img['url'];
        $alt = $front_img['alt'];
        $size = 'overlapping_image';
        $thumb = $front_img['sizes'][ $size ];
        ?>
        <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $alt ); ?>">
    </div>
</div>