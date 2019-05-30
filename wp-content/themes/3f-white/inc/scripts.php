<?php
// Theme css & js

function base_scripts_styles() {
	$in_footer = true;
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	wp_deregister_script( 'comment-reply' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply', get_template_directory_uri() . '/js/comment-reply.js', '', '', $in_footer );
	}
	// Css for theme
	wp_enqueue_style( 'main', get_template_directory_uri() . '/build/css/build.min.css' );
	// JavaScript for theme
	//wp_deregister_script( 'jquery' );
	// wp_enqueue_script( 'vendor-jquery', get_template_directory_uri() . '/build/js/vendor/jquery_3.3.1.js', array( 'jquery' ), 1, $in_footer );
	// wp_enqueue_script( 'vendor-slider', get_template_directory_uri() . '/build/js/vendor/slider.js', array( 'jquery' ), 1, $in_footer );
	// wp_enqueue_script( 'vendor-tweenMax', get_template_directory_uri() . '/build/js/vendor/tweenMax.min.js', array( 'jquery' ), 1, $in_footer );
	// wp_enqueue_script( 'vendor-slider', get_template_directory_uri() . '/build/js/vendor/slider.anim.js', array( 'jquery' ), 1, $in_footer );
	// wp_enqueue_script( 'main-script', get_template_directory_uri() . '/build/js/build.min.js', array( 'jquery' ), '', $in_footer );
}

add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );