<nav class="nav nav-social-networks my-3 justify-content-center justify-content-lg-start">
    <?php if( get_theme_mod('twitter') ): ?>
        <a href="<?php echo esc_url( get_theme_mod('twitter') ); ?>" class="nav-link p-0 me-3 ms-3 ms-lg-0">
            <i class="px-2 py-2 rounded-circle text-center social-network-icon fab fa-twitter"></i>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod('facebook') ): ?>
        <a href="<?php echo esc_url( get_theme_mod('facebook') ); ?>" class="nav-link p-0 me-3 ms-3 ms-lg-0">
            <i class="px-2 py-2 rounded-circle text-center social-network-icon fab fa-facebook-f"></i>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod('google_plus') ): ?>
        <a href="<?php echo esc_url( get_theme_mod('google_plus') ); ?>" class="nav-link p-0 me-3 ms-3 ms-lg-0">
            <i class="px-2 py-2 rounded-circle text-center social-network-icon fab fa-google-plus-g"></i>
        </a>
    <?php endif; ?>
</nav>