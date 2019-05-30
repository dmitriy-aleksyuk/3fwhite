<?php
// Theme functions

/**
 * Remove wp version param from any enqueued scripts
 */
function white_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'white_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'white_remove_wp_ver_css_js', 9999 );

/**
 * Cleanup wp head tag
 */
function white_remove_head_links() {
	// Removes xmlrpc.php?rsd
	remove_action( 'wp_head', 'rsd_link' );
	// Removes wlwmanifest+xml
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Removes WordPress version
	remove_action( 'wp_head', 'wp_generator' );
	//Кemove Woo version (in case uses that)
	remove_action( 'wp_head', 'woo_version' );
	// Removes shortlink
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	// Remove adjacent post links
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'start_post_rel_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
	// Remove feed links
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Remove Emoji scripts
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	// Do not store a comment cookie.  tracking cookies are forbidden in Europe (without user's consent)
	remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );

}

add_action( 'init', 'white_remove_head_links' );

/**
 * Allow SVG through WordPress Media Uploader
 *
 * @param $mimes
 *
 * @return mixed
 */
function white_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'white_mime_types' );

/**
 * Enable unfiltered_html capability for Editors.
 *
 * @param  array  $caps    The user's capabilities.
 * @param  string $cap     Capability name.
 * @param  int    $user_id The user ID.
 * @return array  $caps    The user's capabilities, with 'unfiltered_html' potentially added.
 */
function white_add_unfiltered_html_capability_to_editors( $caps, $cap, $user_id ) {
	if ( 'unfiltered_html' === $cap && ( user_can( $user_id, 'editor' ) || user_can( $user_id, 'administrator' ) ) ) {
		$caps = array( 'unfiltered_html' );
	}

	return $caps;
}
add_filter( 'map_meta_cap', 'white_add_unfiltered_html_capability_to_editors', 1, 3 );

/**
 * Ajax callback for toplist pagination
 */
function toplist_pagination_callback() {
	if ( class_exists( 'TopListEditor' )){
		if ( !empty( $_POST['data']['toplist'] ) ){
			$template_params = array(
				'toplist_data'     => TopListEditor::getToplist( intval( $_POST['data']['toplist'] ) ),
				'toplist'          => TopListEditor::getPostsQuery( intval( $_POST['data']['toplist'] ) ),
			);
			include get_template_directory() . '/plugins/toplist-editor/template.php';
		}
	}

	wp_die();
}
add_action('wp_ajax_toplist_pagination', 'toplist_pagination_callback');
add_action('wp_ajax_nopriv_toplist_pagination', 'toplist_pagination_callback');

/*
 * Add ?source parameter value to menu links
 */
function white_custom_nav_items( $items, $menu, $args ) {
	if ( is_admin() ) {
		return $items;
	}
	foreach ( $items as $item ) {
		if ( isset( $_GET["source"] ) && ! empty( $_GET["source"] ) ) {
			$lp_param  = 'source';
			$lp        = filter_input( INPUT_GET, 'source', FILTER_SANITIZE_STRING );
			$item->url = add_query_arg( $lp_param, $lp, $item->url );
		}
	}

	return $items;
}
add_filter( 'wp_get_nav_menu_items', 'white_custom_nav_items', 11, 3 );

/**
 * Allow users to sign up using an email address as their username.
 * Removes the default restriction of [a-z0-9] and replaces it with [a-z0-9+_.@-].
 *
 * @param $result
 *
 * @return array $result
 */
function white_disable_username_character_type_restriction( $result ) {
	$errors    = $result['errors'];
	$user_name = $result['user_name'];

	// The error message to look for. This should exactly match the error message from ms-functions.php -> wpmu_validate_user_signup().
	$error_message = __( 'Usernames can only contain lowercase letters (a-z) and numbers.' );

	// Look through the errors for the above message.
	if ( ! empty( $errors->errors['user_name'] ) ) {
		foreach ( $errors->errors['user_name'] as $i => $message ) {

			// Check if it's the right error message.
			if ( $message === $error_message ) {

				// Remove the error message.
				unset( $errors->errors['user_name'][ $i ] );

				// Validate using different allowed characters based on sanitize_email().
				$pattern = "/[^a-z0-9_.@-]/i";
				if ( preg_match( $pattern, $user_name ) ) {
					$errors->add( 'user_name', __( 'Username is invalid. Usernames can only contain: lowercase letters, numbers, and these symbols: <code>_ - .</code>.' ) );
				}

				// If there are no errors remaining, remove the error code
				if ( empty( $errors->errors['user_name'] ) ) {
					unset( $errors->errors['user_name'] );
				}
			}
		}
	}

	return $result;
}

add_filter( 'wpmu_validate_user_signup', 'white_disable_username_character_type_restriction', 20 );

/**
 * Allow users editing the privacy policy page (editor, subscriber, administrator, seo)
 *
 * @param $caps
 * @param $cap
 * @param $user_id
 * @param $args
 *
 * @return array
 */
function white_manage_privacy_options( $caps, $cap, $user_id, $args ) {
	if ( 'manage_privacy_options' === $cap ) {
		$manage_name = is_multisite() ? 'manage_network' : 'manage_options';
		$caps        = array_diff( $caps, [ $manage_name ] );
	}

	return $caps;
}

add_action( 'map_meta_cap', 'white_manage_privacy_options', 1, 4 );
