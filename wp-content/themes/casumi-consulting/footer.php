<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casumi_Consulting
 */
?>

	<footer id="" class="site-footer py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-3">
					<?php 
						dynamic_sidebar( 'footer_sidebar_1' );
						get_template_part('template-parts/social','networks'); 
					?>
				</div>
				<div class="col-md-12 col-lg-3">
					<?php dynamic_sidebar( 'footer_sidebar_2' ); ?>
				</div>
				<div class="col-md-12 col-lg-3">
					<?php dynamic_sidebar( 'footer_sidebar_3' ); ?>
				</div>
				<div class="col-md-12 col-lg-3">
					<?php dynamic_sidebar( 'footer_sidebar_4' ); ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<nav class="nav footer-nav-menu justify-content-center justify-content-lg-start">
						<?php 
							$theme_location = "footer_menu";
							$menu_items = mm_get_menu_items($theme_location);

							foreach($menu_items as $menu_item):
								$nav_item_classes = implode(" ", $menu_item->classes);

								$item =  "<li class='nav-item {$nav_item_classes}'>";
								$item .= "<a href='{$menu_item->url}' target='{$menu_item->target}' class='nav-link pe-3 ps-3 ps-lg-0 py-lg-0 py-2'>{$menu_item->title}</a>";
								$item .=  "</li>";
								echo $item;
							endforeach;
						?>
					</nav>
				</div>
				<div class="col-md-12 col-lg-6">
					<p class="footer-credits mb-0 text-center text-lg-end"><?php echo get_theme_mod('credits'); ?></p>
				</div>                                
			</div>
		</div>
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
