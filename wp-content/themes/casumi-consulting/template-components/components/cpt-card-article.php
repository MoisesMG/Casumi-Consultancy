<a href="<?php the_permalink(); ?>" class="text-decoration-none link-card d-block mx-auto">
    <article class="card-article card-cpt bg-white">
        <div class="header-card position-relative">
            <img src="<?php the_post_thumbnail_url( 'article_thumb' ); ?>" alt="thumb-article" class="thumb-card">
            <div class="tags-card position-absolute">
                <?php 
                    $post_tags = get_the_tags();
                if ( $post_tags ):
                    foreach( $post_tags as $tag ):
                    echo "<span class='tag-card btn rounded-pill mx-2 my-2 py-1 text-white'>{$tag->name}</span>";
                    endforeach;
                endif; 
                ?>
            </div>
        </div>
        <div class="body-card py-4">
            <h3 class="heading-card fw-bold"><?php the_title(); ?></h3>
            <div class="article-info-card">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', 'author-avatar', array( 'class' => 'author-avatar-card rounded-circle') ); ?>
                <span class="author-name-card"><?php the_author(); ?></span>
                <span class="article-date-card"> - 
                    <?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?>
                </span>
            </div>
        </div>
    </article>
</a>