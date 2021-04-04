<section id="<?php echo esc_attr( get_sub_field('id') ); ?>" class="custom-sc common-sc py-5 <?php echo esc_attr( get_sub_field('class') ); ?>">
    <div class="container">
        <div class="row gy-5 gy-lg-0">
            <?php if( have_rows('section_columns') ):
                $column_classes = count_rows( 'section_columns' ) > 1 ? 'col-lg-6':'';
                while( have_rows('section_columns') ): the_row(); ?>
                    <div class="col-12 <?php echo $column_classes; ?>">
                        <?php include( locate_template( "/template-components/components/layout-cpt.php", false, false ) ); ?>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>