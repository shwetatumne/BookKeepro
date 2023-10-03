<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'taxi_booking_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'taxi-booking' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'taxi-booking' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'taxi-booking' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'taxi_booking_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'taxi-booking' ),
	) );

	Kirki::add_section( 'taxi_booking_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'taxi-booking' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_all_headings_typography',
		'section'     => 'taxi_booking_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'taxi_booking_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'taxi-booking' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'taxi-booking' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'taxi-booking' ),
		'section'     => 'taxi_booking_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_body_content_typography',
		'section'     => 'taxi_booking_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'taxi_booking_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'taxi-booking' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'taxi-booking' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'taxi-booking' ),
		'section'     => 'taxi_booking_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'taxi_booking_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'taxi-booking' ),
	) );

	// Addtional Settings

	Kirki::add_section( 'taxi_booking_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'taxi-booking' ),
	    'description'    => esc_html__( 'Scroll To Top', 'taxi-booking' ),
	    'panel'          => 'taxi_booking_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'taxi_booking_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'taxi-booking' ),
		'section'     => 'taxi_booking_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset([
		'settings'    => 'taxi_booking_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'taxi-booking' ),
		'section'     => 'taxi_booking_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'taxi-booking' ),
			'Center' => esc_html__( 'Center', 'taxi-booking' ),
			'Right'  => esc_html__( 'Right', 'taxi-booking' ),
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_taxi_booking',
		'label'       => esc_html__( 'Menus Text Transform', 'taxi-booking' ),
		'section'     => 'taxi_booking_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'taxi-booking' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'taxi-booking' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'taxi-booking' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'taxi-booking' ),

		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'taxi_booking_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'taxi-booking' ),
		'section'     => 'taxi_booking_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'taxi_booking_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'taxi-booking' ),
		'section'     => 'taxi_booking_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'taxi_booking_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'taxi-booking' ),
		'section'     => 'taxi_booking_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'taxi_booking_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'taxi-booking' ),
			'description'    => esc_html__( 'Shop Page', 'taxi-booking' ),
			'panel'          => 'taxi_booking_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'taxi_booking_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'taxi-booking' ),
		'section'     => 'taxi_booking_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'taxi_booking_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'taxi-booking' ),
		'section'     => 'taxi_booking_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'taxi_booking_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'taxi-booking' ),
		'section'     => 'taxi_booking_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'taxi_booking_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'taxi-booking' ),
		'section'  => 'taxi_booking_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'taxi_booking_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'taxi-booking' ),
		'section'  => 'taxi_booking_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

}

	

	// POST SECTION

	Kirki::add_section( 'taxi_booking_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'taxi-booking' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'taxi-booking' ),
	    'panel'          => 'taxi_booking_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_enable_post_heading',
		'section'     => 'taxi_booking_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'taxi-booking' ),
		'section'     => 'taxi_booking_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'taxi-booking' ),
		'section'     => 'taxi_booking_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'taxi_booking_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'taxi-booking' ),
		'section'     => 'taxi_booking_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'taxi_booking_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'taxi-booking' ),
		'section'     => 'taxi_booking_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// HEADER SECTION

	Kirki::add_section( 'taxi_booking_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'taxi-booking' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'taxi-booking' ),
	    'panel'          => 'taxi_booking_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_enable_hire_us',
		'section'     => 'taxi_booking_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hire Us Button', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Button Text', 'taxi-booking' ),
		'settings' => 'taxi_booking_header_hire_us_txt',
		'section'  => 'taxi_booking_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Button Link', 'taxi-booking' ),
		'settings' => 'taxi_booking_header_hire_us_lnk',
		'section'  => 'taxi_booking_section_header',
		'default'  => '',
		'priority' => 10,
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_enable_extra_link',
		'section'     => 'taxi_booking_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Top Header Links', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'taxi_booking_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Text', 'taxi-booking' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Link Text', 'taxi-booking' ),
		'settings'     => 'taxi_booking_extra_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'taxi-booking' ),
				'description' => esc_html__( 'Add the text ex: "Enquiry".', 'taxi-booking' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'URL', 'taxi-booking' ),
				'description' => esc_html__( 'Add the url here ex: "www.example.com".', 'taxi-booking' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_enable_socail_link',
		'section'     => 'taxi_booking_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'taxi-booking' ) . '</h3>',
		'priority'    => 12,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'taxi_booking_section_header',
		'priority'    => 13,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'taxi-booking' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'taxi-booking' ),
		'settings'     => 'taxi_booking_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'taxi-booking' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'taxi-booking' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'taxi-booking' ),
				'description' => esc_html__( 'Add the social icon url here.', 'taxi-booking' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'taxi_booking_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'taxi-booking' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'taxi-booking' ),
        'panel'          => 'taxi_booking_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_enable_heading',
		'section'     => 'taxi_booking_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'taxi-booking' ),
		'section'     => 'taxi_booking_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'taxi-booking' ),
		'section'     => 'taxi_booking_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'taxi-booking' ),
		'section'     => 'taxi_booking_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_number_unable_disable',
		'label'       => esc_html__( 'Slide Number Enable / Disable', 'taxi-booking' ),
		'section'     => 'taxi_booking_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );


    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_slider_heading',
		'section'     => 'taxi_booking_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'taxi_booking_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'taxi-booking' ),
		'section'     => 'taxi_booking_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'taxi_booking_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'taxi-booking' ),
		'section'     => 'taxi_booking_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'taxi-booking' ),
		'priority'    => 10,
		'choices'     => taxi_booking_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Toll Free Number', 'taxi-booking' ),
		'settings' => 'taxi_booking_slider_extra_text',
		'section'  => 'taxi_booking_blog_slide_section',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'taxi_booking_sanitize_phone_number',
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'taxi_booking_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'taxi-booking' ),
		'section'     => 'taxi_booking_blog_slide_section',
		'default'     => 'CENTER-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'taxi-booking' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'taxi-booking' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'taxi-booking' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'taxi-booking' ),

		],
	] );

	// VEHICLE BOOKING SECTION

	Kirki::add_section( 'taxi_booking_vehicle_booking_section', array(
	    'title'          => esc_html__( 'Vehicle Booking Settings', 'taxi-booking' ),
	    'description'    => esc_html__( 'Here you can add different type of vehicle booking.', 'taxi-booking' ),
	    'panel'          => 'taxi_booking_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_enable_heading',
		'section'     => 'taxi_booking_vehicle_booking_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Vehicle Booking',  'taxi-booking' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_vehicle_booking_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'taxi-booking' ),
		'section'     => 'taxi_booking_vehicle_booking_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'taxi-booking' ),
			'off' => esc_html__( 'Disable',  'taxi-booking' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_vehicle_booking_text_heading',
		'section'     => 'taxi_booking_vehicle_booking_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Vehicle Booking', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'taxi-booking' ),
		'settings' => 'taxi_booking_vehicle_booking_heading_text',
		'section'  => 'taxi_booking_vehicle_booking_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'taxi-booking' ),
		'settings' => 'taxi_booking_vehicle_booking_heading',
		'section'  => 'taxi_booking_vehicle_booking_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'taxi_booking_vehicle_booking_number',
		'label'       => esc_html__( 'Number of Tabs to show', 'taxi-booking' ),
		'section'     => 'taxi_booking_vehicle_booking_section',
		'default'     => '',
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	$taxi_booking_featured_post = get_theme_mod('taxi_booking_vehicle_booking_number','');
    	for ( $j = 1; $j <= $taxi_booking_featured_post; $j++ ) :

    	Kirki::add_field( 'theme_config_id', [
	        'type'        => 'text',
	        'settings'    => 'taxi_booking_vehicle_booking_text' .$j,
	        'label'       => esc_html__( 'Tab Icon ', 'taxi-booking' ).$j,
	        'description' => esc_html__( 'Add fontawesome icon class ex: fas fa-car', 'taxi-booking' ),
	        'section'     => 'taxi_booking_vehicle_booking_section',
	        'default'     => '',
	    ] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'select',
			'settings'    => 'taxi_booking_vehicle_booking_category'.$j,
			'label'       => esc_html__( 'Select the category to show vehicle booking ', 'taxi-booking' ).$j,
			'section'     => 'taxi_booking_vehicle_booking_section',
			'default'     => '',
			'placeholder' => esc_html__( 'Select an category...', 'taxi-booking' ),
			'priority'    => 10,
			'choices'     => taxi_booking_get_categories_select(),
		] );

	endfor;

	// FOOTER SECTION

	Kirki::add_section( 'taxi_booking_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'taxi-booking' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'taxi-booking' ),
        'panel'          => 'taxi_booking_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_footer_enable_heading',
		'section'     => 'taxi_booking_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'taxi_booking_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'taxi-booking' ),
		'section'     => 'taxi_booking_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'taxi-booking' ),
			'off' => esc_html__( 'Disable', 'taxi-booking' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'taxi_booking_footer_text_heading',
		'section'     => 'taxi_booking_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'taxi-booking' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'taxi_booking_footer_text',
		'section'  => 'taxi_booking_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'taxi_booking_footer_text_heading_2',
	'section'     => 'taxi_booking_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'taxi-booking' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'taxi_booking_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'taxi-booking' ),
		'section'     => 'taxi_booking_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'taxi-booking' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'taxi-booking' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'taxi-booking' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'taxi-booking' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'taxi_booking_footer_text_heading_1',
	'section'     => 'taxi_booking_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'taxi-booking' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'taxi_booking_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'taxi-booking' ),
		'section'     => 'taxi_booking_footer_section',
		'default'     => '',
	] );
}
