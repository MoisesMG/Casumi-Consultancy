<?php
/**
 * Template part for displaying dynamic content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Casumi_Consulting
 */
$section_template_dir = '/template-components/sections/sc';
$component_template_dir = '/template-components/components/cpt';

if( have_rows('dynamic_content') ):
	while( have_rows('dynamic_content') ): the_row();
		switch (get_row_layout()) :
			case 'section_image_slider_and_call_to_action':
				include( locate_template( "{$section_template_dir}-slider-and-cta.php", false, false ) );
			break;

			case 'section_common':
				include( locate_template( "{$section_template_dir}-common.php", false, false ) );
			break;

			case 'section_testimonial_slider':
				include( locate_template( "{$section_template_dir}-testimonial-slider.php", false, false ) );
			break;
		endswitch;
	endwhile;?>
	<a href="#site-header" class="custom-cpt back-to-top-cpt">
		<i class="px-2 py-2 shadow rounded-circle text-center circle-icon-cpt primary-icon transition fas fa-chevron-up"></i>
	</a>
<?php endif; ?> 




