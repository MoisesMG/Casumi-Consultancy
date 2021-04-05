<div class="custom-cpt lastest-news-cpt grid-3-col">
    <?php 
        $query = new WP_Query( array( 
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => get_sub_field('articles_to_show_lastest_news'),
            ) 
        );
        while ( $query->have_posts() ) : $query->the_post();
            include( locate_template( "{$component_template_dir}-card-article.php", false, false ) );
        endwhile;  
        wp_reset_postdata();
    ?>
</div>