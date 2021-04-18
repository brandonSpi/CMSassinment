<?php


function my_theme_enqueue_styles() {
	$parent_style = 'chld_thm_cfg_child';

	wp_enqueue_style( '$parent_style', 
	trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', 
	array( 'neve-woocommerce','neve-style','neve-style' ) 
	);
	
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>

