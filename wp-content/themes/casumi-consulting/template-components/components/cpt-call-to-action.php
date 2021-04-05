<div class="custom-cpt cta-cpt mx-auto mx-lg-0 <?php echo esc_attr( get_sub_field('text_align_cta') ); ?>">
    <?php if ( get_sub_field('sub_heading_cta') ): ?>
        <h3 class="sub-heading-cta mb-3 fw-bold"><?php the_sub_field('sub_heading_cta'); ?></h3>
    <?php endif; ?>
    
    <?php  
    $title_tag = get_sub_field('use_headind_as_h1_cta') ? 'h1':'h2'; 
    if( get_sub_field('heading_cta') ):
        $heading = substr( get_sub_field('heading_cta'), 0, -1) ;
        $last_char = substr( get_sub_field('heading_cta'), -1) ;
        echo "<{$title_tag} class='heading-cta mb-3 fw-bold'>{$heading}<span class='last-letter'>{$last_char}</span></{$title_tag}>";
    endif;
    ?>

    <?php if( get_sub_field('content_cta') ): ?>
        <p class="content-cta mb-3"><?php the_sub_field('content_cta') ?></p>
    <?php endif; ?>

    <?php 
    $button_cta = get_sub_field('button_cta');
    if( $button_cta ):
        $url = esc_url( $button_cta['url'] );
        $title = esc_attr( $button_cta['title'] );
        $target = esc_attr( $button_cta['target']?$button_cta['target']:'_self' );
        echo "<a href='{$url}' target='{$target}' class='btn btn-primary rounded-pill px-4 fw-bold btn-cta'>{$title}</a>";
    endif;  
    ?>
</div>