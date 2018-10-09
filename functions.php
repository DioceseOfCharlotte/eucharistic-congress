<?php

add_action( 'wp_enqueue_scripts', 'ec_scripts' );

/**
 * Enqueue scripts and styles.
 */
function ec_scripts() {
	wp_enqueue_style( 'ec-style', get_stylesheet_uri() );
}
