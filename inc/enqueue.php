<?php
/**
 * crraftunderboot enqueue scripts
 *
 * @package crraftunderboot
 */

function crraftunderboot_scripts() {
    wp_enqueue_style('crraftunderboot-style', get_template_directory_uri() . '/css/style.min.css', false, filemtime( get_template_directory(). '/css/style.min.css' ));
    /*-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --*/
  	/*-- WARNING: Respond.js doesn't work if you view the page via file:// --*/
  	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(), false );
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
  	wp_enqueue_script( 'respond.min', get_template_directory_uri() . '/js/respond.min.js', array(), false );
    wp_script_add_data( 'respond.min', 'conditional', 'lt IE 9' );

    wp_enqueue_script('crraftunderboot-script', get_template_directory_uri() . '/js/cscript.min.js', true, filemtime( get_template_directory().'/js/cscript.min.js' ), true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'crraftunderboot_scripts' );
