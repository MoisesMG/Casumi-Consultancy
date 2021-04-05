<div class="custom-cpt icon-box-cpt <?php the_sub_field('style_icon_box');?>-icon-box">
    <?php 
    if( get_sub_field('icon_icon_box') ): 
        $icon = get_sub_field('icon_icon_box');
    ?>
        <img class="icon-icon-box mb-3" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>">
    <?php endif; ?>

    <?php if( get_sub_field('heading_icon_box') ): ?>
        <h3 class="heading-icon-box fw-bold"><?php the_sub_field('heading_icon_box'); ?></h3>
    <?php endif; ?>

    <?php if( get_sub_field('content_icon_box') ): ?>
        <p class="content-icon-box"><?php the_sub_field('content_icon_box'); ?></p>
    <?php endif; ?>
</div>