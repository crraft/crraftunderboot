<?php
/**
 * Declaring widgets
 *
 *
 * @package crraftunderboot
 */
function crraftunderboot_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'crraftunderboot' ),
		'id'            => 'sidebar-1',
		'description'   => 'Sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'Carousel', 'crraftunderboot' ),
        'id'            => 'carousel',
        'description'   => 'Slider area. Place two or more widgets here and they will slide!',
        'before_widget' => '<div class="item">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Jumbotron', 'crraftunderboot' ),
        'id'            => 'jumbotron',
        'description'   => 'Jumbotron widget. no slider functionallity',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

        register_sidebar( array(
        'name'          => __( 'Footer Full', 'crraftunderboot' ),
        'id'            => 'footerfull',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'crraftunderboot_widgets_init' );
