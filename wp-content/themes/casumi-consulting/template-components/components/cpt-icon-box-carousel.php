<?php if( have_rows('icon_box_carousel') ): ?>
<div class="custom-cpt icon-box-carousel-cpt">
    <?php 
        while( have_rows('icon_box_carousel') ): the_row(); 
            include( locate_template( "{$component_template_dir}-icon-box.php", false, false ) );
        endwhile;
    ?>
</div>
<?php endif; ?>