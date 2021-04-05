<?php 
if( have_rows('layout_components') ):
	while( have_rows('layout_components') ): the_row();
		switch (get_row_layout()) :
			case 'component_icon_box_carousel':
				include( locate_template( "{$component_template_dir}-icon-box-carousel.php", false, false ) );
			break;
			case 'component_text':
				include( locate_template( "{$component_template_dir}-text.php", false, false ) );
			break;
			case 'component_call_to_action':
				include( locate_template( "{$component_template_dir}-call-to-action.php", false, false ) );
			break;
			case 'component_overlapping_image':
				include( locate_template( "{$component_template_dir}-overlapping-image.php", false, false ) );
			break;
		endswitch;
	endwhile;
endif; 
