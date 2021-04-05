<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casumi_Consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="site-header" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-header navbar-light">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full'); ?>
					<img src="<?php echo esc_url( $image[0] ); ?>" alt="brand-image">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<?php 
							$theme_location = "header_menu";
							$menu_items = mm_get_menu_items($theme_location);

							foreach($menu_items as $menu_item):
								$nav_item_classes = implode(" ", $menu_item->classes);
								$nav_item_classes .= get_current_url() == $menu_item->url ? "current-page" : "";

								$item =  "<li class='nav-item {$nav_item_classes}'>";
								$item .= "<a href='{$menu_item->url}' target='{$menu_item->target}' class='nav-link fw-bold'>{$menu_item->title}</a>";
								$item .=  "</li>";
								echo $item;
							endforeach;
						?>
						<li class="nav-item ms-lg-5 ms-xl-5">
							<a class="nav-link fw-bold" href="tel:<?php echo get_theme_mod('phone_contact'); ?>">
								<?php echo get_theme_mod('phone_contact'); ?>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bold">
								<i class="fas fa-search"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
