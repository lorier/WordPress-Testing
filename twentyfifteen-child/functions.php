<?php
function add_listening_to_box() {
	add_meta_box( 'listening_to', 'Listening to', 'listening_to_metabox', 'post', 'normal', 'default' );
	
}
add_action( 'add_meta_boxes', 'add_listening_to_box' );

function listening_to_metabox(){
	global $post;
	
	echo '<input class="widefat" type="text" name="listening_to" value="' .get_post_meta( $post->ID, 'listening_to', true ).'" />';
}

//best practice for importing styles from a parent theme via the codex
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>