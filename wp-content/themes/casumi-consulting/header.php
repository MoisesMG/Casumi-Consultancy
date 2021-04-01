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

	<header id="top-header" class="top-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<?php the_custom_logo(); ?>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				</ul>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
