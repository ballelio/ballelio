<?php
/**
* Altofocus Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Altofocus
* @since Altofocus 2.0
*/

function ballelio_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Lora and Fira Sans, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$fira_sans = _x( 'on', 'Fira Sans font: on or off', 'ballelio' );
    $lora = _x( 'on', 'Lora font: on or off', 'ballelio' );

        $font_families = array();
        
	if ( 'off' !== $fira_sans ) {      
            $font_families[] = 'Fira Sans:400,400i,700';
        }
        
        if ( 'off' !== $lora ) {      
            $font_families[] = 'Lora:400,400i,500,700';
        }
        
        if ( in_array( 'on', array($lora, $fira_sans) )  ) {
		
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

// Enqueue scripts and styles
function altofocus_child_scripts(){
	wp_enqueue_style( 'altofocus-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'altofocus-style' ));
    ///child fonts from google///
    wp_enqueue_style('child-fonts', ballelio_fonts_url() );
}
add_action( 'wp_enqueue_scripts', 'altofocus_child_scripts' );

add_theme_support('post-thumbnails');
add_post_type_support( 'portfolio_items', 'thumbnail' ); 

function create_custom_post_types() {
    register_post_type( 'portfolio_items',
        array(
            'labels' => array(
                'name' => __( 'Portfolio Item' ),
                'singular_name' => __( 'Portfolio Items' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'portfolio-items' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );