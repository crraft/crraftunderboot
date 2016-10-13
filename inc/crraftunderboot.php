<?php
// Remove Title attributes
function my_menu_notitle( $menu ){
  return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

// crraftunderboot version
function version() {
  $version = '1.0.2';
  echo $version;
}
