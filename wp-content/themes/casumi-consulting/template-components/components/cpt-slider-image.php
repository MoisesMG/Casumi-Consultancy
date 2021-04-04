<?php if( have_rows('image_slider') ): ?>
<div class="custom-cpt image-slider-cpt">
    <?php 
        while( have_rows('image_slider') ): the_row(); 
        $image = get_sub_field('image_slide');
        $url = $image['url'];
        $alt = $image['alt'];
        $size = 'image_slide';
        $thumb = $image['sizes'][ $size ];
    ?>
    <div class="slide-item">
        <img class="gallery-image" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>">
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>