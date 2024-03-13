<?php
	
	/*---------------------------Width Layout -------------------*/
	$creative_one_page_theme_lay = get_theme_mod( 'creative_one_page_theme_options','Default');
    if($creative_one_page_theme_lay == 'Default'){
		$creative_one_page_custom_css .='body{';
			$creative_one_page_custom_css .='max-width: 100%;';
		$creative_one_page_custom_css .='}';
	}else if($creative_one_page_theme_lay == 'Container'){
		$creative_one_page_custom_css .='body{';
			$creative_one_page_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$creative_one_page_custom_css .='}';
		$creative_one_page_custom_css .='.serach_outer{';
			$creative_one_page_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$creative_one_page_custom_css .='}';
	}else if($creative_one_page_theme_lay == 'Box Container'){
		$creative_one_page_custom_css .='body{';
			$creative_one_page_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$creative_one_page_custom_css .='}';
		$creative_one_page_custom_css .='.serach_outer{';
			$creative_one_page_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$creative_one_page_custom_css .='}';
		$creative_one_page_custom_css .='.page-template-custom-front-page #header{';
			$creative_one_page_custom_css .='right:0;';
		$creative_one_page_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$creative_one_page_theme_lay = get_theme_mod( 'creative_one_page_slider_image_opacity','0.5');
	if($creative_one_page_theme_lay == '0'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.1'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.1';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.2'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.2';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.3'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.3';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.4'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.4';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.5'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.5';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.6'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.6';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.7'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.7';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.8'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.8';
		$creative_one_page_custom_css .='}';
		}else if($creative_one_page_theme_lay == '0.9'){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:0.9';
		$creative_one_page_custom_css .='}';
	}

	$creative_one_page_slider_hide = get_theme_mod('creative_one_page_slider_hide', false);
	if($creative_one_page_slider_hide == false){
		$creative_one_page_custom_css .='.page-template-custom-front-page #header{';
			$creative_one_page_custom_css .='position: static; background: #e3e8e9; padding: 10px 0;';
		$creative_one_page_custom_css .='}';
		$creative_one_page_custom_css .='#home-services{';
			$creative_one_page_custom_css .='position: static; margin: 30px 0 0 0';
		$creative_one_page_custom_css .='}';
	}

	/*------------- Button Settings option-------------------*/
	$creative_one_page_button_padding_top_bottom = get_theme_mod('creative_one_page_button_padding_top_bottom');
	$creative_one_page_button_padding_left_right = get_theme_mod('creative_one_page_button_padding_left_right');
	$creative_one_page_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"],#category .explore-btn a{';
		$creative_one_page_custom_css .='padding-top: '.esc_attr($creative_one_page_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($creative_one_page_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($creative_one_page_button_padding_left_right).'px !important; padding-right: '.esc_attr($creative_one_page_button_padding_left_right).'px !important; display:inline-block;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_button_border_radius = get_theme_mod('creative_one_page_button_border_radius');
	$creative_one_page_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"], #category .explore-btn a{';
		$creative_one_page_custom_css .='border-radius: '.esc_attr($creative_one_page_button_border_radius).'px;';
	$creative_one_page_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$creative_one_page_theme_lay = get_theme_mod( 'creative_one_page_background_skin_mode','Transparent Background');
    if($creative_one_page_theme_lay == 'With Background'){
		$creative_one_page_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$creative_one_page_custom_css .='background-color: #fff;';
		$creative_one_page_custom_css .='}';
	}else if($creative_one_page_theme_lay == 'Transparent Background'){
		$creative_one_page_custom_css .='.page-box-single{';
			$creative_one_page_custom_css .='background-color: transparent;';
		$creative_one_page_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$creative_one_page_top_bottom_product_button_padding = get_theme_mod('creative_one_page_top_bottom_product_button_padding', 10);
	$creative_one_page_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$creative_one_page_custom_css .='padding-top: '.esc_attr($creative_one_page_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($creative_one_page_top_bottom_product_button_padding).'px;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_left_right_product_button_padding = get_theme_mod('creative_one_page_left_right_product_button_padding', 16);
	$creative_one_page_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$creative_one_page_custom_css .='padding-left: '.esc_attr($creative_one_page_left_right_product_button_padding).'px; padding-right: '.esc_attr($creative_one_page_left_right_product_button_padding).'px;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_product_button_border_radius = get_theme_mod('creative_one_page_product_button_border_radius', 0);
	$creative_one_page_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$creative_one_page_custom_css .='border-radius: '.esc_attr($creative_one_page_product_button_border_radius).'px;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_show_related_products = get_theme_mod('creative_one_page_show_related_products',true);
	if($creative_one_page_show_related_products == false){
		$creative_one_page_custom_css .='.related.products{';
			$creative_one_page_custom_css .='display: none;';
		$creative_one_page_custom_css .='}';
	}

	$creative_one_page_show_wooproducts_border = get_theme_mod('creative_one_page_show_wooproducts_border', false);
	if($creative_one_page_show_wooproducts_border == true){
		$creative_one_page_custom_css .='.products li{';
			$creative_one_page_custom_css .='border: 1px solid #767676;';
		$creative_one_page_custom_css .='}';
	}

	$creative_one_page_top_bottom_wooproducts_padding = get_theme_mod('creative_one_page_top_bottom_wooproducts_padding',0);
	$creative_one_page_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$creative_one_page_custom_css .='padding-top: '.esc_attr($creative_one_page_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($creative_one_page_top_bottom_wooproducts_padding).'px !important;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_left_right_wooproducts_padding = get_theme_mod('creative_one_page_left_right_wooproducts_padding',0);
	$creative_one_page_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$creative_one_page_custom_css .='padding-left: '.esc_attr($creative_one_page_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($creative_one_page_left_right_wooproducts_padding).'px !important;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_wooproducts_border_radius = get_theme_mod('creative_one_page_wooproducts_border_radius',0);
	$creative_one_page_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$creative_one_page_custom_css .='border-radius: '.esc_attr($creative_one_page_wooproducts_border_radius).'px;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_wooproducts_box_shadow = get_theme_mod('creative_one_page_wooproducts_box_shadow',0);
	$creative_one_page_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$creative_one_page_custom_css .='box-shadow: '.esc_attr($creative_one_page_wooproducts_box_shadow).'px '.esc_attr($creative_one_page_wooproducts_box_shadow).'px '.esc_attr($creative_one_page_wooproducts_box_shadow).'px #e4e4e4;';
	$creative_one_page_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$creative_one_page_copyright_content_align = get_theme_mod('creative_one_page_copyright_content_align');
	if($creative_one_page_copyright_content_align != false){
		$creative_one_page_custom_css .='.copyright{';
			$creative_one_page_custom_css .='text-align: '.esc_attr($creative_one_page_copyright_content_align).';';
		$creative_one_page_custom_css .='}';
	}

	$creative_one_page_footer_content_font_size = get_theme_mod('creative_one_page_footer_content_font_size', 16);
	$creative_one_page_custom_css .='.copyright p{';
		$creative_one_page_custom_css .='font-size: '.esc_attr($creative_one_page_footer_content_font_size).'px;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_copyright_padding = get_theme_mod('creative_one_page_copyright_padding', 15);
	$creative_one_page_custom_css .='.copyright{';
		$creative_one_page_custom_css .='padding-top: '.esc_attr($creative_one_page_copyright_padding).'px; padding-bottom: '.esc_attr($creative_one_page_copyright_padding).'px;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_footer_widget_bg_color = get_theme_mod('creative_one_page_footer_widget_bg_color');
	$creative_one_page_custom_css .='#footer{';
		$creative_one_page_custom_css .='background-color: '.esc_attr($creative_one_page_footer_widget_bg_color).';';
	$creative_one_page_custom_css .='}';

	$creative_one_page_footer_widget_bg_image = get_theme_mod('creative_one_page_footer_widget_bg_image');
	if($creative_one_page_footer_widget_bg_image != false){
		$creative_one_page_custom_css .='#footer{';
			$creative_one_page_custom_css .='background: url('.esc_attr($creative_one_page_footer_widget_bg_image).');';
		$creative_one_page_custom_css .='}';
	}

	// scroll to top
	$creative_one_page_scroll_font_size_icon = get_theme_mod('creative_one_page_scroll_font_size_icon', 22);
	$creative_one_page_custom_css .='#scroll-top .fas{';
		$creative_one_page_custom_css .='font-size: '.esc_attr($creative_one_page_scroll_font_size_icon).'px;';
	$creative_one_page_custom_css .='}';

	// Slider Height 
	$creative_one_page_slider_image_height = get_theme_mod('creative_one_page_slider_image_height');
	$creative_one_page_custom_css .='#slider img{';
		$creative_one_page_custom_css .='height: '.esc_attr($creative_one_page_slider_image_height).'px;';
	$creative_one_page_custom_css .='}';

	// Display Blog Post 
	$creative_one_page_display_blog_page_post = get_theme_mod( 'creative_one_page_display_blog_page_post','In Box');
    if($creative_one_page_display_blog_page_post == 'Without Box'){
		$creative_one_page_custom_css .='.page-box{';
			$creative_one_page_custom_css .='border:none; margin:25px 0;';
		$creative_one_page_custom_css .='}';
	}

	// slider overlay
	$creative_one_page_slider_overlay = get_theme_mod('creative_one_page_slider_overlay', true);
	if($creative_one_page_slider_overlay == false){
		$creative_one_page_custom_css .='#slider img{';
			$creative_one_page_custom_css .='opacity:1;';
		$creative_one_page_custom_css .='}';
	} 
	$creative_one_page_slider_image_overlay_color = get_theme_mod('creative_one_page_slider_image_overlay_color', true);
	if($creative_one_page_slider_overlay != false){
		$creative_one_page_custom_css .='#slider{';
			$creative_one_page_custom_css .='background-color: '.esc_attr($creative_one_page_slider_image_overlay_color).';';
		$creative_one_page_custom_css .='}';
	}

	// site title and tagline font size option
	$creative_one_page_site_title_size_option = get_theme_mod('creative_one_page_site_title_size_option', 30);{
	$creative_one_page_custom_css .='.logo h1 a, .logo p a{';
	$creative_one_page_custom_css .='font-size: '.esc_attr($creative_one_page_site_title_size_option).'px;';
		$creative_one_page_custom_css .='}';
	}

	$creative_one_page_site_tagline_size_option = get_theme_mod('creative_one_page_site_tagline_size_option', 12);{
	$creative_one_page_custom_css .='.logo p{';
	$creative_one_page_custom_css .='font-size: '.esc_attr($creative_one_page_site_tagline_size_option).'px !important;';
		$creative_one_page_custom_css .='}';
	}

	// woocommerce product sale settings
	$creative_one_page_border_radius_product_sale = get_theme_mod('creative_one_page_border_radius_product_sale',0);
	$creative_one_page_custom_css .='.woocommerce span.onsale {';
		$creative_one_page_custom_css .='border-radius: '.esc_attr($creative_one_page_border_radius_product_sale).'px;';
	$creative_one_page_custom_css .='}';

	$creative_one_page_align_product_sale = get_theme_mod('creative_one_page_align_product_sale', 'Right');
	if($creative_one_page_align_product_sale == 'Right' ){
		$creative_one_page_custom_css .='.woocommerce ul.products li.product .onsale{';
			$creative_one_page_custom_css .=' left:auto; right:0;';
		$creative_one_page_custom_css .='}';
	}elseif($creative_one_page_align_product_sale == 'Left' ){
		$creative_one_page_custom_css .='.woocommerce ul.products li.product .onsale{';
			$creative_one_page_custom_css .=' left:0; right:auto;';
		$creative_one_page_custom_css .='}';
	}

	$creative_one_page_product_sale_font_size = get_theme_mod('creative_one_page_product_sale_font_size',14);
	$creative_one_page_custom_css .='.woocommerce span.onsale{';
		$creative_one_page_custom_css .='font-size: '.esc_attr($creative_one_page_product_sale_font_size).'px;';
	$creative_one_page_custom_css .='}';

	// product sale padding top /bottom
	$creative_one_page_sale_padding_top = get_theme_mod('creative_one_page_sale_padding_top', '');
	$creative_one_page_custom_css .='.woocommerce ul.products li.product .onsale{';
	$creative_one_page_custom_css .='padding-top: '.esc_attr($creative_one_page_sale_padding_top).'px; padding-bottom: '.esc_attr($creative_one_page_sale_padding_top).'px !important;';
	$creative_one_page_custom_css .='}';

	// product sale padding left/right
	$creative_one_page_sale_padding_left = get_theme_mod('creative_one_page_sale_padding_left', '');
	$creative_one_page_custom_css .='.woocommerce ul.products li.product .onsale{';
	$creative_one_page_custom_css .='padding-left: '.esc_attr($creative_one_page_sale_padding_left).'px; padding-right: '.esc_attr($creative_one_page_sale_padding_left).'px;';
	$creative_one_page_custom_css .='}';

	// preloader background option
	$creative_one_page_loader_background_color_settings = get_theme_mod('creative_one_page_loader_background_color_settings');
	$creative_one_page_custom_css .='#loader-wrapper .loader-section{';
		$creative_one_page_custom_css .='background-color: '.esc_attr($creative_one_page_loader_background_color_settings).';';
	$creative_one_page_custom_css .='} ';

	// woocommerce Product Navigation
	$creative_one_page_products_navigation = get_theme_mod('creative_one_page_products_navigation', 'Yes');
	if($creative_one_page_products_navigation == 'No'){
		$creative_one_page_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$creative_one_page_custom_css .='display: none;';
		$creative_one_page_custom_css .='}';
	}

	// slider top and bottom padding
	$creative_one_page_top_bottom_slider_content_space = get_theme_mod('creative_one_page_top_bottom_slider_content_space');
	$creative_one_page_left_right_slider_content_space = get_theme_mod('creative_one_page_left_right_slider_content_space');
	$creative_one_page_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$creative_one_page_custom_css .='top: '.esc_attr($creative_one_page_top_bottom_slider_content_space).'%; bottom: '.esc_attr($creative_one_page_top_bottom_slider_content_space).'%;left: '.esc_attr($creative_one_page_left_right_slider_content_space).'%;right: '.esc_attr($creative_one_page_left_right_slider_content_space).'%;';
	$creative_one_page_custom_css .='}';

	// responsive settings

	$creative_one_page_slider = get_theme_mod( 'creative_one_page_responsive_slider',false);
	if($creative_one_page_slider == true && get_theme_mod( 'creative_one_page_slider_hide', false) == false){
    	$creative_one_page_custom_css .='#slider{';
			$creative_one_page_custom_css .='display:none;';
		$creative_one_page_custom_css .='} ';
	}
    if($creative_one_page_slider == true){
    	$creative_one_page_custom_css .='@media screen and (max-width:575px) {';
		$creative_one_page_custom_css .='#slider{';
			$creative_one_page_custom_css .='display:block;';
		$creative_one_page_custom_css .='} }';
	}else if($creative_one_page_slider == false){
		$creative_one_page_custom_css .='@media screen and (max-width:575px) {';
		$creative_one_page_custom_css .='#slider{';
			$creative_one_page_custom_css .='display:none;';
		$creative_one_page_custom_css .='} }';
	}

	$creative_one_page_scroll = get_theme_mod( 'creative_one_page_responsive_scroll',true);
	if($creative_one_page_scroll == true && get_theme_mod( 'creative_one_page_enable_disable_scroll', true) == false){
    	$creative_one_page_custom_css .='#scroll-top{';
			$creative_one_page_custom_css .='visibility: hidden !important;';
		$creative_one_page_custom_css .='} ';
	}
    if($creative_one_page_scroll == true){
    	$creative_one_page_custom_css .='@media screen and (max-width:575px) {';
		$creative_one_page_custom_css .='#scroll-top{';
			$creative_one_page_custom_css .='visibility: visible !important;';
		$creative_one_page_custom_css .='} }';
	}else if($creative_one_page_scroll == false){
		$creative_one_page_custom_css .='@media screen and (max-width:575px) {';
		$creative_one_page_custom_css .='#scroll-top{';
			$creative_one_page_custom_css .='visibility: hidden !important;';
		$creative_one_page_custom_css .='} }';
	}

	// font weight
	$creative_one_page_menu_weight = get_theme_mod('creative_one_page_menu_weight');{
		$creative_one_page_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
			$creative_one_page_custom_css .='font-weight: '.esc_attr($creative_one_page_menu_weight).';';
		$creative_one_page_custom_css .='}';
	}

	// Menu Color Option
	$creative_one_page_menu_color_settings = get_theme_mod('creative_one_page_menu_color_settings');
	$creative_one_page_custom_css .='.primary-navigation ul li a{';
		$creative_one_page_custom_css .='color: '.esc_attr($creative_one_page_menu_color_settings).';';
	$creative_one_page_custom_css .='} ';

	// Menu Hover Color Option
	$creative_one_page_menu_hover_color_settings = get_theme_mod('creative_one_page_menu_hover_color_settings');
	$creative_one_page_custom_css .='.primary-navigation ul li a:hover {';
		$creative_one_page_custom_css .='color: '.esc_attr($creative_one_page_menu_hover_color_settings).';';
	$creative_one_page_custom_css .='} ';

	// Submenu Color Option
	$creative_one_page_submenu_color_settings = get_theme_mod('creative_one_page_submenu_color_settings');
	$creative_one_page_custom_css .='.primary-navigation ul.sub-menu li a {';
		$creative_one_page_custom_css .='color: '.esc_attr($creative_one_page_submenu_color_settings).';';
	$creative_one_page_custom_css .='} ';

	// Submenu Hover Color Option
	$creative_one_page_submenu_hover_color_settings = get_theme_mod('creative_one_page_submenu_hover_color_settings');
	$creative_one_page_custom_css .='.primary-navigation ul.sub-menu li a:hover {';
	$creative_one_page_custom_css .='color: '.esc_attr($creative_one_page_submenu_hover_color_settings).';';
	$creative_one_page_custom_css .='} ';

	//Toggle Button Color Option
	$creative_one_page_toggle_button_color_settings = get_theme_mod('creative_one_page_toggle_button_color_settings');
	$creative_one_page_custom_css .='.toggle-menu i  {';
		$creative_one_page_custom_css .='color: '.esc_attr($creative_one_page_toggle_button_color_settings).';';
	$creative_one_page_custom_css .='} ';

	// site tagline color
	$creative_one_page_site_tagline_color = get_theme_mod('creative_one_page_site_tagline_color');
	$creative_one_page_custom_css .='.logo p {';
		$creative_one_page_custom_css .='color: '.esc_attr($creative_one_page_site_tagline_color).' !important;';
	$creative_one_page_custom_css .='}';

	// site title color
	$creative_one_page_site_title_color = get_theme_mod('creative_one_page_site_title_color');
	$creative_one_page_custom_css .='.site-title a{';
		$creative_one_page_custom_css .='color: '.esc_attr($creative_one_page_site_title_color).' !important;';
	$creative_one_page_custom_css .='}';

	// site top-bottom logo padding 
	$creative_one_page_logo_padding_top = get_theme_mod('creative_one_page_logo_padding_top', '');
	$creative_one_page_custom_css .='.logo{';
	$creative_one_page_custom_css .='padding-top: '.esc_attr($creative_one_page_logo_padding_top).'px; padding-bottom: '.esc_attr($creative_one_page_logo_padding_top).'px;';
	$creative_one_page_custom_css .='}';

	// site left-right logo padding 
	$creative_one_page_logo_padding_left = get_theme_mod('creative_one_page_logo_padding_left', '');
	$creative_one_page_custom_css .='.logo{';
	$creative_one_page_custom_css .='padding-left: '.esc_attr($creative_one_page_logo_padding_left).'px; padding-right: '.esc_attr($creative_one_page_logo_padding_left).'px;';
	$creative_one_page_custom_css .='}';

	// site top-bottom logo margin 
	$creative_one_page_logo_margin_top = get_theme_mod('creative_one_page_logo_margin_top', '');
	$creative_one_page_custom_css .='.logo{';
	$creative_one_page_custom_css .='margin-top: '.esc_attr($creative_one_page_logo_margin_top).'px; margin-bottom: '.esc_attr($creative_one_page_logo_margin_top).'px;';
	$creative_one_page_custom_css .='}';

	// site left-right logo margin
	$creative_one_page_logo_margin_left = get_theme_mod('creative_one_page_logo_margin_left', '');
	$creative_one_page_custom_css .='.logo{';
	$creative_one_page_custom_css .='margin-left: '.esc_attr($creative_one_page_logo_margin_left).'px; margin-right: '.esc_attr($creative_one_page_logo_margin_left).'px;';
	$creative_one_page_custom_css .='}';
