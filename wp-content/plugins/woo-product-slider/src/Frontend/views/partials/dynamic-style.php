<?php
/**
 * Dynamic Style.
 *
 * @package    Woo_Product_Slider
 * @subpackage Woo_Product_Slider/Frontend/views
 * @author     ShapedPlugin <support@shapedplugin.com>
 */

$slider_title    = isset( $shortcode_data['slider_title'] ) ? $shortcode_data['slider_title'] : false;
$pagination_data = isset( $shortcode_data['pagination'] ) ? $shortcode_data['pagination'] : '';
switch ( $pagination_data ) {
	case 'true':
		$pagination        = 'true';
		$pagination_mobile = 'true';
		break;
	case 'hide_on_mobile':
		$pagination        = 'true';
		$pagination_mobile = 'false';
		break;
	default:
		$pagination        = 'false';
		$pagination_mobile = 'false';
}
$pagination_dots_bg = isset( $shortcode_data['pagination_dots_color'] ) ? $shortcode_data['pagination_dots_color'] : array(
	'color'        => '#cccccc',
	'active_color' => '#333333',
);
$navigation_data    = isset( $shortcode_data['navigation_arrow'] ) ? $shortcode_data['navigation_arrow'] : '';
switch ( $navigation_data ) {
	case 'true':
		$navigation        = 'true';
		$navigation_mobile = 'true';
		break;
	case 'hide_on_mobile':
		$navigation        = 'true';
		$navigation_mobile = 'false';
		break;
	default:
		$navigation        = 'false';
		$navigation_mobile = 'false';
}
$nav_arrow_colors         = isset( $shortcode_data['navigation_arrow_colors'] ) ? $shortcode_data['navigation_arrow_colors'] : array(
	'color'            => '#444444',
	'hover_color'      => '#ffffff',
	'background'       => 'transparent',
	'hover_background' => '#444444',
	'border'           => '#aaaaaa',
	'hover_border'     => '#444444',
);
$product_del_price_color  = isset( $shortcode_data['product_del_price_color'] ) ? $shortcode_data['product_del_price_color'] : '#888888';
$product_rating_colors    = isset( $shortcode_data['product_rating_colors'] ) ? $shortcode_data['product_rating_colors'] : array(
	'color'       => '#F4C100',
	'empty_color' => '#c8c8c8',
);
$slider_title             = isset( $shortcode_data['slider_title'] ) ? $shortcode_data['slider_title'] : false;
$product_name             = isset( $shortcode_data['product_name'] ) ? $shortcode_data['product_name'] : true;
$product_price            = isset( $shortcode_data['product_price'] ) ? $shortcode_data['product_price'] : true;
$product_rating           = isset( $shortcode_data['product_rating'] ) ? $shortcode_data['product_rating'] : true;
$add_to_cart_button       = isset( $shortcode_data['add_to_cart_button'] ) ? $shortcode_data['add_to_cart_button'] : true;
$add_to_cart_button_color = isset( $shortcode_data['add_to_cart_button_colors'] ) ? $shortcode_data['add_to_cart_button_colors'] : array(
	'color'            => '#444444',
	'hover_color'      => '#ffffff',
	'background'       => 'transparent',
	'hover_background' => '#222222',
);
$add_to_cart_border       = isset( $shortcode_data['add_to_cart_border'] ) ? $shortcode_data['add_to_cart_border'] : array(
	'all'         => '1',
	'style'       => 'solid',
	'color'       => '#222222',
	'hover_color' => '#222222',
);
	// Typography.
$slider_title_typography  = isset( $shortcode_data['slider_title_typography'] ) ? $shortcode_data['slider_title_typography'] : array(
	'font-family'    => 'Open Sans',
	'font-weight'    => '600',
	'font-style'     => '',
	'subset'         => '',
	'text-align'     => 'left',
	'text-transform' => 'none',
	'font-size'      => '22',
	'line-height'    => '23',
	'letter-spacing' => '',
	'color'          => '#444444',
	'type'           => 'google',
	'unit'           => 'px',
);
$product_name_typography  = isset( $shortcode_data['product_name_typography'] ) ? $shortcode_data['product_name_typography'] : array(
	'font-family'    => 'Open Sans',
	'font-weight'    => '600',
	'font-style'     => '',
	'subset'         => '',
	'text-align'     => 'center',
	'text-transform' => 'none',
	'font-size'      => '15',
	'line-height'    => '20',
	'letter-spacing' => '',
	'color'          => '#444444',
	'hover_color'    => '#955b89',
	'type'           => 'google',
	'unit'           => 'px',
);
$name_hover_color         = isset( $product_name_typography['hover_color'] ) ? $product_name_typography['hover_color'] : '#955b89';
$product_price_typography = isset( $shortcode_data['product_price_typography'] ) ? $shortcode_data['product_price_typography'] : array(
	'font-family'    => 'Open Sans',
	'font-weight'    => '700',
	'font-style'     => '',
	'subset'         => '',
	'text-align'     => 'center',
	'text-transform' => 'none',
	'font-size'      => '14',
	'line-height'    => '19',
	'letter-spacing' => '',
	'color'          => '#222222',
	'type'           => 'google',
	'unit'           => 'px',
);
$pagination_dots_bg       = isset( $shortcode_data['pagination_dots_color'] ) ? $shortcode_data['pagination_dots_color'] : array(
	'color'        => '#cccccc',
	'active_color' => '#333333',
);
$product_image_border     = isset( $shortcode_data['product_image_border'] ) ? $shortcode_data['product_image_border'] : array(
	'all'         => '1',
	'style'       => 'solid',
	'color'       => '#dddddd',
	'hover_color' => '#dddddd',
);

if ( $slider_title ) {
	$dynamic_style .= '
    #wps-slider-section.wps-slider-section-' . $post_id . ' .sp-woo-product-slider-section-title{
        color: ' . $slider_title_typography['color'] . ';
        font-size: ' . $slider_title_typography['font-size'] . 'px;
    }';
}
if ( 'true' === $pagination ) {
	$dynamic_style .= '#wps-slider-section #sp-woo-product-slider-' . $post_id . '.wps-product-section .wpsp-pagination-dot .swiper-pagination-bullet{
        background-color:' . $pagination_dots_bg['color'] . ';
    }
    #wps-slider-section #sp-woo-product-slider-' . $post_id . '.wps-product-section .wpsp-pagination-dot .swiper-pagination-bullet.swiper-pagination-bullet-active{
        background-color:' . $pagination_dots_bg['active_color'] . ';
    }';
	if ( 'hide_on_mobile' === $pagination_data ) {
		$dynamic_style .= '@media (max-width: 480px) {
			#wps-slider-section #sp-woo-product-slider-' . $post_id . '.wps-product-section .wpsp-pagination-dot {
                display:none;
			}
		}';
	}
}

if ( 'true' === $navigation ) {
	$nav_arrow_colors['border']       = isset( $nav_arrow_colors['border'] ) ? $nav_arrow_colors['border'] : '#aaaaaa';
	$nav_arrow_colors['hover_border'] = isset( $nav_arrow_colors['hover_border'] ) ? $nav_arrow_colors['hover_border'] : '#444444';
	$dynamic_style                   .= '#wps-slider-section #sp-woo-product-slider-' . $post_id . '.wps-product-section .wpsp-nav {
        color:' . $nav_arrow_colors['color'] . ';
        background-color:' . $nav_arrow_colors['background'] . ';
        border: 1px solid ' . $nav_arrow_colors['border'] . ';
    }
    #wps-slider-section #sp-woo-product-slider-' . $post_id . '.wps-product-section .wpsp-nav:hover {
        color:' . $nav_arrow_colors['hover_color'] . ';
        background-color:' . $nav_arrow_colors['hover_background'] . ';
        border-color:' . $nav_arrow_colors['hover_border'] . ';
    }';
	if ( 'hide_on_mobile' === $navigation_data ) {
		$dynamic_style .= '@media (max-width: 480px) {
			#wps-slider-section #sp-woo-product-slider-' . $post_id . '.wps-product-section .wpsp-nav {
                display:none;
			}
		}';
	}
}
if ( 'true' === $navigation && ! $slider_title ) {
	$dynamic_style .= '
    #wps-slider-section.wps-slider-section-' . $post_id . '{
        padding-top: 45px;
    }';
}
if ( $product_name ) {
	$dynamic_style .= '#wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-product-title a{
        color: ' . $product_name_typography['color'] . ';
        font-size: ' . $product_name_typography['font-size'] . 'px;
    }
    #wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-product-title a:hover{
        color: ' . $name_hover_color . ';
    }';
}
if ( $product_price ) {
	$dynamic_style .= '#wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-product-price {
        color: ' . $product_price_typography['color'] . ';
        font-size: ' . $product_price_typography['font-size'] . 'px;
    }
    #wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-product-price del span {
        color: ' . $product_del_price_color . ';
    }';
}
if ( $product_rating ) {
	$dynamic_style .= '#wps-slider-section #sp-woo-product-slider-' . $post_id . '.wps-product-section .star-rating span:before {
        color: ' . $product_rating_colors['color'] . ';
    }
    #wps-slider-section #sp-woo-product-slider-' . $post_id . '.wps-product-section .star-rating:before{
        color: ' . $product_rating_colors['empty_color'] . ';
    }';
}
if ( $add_to_cart_button ) {
	$dynamic_style .= '#wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-cart-button a:not(.sp-wqvpro-view-button):not(.sp-wqv-view-button){
        color: ' . $add_to_cart_button_color['color'] . ';
        background-color: ' . $add_to_cart_button_color['background'] . ';
        border: ' . $add_to_cart_border['all'] . 'px ' . $add_to_cart_border['style'] . ' ' . $add_to_cart_border['color'] . ';
    }
    #wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-cart-button a:not(.sp-wqvpro-view-button):not(.sp-wqv-view-button):hover,
    #wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-cart-button a.added_to_cart{
        color: ' . $add_to_cart_button_color['hover_color'] . ';
        background-color: ' . $add_to_cart_button_color['hover_background'] . ';
        border-color: ' . $add_to_cart_border['hover_color'] . ';
    }';
}
$dynamic_style .= '#wps-slider-section #sp-woo-product-slider-' . $post_id . '.sp-wps-theme_one .wps-product-image {
    border: ' . $product_image_border['all'] . 'px ' . $product_image_border['style'] . ' ' . $product_image_border['color'] . ';
}
#wps-slider-section #sp-woo-product-slider-' . $post_id . '.sp-wps-theme_one .wpsf-product:hover .wps-product-image {
    border-color: ' . $product_image_border['hover_color'] . ';
}';

// Custom Template dynamic style.
$template_style = isset( $shortcode_data['template_style'] ) ? $shortcode_data['template_style'] : 'pre-made';
if ( 'custom' === $template_style ) {
	$product_content_padding = isset( $shortcode_data['product_content_padding'] ) ? $shortcode_data['product_content_padding'] : array(
		'top'    => '18',
		'right'  => '20',
		'bottom' => '20',
		'left'   => '20',
	);
	$border                  = isset( $shortcode_data['product_border'] ) ? $shortcode_data['product_border'] : array(
		'all'         => '1',
		'style'       => 'solid',
		'color'       => '#dddddd',
		'hover_color' => '#dddddd',
	);
	$zoom_effect             = isset( $shortcode_data['zoom_effect_types'] ) ? $shortcode_data['zoom_effect_types'] : 'none';
	$dynamic_style          .= '#wps-slider-section #sp-woo-product-slider-' . $post_id . '.sp-wps-custom-template .wpsf-product {
    border: ' . $border['all'] . 'px ' . $border['style'] . ' ' . $border['color'] . ';
	}
	#wps-slider-section #sp-woo-product-slider-' . $post_id . '.sp-wps-custom-template .wpsf-product:hover {
	border-color: ' . $border['hover_color'] . ';
	}
	#wps-slider-section #sp-woo-product-slider-' . $post_id . '.sp-wps-custom-template .wpsf-product .sp-wps-product-details {
	padding: ' . $product_content_padding['top'] . 'px ' . $product_content_padding['right'] . 'px ' . $product_content_padding['bottom'] . 'px ' . $product_content_padding['left'] . 'px;
	}';
	// Zoom Effect.
	if ( 'zoom_in' === $zoom_effect ) {
		$dynamic_style .= '
				#wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-product img{
					transition: .5s;
				}
				#wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-product :hover img{
					-webkit-transform: scale(1.2);
					-moz-transform: scale(1.2);
					transform: scale(1.2);
				}';
	}
	if ( 'zoom_out' === $zoom_effect ) {
		$dynamic_style .= '
					#wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-product img{
						-webkit-transform: scale(1.2);
						-moz-transform: scale(1.2);
						transform: scale(1.2);
						transition: .5s;
					}
					#wps-slider-section #sp-woo-product-slider-' . $post_id . ' .wpsf-product:hover img{
						-webkit-transform: scale(1);
						-moz-transform: scale(1);
						transform: scale(1);
					}';
	}
}

