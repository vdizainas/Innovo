<?php

// Įjungiame post thumbnail
add_theme_support( 'post-thumbnails' );
add_image_size( 'naujienu-mini', 200, 100, true ); //true iskirps butent tokio dydzio, false proporcingai kirps.
add_image_size( 'main-slide-img', 1800, 1300, false );
add_image_size( 'product-archive-img', 400, 800, false );

function scripts_styles() {
    $ver = '1.03';
    wp_enqueue_style( 'since2-style', get_stylesheet_uri(), array(), $ver );
    wp_enqueue_style( 'gfont', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700&display=swap&subset=latin-ext', array(), $ver );
    wp_enqueue_style( 'fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css', array(), $ver );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), $ver );
    wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/assets/css/hamburgers.css', array(), $ver );

    wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/assets/scripts/slick.min.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js', array( 'jquery' ), '1.7.2', true );
    wp_enqueue_script( 'jqueryui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js', array( 'jquery' ), '1.7.2', true );
    if( is_page(15) ){
        wp_enqueue_script( 'map', get_template_directory_uri() . '/assets/scripts/map.js', array( 'jquery' ), $ver, true );
        wp_enqueue_script( 'maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBm-sVievd4ulRLn_U7IppLyDLmksF08rw&callback=initMap', array( 'jquery' ), '1.7.2', true );
    }
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/scripts/custom.js', array( 'jquery' ), $ver, true );

    wp_localize_script( 'custom', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'scripts_styles' );

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'virsutinis-menu' => __( 'Virsutinis meniu' ),
        'apatinis-menu' => __( 'Apatinis meniu' ),
        'mobile-menu' => __( 'Mobile meniu' )
    ));
}

add_action( 'init', 'register_theme_menus' );

// pakeiciame teksto ilgi irasuose "excerpt"
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// ACF temnos valdymo sukurimas

if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page( 'Temos nustatymai' );
    //acf_add_options_sub_page( 'dar koks punktas' );
  //  acf_add_options_sub_page( 'trecias punktas' );
}

function get_correct_image_link_thumb($thumb_id='', $size='large'){

    if ($thumb_id != '') {
        $imagepermalink = wp_get_attachment_image_src($thumb_id, $size, true);
    } else {
        $imagepermalink[0] =  get_stylesheet_directory_uri() . '/images/cover.jpg';
    }
    return $imagepermalink[0];
}
