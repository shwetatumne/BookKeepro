<?php


$taxi_booking_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$taxi_booking_text_transform = get_theme_mod( 'menu_text_transform_taxi_booking','CAPITALISE');

    if($taxi_booking_text_transform == 'CAPITALISE'){

		$taxi_booking_custom_css .='#main-menu ul li a{';

			$taxi_booking_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$taxi_booking_custom_css .='}';

	}else if($taxi_booking_text_transform == 'UPPERCASE'){

		$taxi_booking_custom_css .='#main-menu ul li a{';

			$taxi_booking_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$taxi_booking_custom_css .='}';

	}else if($taxi_booking_text_transform == 'LOWERCASE'){

		$taxi_booking_custom_css .='#main-menu ul li a{';

			$taxi_booking_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$taxi_booking_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$taxi_booking_container_width = get_theme_mod('taxi_booking_container_width');

			$taxi_booking_custom_css .='body{';

				$taxi_booking_custom_css .='width: '.esc_attr($taxi_booking_container_width).'%; margin: auto;';

			$taxi_booking_custom_css .='}';

			/*---------------------------Slider-content-alignment-------------------*/


	$taxi_booking_slider_content_alignment = get_theme_mod( 'taxi_booking_slider_content_alignment','CENTER-ALIGN');

	 if($taxi_booking_slider_content_alignment == 'LEFT-ALIGN'){

			$taxi_booking_custom_css .='.blog_box{';

				$taxi_booking_custom_css .='text-align:left;';

			$taxi_booking_custom_css .='}';


		}else if($taxi_booking_slider_content_alignment == 'CENTER-ALIGN'){

			$taxi_booking_custom_css .='.blog_box{';

				$taxi_booking_custom_css .='text-align:center;';

			$taxi_booking_custom_css .='}';


		}else if($taxi_booking_slider_content_alignment == 'RIGHT-ALIGN'){

			$taxi_booking_custom_css .='.blog_box{';

				$taxi_booking_custom_css .='text-align:right;';

			$taxi_booking_custom_css .='}';

		}

		/*---------------------------Copyright Text alignment-------------------*/

$taxi_booking_copyright_text_alignment = get_theme_mod( 'taxi_booking_copyright_text_alignment','LEFT-ALIGN');

 if($taxi_booking_copyright_text_alignment == 'LEFT-ALIGN'){

		$taxi_booking_custom_css .='.copy-text p{';

			$taxi_booking_custom_css .='text-align:left;';

		$taxi_booking_custom_css .='}';


	}else if($taxi_booking_copyright_text_alignment == 'CENTER-ALIGN'){

		$taxi_booking_custom_css .='.copy-text p{';

			$taxi_booking_custom_css .='text-align:center;';

		$taxi_booking_custom_css .='}';


	}else if($taxi_booking_copyright_text_alignment == 'RIGHT-ALIGN'){

		$taxi_booking_custom_css .='.copy-text p{';

			$taxi_booking_custom_css .='text-align:right;';

		$taxi_booking_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$taxi_booking_related_product_setting = get_theme_mod('taxi_booking_related_product_setting',true);

	if($taxi_booking_related_product_setting == false){

		$taxi_booking_custom_css .='.related.products, .related h2{';

			$taxi_booking_custom_css .='display: none;';

		$taxi_booking_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$taxi_booking_scroll_top_position = get_theme_mod( 'taxi_booking_scroll_top_position','Right');

	if($taxi_booking_scroll_top_position == 'Right'){

		$taxi_booking_custom_css .='.scroll-up{';

			$taxi_booking_custom_css .='right: 20px;';

		$taxi_booking_custom_css .='}';

	}else if($taxi_booking_scroll_top_position == 'Left'){

		$taxi_booking_custom_css .='.scroll-up{';

			$taxi_booking_custom_css .='left: 20px;';

		$taxi_booking_custom_css .='}';

	}else if($taxi_booking_scroll_top_position == 'Center'){

		$taxi_booking_custom_css .='.scroll-up{';

			$taxi_booking_custom_css .='right: 50%;left: 50%;';

		$taxi_booking_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$taxi_booking_pagination_setting = get_theme_mod('taxi_booking_pagination_setting',true);

	if($taxi_booking_pagination_setting == false){

		$taxi_booking_custom_css .='.nav-links{';

			$taxi_booking_custom_css .='display: none;';

		$taxi_booking_custom_css .='}';
	}
