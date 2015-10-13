<?php

/**
 * Maqro functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Maqro
 * @since 0.1.0
 */

 add_theme_support( 'post-thumbnails' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// Useful global constants
define( 'WPTHEME_VERSION',      '0.1.0' );
define( 'WPTHEME_URL',          get_stylesheet_directory_uri() );
define( 'WPTHEME_TEMPLATE_URL', get_template_directory_uri() );
define( 'WPTHEME_PATH',         get_template_directory() . '/' );
define( 'WPTHEME_INC',          WPTHEME_PATH . 'includes/' );

// Include compartmentalized functions
require_once WPTHEME_INC . 'functions/core.php';

// Include lib classes

// Run the setup functions
TenUp\Maqro\Core\setup();
