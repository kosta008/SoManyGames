<?php
/**
 * Creative One Page Theme Customizer
 *
 * @package Creative One Page
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function creative_one_page_customize_register($wp_customize) {
	//add home page setting pannel
	$wp_customize->add_panel('creative_one_page_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'creative-one-page'),
		'description'    => __('Description of what this panel does.', 'creative-one-page'),
	));	

	// font array
	$creative_one_page_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Coming+Soon' => 'Coming+Soon',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Noto Sans' => 'Noto Sans',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Poppins' => 'Poppins',
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Roboto' => 'Roboto',
        'Roboto Condensed' => 'Roboto Condensed',
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Satisfy' => 'Satisfy',
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Unica One' => 'Unica One',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'creative_one_page_typography', array(
    	'title'      => __( 'Typography', 'creative-one-page' ),
		'priority'   => 30,
		'panel' => 'creative_one_page_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'creative_one_page_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_paragraph_color', array(
		'label' => __('Paragraph Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_paragraph_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( 'Paragraph Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	$wp_customize->add_setting('creative_one_page_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','creative-one-page'),
		'section'	=> 'creative_one_page_typography',
		'setting'	=> 'creative_one_page_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'creative_one_page_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_atag_color', array(
		'label' => __('"a" Tag Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_atag_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( '"a" Tag Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'creative_one_page_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_li_color', array(
		'label' => __('"li" Tag Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_li_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( '"li" Tag Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'creative_one_page_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_h1_color', array(
		'label' => __('H1 Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_h1_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( 'H1 Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('creative_one_page_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_h1_font_size',array(
		'label'	=> __('H1 Font Size','creative-one-page'),
		'section'	=> 'creative_one_page_typography',
		'setting'	=> 'creative_one_page_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'creative_one_page_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_h2_color', array(
		'label' => __('h2 Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_h2_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( 'h2 Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('creative_one_page_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_h2_font_size',array(
		'label'	=> __('h2 Font Size','creative-one-page'),
		'section'	=> 'creative_one_page_typography',
		'setting'	=> 'creative_one_page_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'creative_one_page_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_h3_color', array(
		'label' => __('h3 Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_h3_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( 'h3 Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('creative_one_page_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_h3_font_size',array(
		'label'	=> __('h3 Font Size','creative-one-page'),
		'section'	=> 'creative_one_page_typography',
		'setting'	=> 'creative_one_page_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'creative_one_page_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_h4_color', array(
		'label' => __('h4 Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_h4_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( 'h4 Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('creative_one_page_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_h4_font_size',array(
		'label'	=> __('h4 Font Size','creative-one-page'),
		'section'	=> 'creative_one_page_typography',
		'setting'	=> 'creative_one_page_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'creative_one_page_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_h5_color', array(
		'label' => __('h5 Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_h5_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( 'h5 Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('creative_one_page_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_h5_font_size',array(
		'label'	=> __('h5 Font Size','creative-one-page'),
		'section'	=> 'creative_one_page_typography',
		'setting'	=> 'creative_one_page_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'creative_one_page_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_h6_color', array(
		'label' => __('h6 Color', 'creative-one-page'),
		'section' => 'creative_one_page_typography',
		'settings' => 'creative_one_page_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('creative_one_page_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'creative_one_page_h6_font_family', array(
	    'section'  => 'creative_one_page_typography',
	    'label'    => __( 'h6 Fonts','creative-one-page'),
	    'type'     => 'select',
	    'choices'  => $creative_one_page_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('creative_one_page_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_h6_font_size',array(
		'label'	=> __('h6 Font Size','creative-one-page'),
		'section'	=> 'creative_one_page_typography',
		'setting'	=> 'creative_one_page_h6_font_size',
		'type'	=> 'text'
	));

  	$wp_customize->add_setting('creative_one_page_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control('creative_one_page_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','creative-one-page'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','creative-one-page'),
            'Transparent Background' => __('Transparent Background','creative-one-page'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('creative_one_page_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','creative-one-page'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('creative_one_page_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','creative-one-page'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'creative_one_page_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'creative_one_page_sanitize_choices',
	) );
	$wp_customize->add_control( 'creative_one_page_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'creative-one-page' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('creative_one_page_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));	
	$wp_customize->add_control('creative_one_page_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','creative-one-page'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'creative_one_page_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control( 'creative_one_page_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','creative-one-page' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'creative_one_page_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control( 'creative_one_page_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','creative-one-page' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'creative_one_page_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'creative_one_page_sanitize_number_range',
	));
	$wp_customize->add_control('creative_one_page_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','creative-one-page' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	$wp_customize->add_setting( 'creative_one_page_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'creative_one_page_sanitize_number_range',
	));
	$wp_customize->add_control('creative_one_page_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','creative-one-page' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('creative_one_page_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'creative_one_page_sanitize_choices'
    ));
    $wp_customize->add_control('creative_one_page_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','creative-one-page'),
       'choices' => array(
            'Yes' => __('Yes','creative-one-page'),
            'No' => __('No','creative-one-page'),
        ),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_section('creative_one_page_product_button_section', array(
		'title'    => __('Product Button Settings', 'creative-one-page'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'creative_one_page_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','creative-one-page' ),
		'section' => 'creative_one_page_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',
	));

	$wp_customize->add_setting( 'creative_one_page_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','creative-one-page' ),
		'section' => 'creative_one_page_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'creative_one_page_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'creative_one_page_sanitize_number_range',
	));
	$wp_customize->add_control('creative_one_page_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','creative-one-page' ),
		'section' => 'creative_one_page_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('creative_one_page_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'creative-one-page'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('creative_one_page_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control('creative_one_page_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','creative-one-page'),
        'section' => 'creative_one_page_product_sale_section',
        'choices' => array(
            'Right' => __('Right','creative-one-page'),
            'Left' => __('Left','creative-one-page'),
        ),
	) );

	$wp_customize->add_setting( 'creative_one_page_border_radius_product_sale',array(
		'default' => 0,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','creative-one-page'),
        'section'  => 'creative_one_page_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('creative_one_page_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float'
	));
	$wp_customize->add_control('creative_one_page_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','creative-one-page'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'creative_one_page_product_sale_section',
		'type'=> 'number'
	));

	// sale button padding
	$wp_customize->add_setting( 'creative_one_page_sale_padding_top',array(
		'default' => 0,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control( 'creative_one_page_sale_padding_top',	array(
		'label' => esc_html__( ' Product Sale Top Bottom Padding','creative-one-page' ),
		'section' => 'creative_one_page_product_sale_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'creative_one_page_sale_padding_left',array(
		'default' => 0,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control( 'creative_one_page_sale_padding_left',	array(
		'label' => esc_html__( ' Product Sale Left Right Padding','creative-one-page' ),
		'section' => 'creative_one_page_product_sale_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	//Layouts
	$wp_customize->add_section('creative_one_page_left_right', array(
		'title'    => __('Layout Settings', 'creative-one-page'),
		'priority' => null,
		'panel'    => 'creative_one_page_panel_id',
	));

	$wp_customize->add_setting('creative_one_page_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','creative-one-page'),
       'section' => 'creative_one_page_left_right'
    ));

    $wp_customize->add_setting('creative_one_page_preloader_type_options', array(
		'default'           => 'Preloader 1',
		'sanitize_callback' => 'creative_one_page_sanitize_choices',
	));
	$wp_customize->add_control('creative_one_page_preloader_type_options',array(
		'type'           => 'radio',
		'label'          => __('Preloader Type', 'creative-one-page'),
		'section'        => 'creative_one_page_left_right',
		'choices'        => array(
			'Preloader 1'  => __('Preloader 1', 'creative-one-page'),
			'Preloader 2' => __('Preloader 2', 'creative-one-page'),
		),
	));

    $wp_customize->add_setting( 'creative_one_page_loader_background_color_settings', array(
	    'default' => '#222',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_loader_background_color_settings', array(
  		'label' => __('Preloader Background Color', 'creative-one-page'),
	    'section' => 'creative_one_page_left_right',
	    'settings' => 'creative_one_page_loader_background_color_settings',
  	)));

	$wp_customize->add_setting( 'creative_one_page_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ) );
    $wp_customize->add_control('creative_one_page_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Shop Page Sidebar','creative-one-page'),
		'section' => 'creative_one_page_left_right'
    ));

	$wp_customize->add_setting( 'creative_one_page_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ) );
    $wp_customize->add_control('creative_one_page_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','creative-one-page'),
		'section' => 'creative_one_page_left_right'
    ));

    $wp_customize->add_setting( 'creative_one_page_single_page_breadcrumb',array(
		'default' => true,
      	'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ) );
    $wp_customize->add_control('creative_one_page_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','creative-one-page' ),
        'section' => 'creative_one_page_left_right'
    ));

	$wp_customize->add_setting('creative_one_page_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'creative_one_page_sanitize_choices',
	));
	$wp_customize->add_control('creative_one_page_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Change Layouts', 'creative-one-page'),
		'section'        => 'creative_one_page_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'creative-one-page'),
			'Right Sidebar' => __('Right Sidebar', 'creative-one-page'),
			'One Column'    => __('One Column', 'creative-one-page'),
			'Grid Layout'   => __('Grid Layout', 'creative-one-page')
		),
	));

	$wp_customize->add_setting('creative_one_page_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'creative_one_page_sanitize_choices',
	));
	$wp_customize->add_control('creative_one_page_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'creative-one-page'),
		'section'        => 'creative_one_page_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'creative-one-page'),
			'Right Sidebar' => __('Right Sidebar', 'creative-one-page'),
			'One Column'    => __('One Column', 'creative-one-page'),
		),
	));

	$wp_customize->add_setting('creative_one_page_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'creative_one_page_sanitize_choices',
	));
	$wp_customize->add_control('creative_one_page_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'creative-one-page'),
		'section'        => 'creative_one_page_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'creative-one-page'),
			'Right Sidebar' => __('Right Sidebar', 'creative-one-page'),
			'One Column'    => __('One Column', 'creative-one-page'),
		),
	));

	$wp_customize->add_setting('creative_one_page_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control('creative_one_page_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','creative-one-page'),
        'description' => __('Here you can change the Width layout. ','creative-one-page'),
        'section' => 'creative_one_page_left_right',
        'choices' => array(
            'Default' => __('Default','creative-one-page'),
            'Container' => __('Container','creative-one-page'),
            'Box Container' => __('Box Container','creative-one-page'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'creative_one_page_theme_button', array(
		'title' => __('Button Option','creative-one-page'),
		'panel' => 'creative_one_page_panel_id',
	));

	$wp_customize->add_setting('creative_one_page_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','creative-one-page'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'creative_one_page_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('creative_one_page_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','creative-one-page'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'creative_one_page_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'creative_one_page_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	) );
	$wp_customize->add_control( 'creative_one_page_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','creative-one-page' ),
		'section'     => 'creative_one_page_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Top Bar
	$wp_customize->add_section('creative_one_page_topbar',array(
		'title'	=> __('Topbar Section','creative-one-page'),
		'description'	=> __('Add topbar content','creative-one-page'),
		'priority'	=> null,
		'panel' => 'creative_one_page_panel_id',
	));

	$wp_customize->add_setting('creative_one_page_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_search_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Search','creative-one-page'),
       'section' => 'creative_one_page_topbar'
    ));

    //Sticky Header
	$wp_customize->add_setting( 'creative_one_page_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ) );
    $wp_customize->add_control('creative_one_page_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','creative-one-page' ),
        'section' => 'creative_one_page_topbar'
    ));

	$wp_customize->add_setting('creative_one_page_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('creative_one_page_facebook_url',array(
		'label'	=> __('Add Facebook link','creative-one-page'),
		'section'	=> 'creative_one_page_topbar',
		'setting'	=> 'creative_one_page_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('creative_one_page_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('creative_one_page_twitter_url',array(
		'label'	=> __('Add Twitter link','creative-one-page'),
		'section'	=> 'creative_one_page_topbar',
		'setting'	=> 'creative_one_page_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('creative_one_page_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('creative_one_page_linkedin_url',array(
		'label'	=> __('Add Linkedin link','creative-one-page'),
		'section'	=> 'creative_one_page_topbar',
		'setting'	=> 'creative_one_page_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('creative_one_page_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('creative_one_page_instagram_url',array(
		'label'	=> __('Add Instagram link','creative-one-page'),
		'section'	=> 'creative_one_page_topbar',
		'setting'	=> 'creative_one_page_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('creative_one_page_phone1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'creative_one_page_sanitize_phone_number',
	));
	$wp_customize->add_control('creative_one_page_phone1',array(
		'label'	=> __('Phone Number','creative-one-page'),
		'section'	=> 'creative_one_page_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('creative_one_page_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email',
	));
	$wp_customize->add_control('creative_one_page_mail1',array(
		'label'	=> __('Mail Address','creative-one-page'),
		'section'	=> 'creative_one_page_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('creative_one_page_menu_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'creative_one_page_sanitize_choices',
	));
	$wp_customize->add_control('creative_one_page_menu_weight',array(
		'label'	=> __('Menus Weight ','creative-one-page'),
		'section'=> 'creative_one_page_topbar',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','creative-one-page'),
            '200' => __('200','creative-one-page'),
            '300' => __('300','creative-one-page'),
            '400' => __('400','creative-one-page'),
            '500' => __('500','creative-one-page'),
            '600' => __('600','creative-one-page'),
            '700' => __('700','creative-one-page'),
            '800' => __('800','creative-one-page'),
            '900' => __('900','creative-one-page'),
        ),
	));

	$wp_customize->add_setting( 'creative_one_page_menu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_menu_color_settings', array(
  		'label' => __('Menu Color', 'creative-one-page'),
	    'section' => 'creative_one_page_topbar',
	    'settings' => 'creative_one_page_menu_color_settings',
  	)));

  	$wp_customize->add_setting( 'creative_one_page_menu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_menu_hover_color_settings', array(
  		'label' => __('Menu Hover Color', 'creative-one-page'),
	    'section' => 'creative_one_page_topbar',
	    'settings' => 'creative_one_page_menu_hover_color_settings',
  	)));

  	$wp_customize->add_setting( 'creative_one_page_submenu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_submenu_color_settings', array(
  		'label' => __('Sub-menu Color', 'creative-one-page'),
	    'section' => 'creative_one_page_topbar',
	    'settings' => 'creative_one_page_submenu_color_settings',
  	)));

  	$wp_customize->add_setting( 'creative_one_page_submenu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_submenu_hover_color_settings', array(
  		'label' => __('Sub-menu Hover Color', 'creative-one-page'),
	    'section' => 'creative_one_page_topbar',
	    'settings' => 'creative_one_page_submenu_hover_color_settings',
  	)));

	//Slider
	$wp_customize->add_section( 'creative_one_page_slider' , array(
    	'title'      => __( 'Slider Settings', 'creative-one-page' ),
		'priority'   => null,
		'panel' => 'creative_one_page_panel_id'
	) );

	$wp_customize->add_setting('creative_one_page_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','creative-one-page'),
       'section' => 'creative_one_page_slider'
    ));

    $wp_customize->add_setting('creative_one_page_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','creative-one-page'),
       'section' => 'creative_one_page_slider'
    ));

    $wp_customize->add_setting('creative_one_page_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','creative-one-page'),
       'section' => 'creative_one_page_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'creative_one_page_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'creative_one_page_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'creative_one_page_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'creative-one-page' ),
			'description'	=> __('Size of image should be 1600 x 633','creative-one-page'),
			'section'  => 'creative_one_page_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//Slider excerpt
	$wp_customize->add_setting( 'creative_one_page_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	) );
	$wp_customize->add_control( 'creative_one_page_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','creative-one-page' ),
		'section'     => 'creative_one_page_slider',
		'type'        => 'number',
		'settings'    => 'creative_one_page_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('creative_one_page_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','creative-one-page'),
		'description'    => __('This option will add colors over the slider.','creative-one-page'),
       'section' => 'creative_one_page_slider'
    ));

    $wp_customize->add_setting('creative_one_page_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'creative_one_page_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'creative-one-page'),
		'section'  => 'creative_one_page_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','creative-one-page'),
		'settings' => 'creative_one_page_slider_image_overlay_color',
	)));

	//Opacity
	$wp_customize->add_setting('creative_one_page_slider_image_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control( 'creative_one_page_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','creative-one-page' ),
	'section'     => 'creative_one_page_slider',
	'type'        => 'select',
	'settings'    => 'creative_one_page_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','creative-one-page'),
		'0.1' =>  esc_attr('0.1','creative-one-page'),
		'0.2' =>  esc_attr('0.2','creative-one-page'),
		'0.3' =>  esc_attr('0.3','creative-one-page'),
		'0.4' =>  esc_attr('0.4','creative-one-page'),
		'0.5' =>  esc_attr('0.5','creative-one-page'),
		'0.6' =>  esc_attr('0.6','creative-one-page'),
		'0.7' =>  esc_attr('0.7','creative-one-page'),
		'0.8' =>  esc_attr('0.8','creative-one-page'),
		'0.9' =>  esc_attr('0.9','creative-one-page')
	),
	));

	$wp_customize->add_setting( 'creative_one_page_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'=> 'creative_one_page_sanitize_number_range',
	));
	$wp_customize->add_control( 'creative_one_page_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','creative-one-page' ),
		'section' => 'creative_one_page_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('creative_one_page_slider_image_height',array(
		'default'=> __('550','creative-one-page'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_slider_image_height',array(
		'label'	=> __('Slider Image Height','creative-one-page'),
		'section'=> 'creative_one_page_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('creative_one_page_slider_button',array(
		'default'=> __('READ MORE','creative-one-page'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_slider_button',array(
		'label'	=> __('Slider Button','creative-one-page'),
		'section'=> 'creative_one_page_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('creative_one_page_top_bottom_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_top_bottom_slider_content_space',array(
		'label'	=> __('Top Bottom Slider Content Space','creative-one-page'),
		'section'=> 'creative_one_page_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('creative_one_page_left_right_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_left_right_slider_content_space',array(
		'label'	=> __('Left Right Slider Content Space','creative-one-page'),
		'section'=> 'creative_one_page_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	// Our Services Settings
	$wp_customize->add_section('creative_one_page_services_setting',array(
		'title'	=> __('Our Services Settings','creative-one-page'),
		'panel' => 'creative_one_page_panel_id',
	));

	$wp_customize->add_setting('creative_one_page_our_services_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_our_services_number',array(
		'label'	=> __('Increase the services number','creative-one-page'),
		'section'=> 'creative_one_page_services_setting',
		'type'=> 'number'
	));

	$count =  get_theme_mod('creative_one_page_our_services_number'); 
        for( $i=1; $i<=$count; $i++) { 

		$wp_customize->add_setting('creative_one_page_our_services_icon'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('creative_one_page_our_services_icon'.$i,array(
			'label'	=> __('Icon','creative-one-page').$i,
			'section'=> 'creative_one_page_services_setting',
			'type'=> 'text'
		));

		$wp_customize->add_setting('creative_one_page_our_services_title'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('creative_one_page_our_services_title'.$i,array(
			'label'	=> __('Title','creative-one-page').$i,
			'section'=> 'creative_one_page_services_setting',
			'type'=> 'text'
		));

		$wp_customize->add_setting('creative_one_page_our_services_text'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('creative_one_page_our_services_text'.$i,array(
			'label'	=> __('Text','creative-one-page').$i,
			'section'=> 'creative_one_page_services_setting',
			'type'=> 'text'
		));
	}

	// Our Work Settings

	$wp_customize->add_section('creative_one_page_projects',array(
		'title' => __("Our Work Settings",'creative-one-page'),
		'panel' => 'creative_one_page_panel_id',
    ));

    $wp_customize->add_setting('creative_one_page_projects_title',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('creative_one_page_projects_title',array(
        'label' => __('Section Title','creative-one-page'),
        'section'=> 'creative_one_page_projects',
        'setting'=> 'creative_one_page_projects_title',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('creative_one_page_tab_number',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('creative_one_page_tab_number',array(
        'label' => __('Number of Tabs to show','creative-one-page'),
        'section'   => 'creative_one_page_projects',
        'type'      => 'number'
    ));

    $count =  get_theme_mod('creative_one_page_tab_number');
    $categories = get_categories();
    $cats = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }
    for($i=1;$i<=$count;$i++) {

        $wp_customize->add_setting('creative_one_page_our_project_tab_title'.$i,array(
            'default'=> '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('creative_one_page_our_project_tab_title'.$i,array(
            'label' => __('Tab Title','creative-one-page').$i,
            'section'=> 'creative_one_page_projects',
            'setting'=> 'creative_one_page_our_project_tab_title'.$i,
            'type'=> 'text'
        ));

        $wp_customize->add_setting('creative_one_page_cate_tab'.$i,array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('creative_one_page_cate_tab'.$i,array(
            'type'    => 'select',
            'choices' => $cats,
            'label' => __('Select Tab project category','creative-one-page').$i,
            'section' => 'creative_one_page_projects',
        ));

        $wp_customize->add_setting('creative_one_page_tab_category_limit'.$i,array(
          'default'   => '',
          'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('creative_one_page_tab_category_limit'.$i,array(
          'label' => __('Number of Projects to show in this category','creative-one-page').$i,
          'section'   => 'creative_one_page_projects',
          'type'      => 'number'
        ));
    }

	//404 Page Setting
	$wp_customize->add_section('creative_one_page_404_page_setting',array(
		'title'	=> __('404 Page','creative-one-page'),
		'panel' => 'creative_one_page_panel_id',
	));	

	$wp_customize->add_setting('creative_one_page_title_404_page',array(
		'default'=> __('404 Not Found','creative-one-page'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_title_404_page',array(
		'label'	=> __('404 Page Title','creative-one-page'),
		'section'=> 'creative_one_page_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('creative_one_page_content_404_page',array(
		'default'=>  __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','creative-one-page'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_content_404_page',array(
		'label'	=> __('404 Page Content','creative-one-page'),
		'section'=> 'creative_one_page_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('creative_one_page_button_404_page',array(
		'default'=> __('Back to Home Page','creative-one-page'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_button_404_page',array(
		'label'	=> __('404 Page Button','creative-one-page'),
		'section'=> 'creative_one_page_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('creative_one_page_responsive_setting',array(
		'title'	=> __('Responsive Setting','creative-one-page'),
		'panel' => 'creative_one_page_panel_id',
	));

	$wp_customize->add_setting( 'creative_one_page_toggle_button_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_one_page_toggle_button_color_settings', array(
  		'label' => __('Toggle Button Color', 'creative-one-page'),
	    'section' => 'creative_one_page_responsive_setting',
	    'settings' => 'creative_one_page_toggle_button_color_settings',
  	)));

	$wp_customize->add_setting('creative_one_page_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','creative-one-page'),
       'section' => 'creative_one_page_responsive_setting'
    ));

    $wp_customize->add_setting('creative_one_page_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','creative-one-page'),
       'section' => 'creative_one_page_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('creative_one_page_blog_post',array(
		'title'	=> __('Blog Page Settings','creative-one-page'),
		'panel' => 'creative_one_page_panel_id',
	));	

	$wp_customize->add_setting('creative_one_page_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','creative-one-page'),
       'section' => 'creative_one_page_blog_post'
    ));

    $wp_customize->add_setting('creative_one_page_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','creative-one-page'),
       'section' => 'creative_one_page_blog_post'
    ));

    $wp_customize->add_setting('creative_one_page_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','creative-one-page'),
       'section' => 'creative_one_page_blog_post'
    ));

    $wp_customize->add_setting('creative_one_page_time_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','creative-one-page'),
       'section' => 'creative_one_page_blog_post'
    ));

    $wp_customize->add_setting('creative_one_page_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','creative-one-page'),
       'section' => 'creative_one_page_blog_post'
    ));

	$wp_customize->add_setting('creative_one_page_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control('creative_one_page_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','creative-one-page'),
        'section' => 'creative_one_page_blog_post',
        'choices' => array(
            'No Content' => __('No Content','creative-one-page'),
            'Excerpt Content' => __('Excerpt Content','creative-one-page'),
            'Full Content' => __('Full Content','creative-one-page'),
        ),
	) );

    $wp_customize->add_setting( 'creative_one_page_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	) );
	$wp_customize->add_control( 'creative_one_page_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','creative-one-page' ),
		'section'     => 'creative_one_page_blog_post',
		'type'        => 'number',
		'settings'    => 'creative_one_page_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'creative_one_page_post_suffix_option', array(
		'default'   => __('...','creative-one-page'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'creative_one_page_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','creative-one-page' ),
		'section'     => 'creative_one_page_blog_post',
		'type'        => 'text',
		'settings'    => 'creative_one_page_post_suffix_option',
	) );

	$wp_customize->add_setting('creative_one_page_button_text',array(
		'default'=> __('READ MORE','creative-one-page'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_button_text',array(
		'label'	=> __('Add Button Text','creative-one-page'),
		'section'=> 'creative_one_page_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'creative_one_page_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'creative_one_page_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','creative-one-page' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'creative-one-page' ),
        ),
		'section'     => 'creative_one_page_blog_post',
		'type'        => 'text',
		'settings'    => 'creative_one_page_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('creative_one_page_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control('creative_one_page_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','creative-one-page'),
        'section' => 'creative_one_page_blog_post',
        'choices' => array(
            'In Box' => __('In Box','creative-one-page'),
            'Without Box' => __('Without Box','creative-one-page'),
        ),
	) );

	$wp_customize->add_setting('creative_one_page_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','creative-one-page'),
       'section' => 'creative_one_page_blog_post'
    ));

	//Single Post Settings
	$wp_customize->add_section('creative_one_page_single_post',array(
		'title'	=> __('Single Post Settings','creative-one-page'),
		'panel' => 'creative_one_page_panel_id',
	));	

	$wp_customize->add_setting('creative_one_page_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','creative-one-page'),
       'section' => 'creative_one_page_single_post'
    ));

    $wp_customize->add_setting('creative_one_page_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','creative-one-page'),
       'section' => 'creative_one_page_single_post'
    ));

	$wp_customize->add_setting( 'creative_one_page_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ) );
    $wp_customize->add_control('creative_one_page_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','creative-one-page' ),
        'section' => 'creative_one_page_single_post'
    ));

    $wp_customize->add_setting( 'creative_one_page_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
		) );
	$wp_customize->add_control('creative_one_page_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Single Post Comment Box','creative-one-page'),
		'section' => 'creative_one_page_single_post'
		));

	$wp_customize->add_setting( 'creative_one_page_single_post_breadcrumb',array(
		'default' => true,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ) );
    $wp_customize->add_control('creative_one_page_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','creative-one-page' ),
        'section' => 'creative_one_page_single_post'
    ));

    $wp_customize->add_setting('creative_one_page_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control('creative_one_page_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','creative-one-page'),
        'section' => 'creative_one_page_single_post',
        'choices' => array(
            'categories' => __('Categories','creative-one-page'),
            'tags' => __('Tags','creative-one-page'),
        ),
	) );

	$wp_customize->add_setting('creative_one_page_related_post_title',array(
		'default'=> __('Related Posts','creative-one-page'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_related_post_title',array(
		'label'	=> __('Related Post Title','creative-one-page'),
		'section'=> 'creative_one_page_single_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('creative_one_page_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_related_posts_number',array(
		'label'	=> __('Related Post Number','creative-one-page'),
		'section'=> 'creative_one_page_single_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//no Result Found
	$wp_customize->add_section('creative_one_page_noresult_found',array(
		'title'	=> __('No Result Found','creative-one-page'),
		'panel' => 'creative_one_page_panel_id',
	));	

	$wp_customize->add_setting('creative_one_page_nosearch_found_title',array(
		'default'=> __('Nothing Found','creative-one-page'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','creative-one-page'),
		'section'=> 'creative_one_page_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('creative_one_page_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','creative-one-page'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('creative_one_page_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','creative-one-page'),
		'section'=> 'creative_one_page_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('creative_one_page_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
    ));
    $wp_customize->add_control('creative_one_page_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','creative-one-page'),
       'section' => 'creative_one_page_noresult_found'
    ));

	//footer
	$wp_customize->add_section('creative_one_page_footer_section', array(
		'title'       => __('Footer Text', 'creative-one-page'),
		'priority'    => null,
		'panel'       => 'creative_one_page_panel_id',
	));

	$wp_customize->add_setting('creative_one_page_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'creative_one_page_sanitize_choices',
    ));
    $wp_customize->add_control('creative_one_page_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'creative-one-page'),
        'section'     => 'creative_one_page_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'creative-one-page'),
        'choices' => array(
            '1'     => __('One', 'creative-one-page'),
            '2'     => __('Two', 'creative-one-page'),
            '3'     => __('Three', 'creative-one-page'),
            '4'     => __('Four', 'creative-one-page')
        ),
    ));

    $wp_customize->add_setting('creative_one_page_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'creative_one_page_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'creative-one-page'),
		'section'  => 'creative_one_page_footer_section',
	)));

	$wp_customize->add_setting('creative_one_page_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'creative_one_page_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','creative-one-page'),
        'section' => 'creative_one_page_footer_section'
	)));

	$wp_customize->add_setting('creative_one_page_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('creative_one_page_footer_copy', array(
		'label'   => __('Copyright Text', 'creative-one-page'),
		'section' => 'creative_one_page_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('creative_one_page_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control('creative_one_page_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','creative-one-page'),
        'section' => 'creative_one_page_footer_section',
        'choices' => array(
            'left' => __('Left','creative-one-page'),
            'right' => __('Right','creative-one-page'),
            'center' => __('Center','creative-one-page'),
        ),
	) );

	$wp_customize->add_setting('creative_one_page_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','creative-one-page' ),
		'section'=> 'creative_one_page_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('creative_one_page_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_copyright_padding',array(
		'label'	=> __('Copyright Padding','creative-one-page'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'creative_one_page_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('creative_one_page_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'creative_one_page_sanitize_checkbox'
	));
	$wp_customize->add_control('creative_one_page_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','creative-one-page'),
      	'section' => 'creative_one_page_footer_section',
	));

	$wp_customize->add_setting('creative_one_page_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'creative_one_page_sanitize_choices'
	));
	$wp_customize->add_control('creative_one_page_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','creative-one-page'),
        'section' => 'creative_one_page_footer_section',
        'choices' => array(
            'Left' => __('Left','creative-one-page'),
            'Right' => __('Right','creative-one-page'),
            'Center' => __('Center','creative-one-page'),
        ),
	) );

	$wp_customize->add_setting('creative_one_page_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'creative_one_page_sanitize_float',
	));
	$wp_customize->add_control('creative_one_page_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','creative-one-page'),
		'section'=> 'creative_one_page_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
	
}
add_action('customize_register', 'creative_one_page_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Creative_One_Page_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the concreative_one_page_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Creative_One_Page_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Creative_One_Page_Customize_Section_Pro(
				$manager,
				'creative_one_page_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Creative One Page', 'creative-one-page'),
					'pro_text' => esc_html__('GO PRO', 'creative-one-page'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/one-page-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('creative-one-page-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('creative-one-page-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Creative_One_Page_Customize::get_instance();