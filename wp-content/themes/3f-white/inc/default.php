<?php
// Default theme settings

/**
 * Add [email]...[/email] shortcode
 *
 * @param $atts
 * @param $content
 *
 * @return string
 */
function shortcode_email( $atts, $content ) {
	return antispambot( $content );
}

add_shortcode( 'email', 'shortcode_email' );

/** Cleaning phone number
 *
 * @param $phone
 *
 * @return string|string[]|null
 */
function clean_phone( $phone ) {
	return preg_replace( '/[^0-9]/', '', $phone );
}

/**
 * Seo warning for enable antibot in admin
 */
function seo_warning() {
	if ( get_option( 'blog_public' ) ) {
		return;
	}

	$message = __( 'You are blocking access to robots. You must go to your <a href="%s">Reading</a> settings and uncheck the box for Search Engine Visibility.', 'sp' );

	echo '<div class="error"><p>';
	printf( $message, admin_url( 'options-reading.php' ) );
	echo '</p></div>';
}

add_action( 'admin_notices', 'seo_warning' );

/**
 * Loads the theme's translated strings
 */
function theme_localization() {
	load_theme_textdomain( '3f-white', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'theme_localization' );

/**
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );


/**
 * Replace standard wp menu classes
 *
 * @param $css_classes
 *
 * @return mixed
 */
function change_menu_classes( $css_classes ) {
	return str_replace( array(
		'current-menu-item',
		'current-menu-parent',
		'current-menu-ancestor'
	), 'active', $css_classes );
}

add_filter( 'nav_menu_css_class', 'change_menu_classes' );

/**
 * Make wp admin menu html valid
 *
 * @param $wp_admin_bar
 */
function wp_admin_bar_valid_search_menu( $wp_admin_bar ) {
	if ( is_admin() ) {
		return;
	}
	$form = '<form action="' . esc_url( home_url( '/' ) ) . '" method="get" id="adminbarsearch"><div>';
	$form .= '<input class="adminbar-input" name="s" id="adminbar-search" tabindex="10" type="text" value="" maxlength="150" />';
	$form .= '<input type="submit" class="adminbar-button" value="' . __( 'Search', '3f-white' ) . '"/>';
	$form .= '</div></form>';

	$wp_admin_bar->add_menu( array(
		'parent' => 'top-secondary',
		'id'     => 'search',
		'title'  => $form,
		'meta'   => array(
			'class'    => 'admin-bar-search',
			'tabindex' => - 1,
		)
	) );
}

/**
 * Removing basic links from the toolbar
 */
function fix_admin_menu_search() {
	remove_action( 'admin_bar_menu', 'wp_admin_bar_search_menu', 4 );
	add_action( 'admin_bar_menu', 'wp_admin_bar_valid_search_menu', 4 );
}

add_action( 'add_admin_bar_menus', 'fix_admin_menu_search' );

/**
 * Custom excerpt
 */
function theme_the_excerpt() {
	global $post;

	if ( trim( $post->post_excerpt ) ) {
		the_excerpt();
	} elseif ( strpos( $post->post_content, '<!--more-->' ) !== false ) {
		the_content();
	} else {
		the_excerpt();
	}
}

/**
 * theme options for admin
*/
function white_options_capability(){
	$role = get_role( 'administrator' );
	$role->add_cap( 'theme_options_view' );
}
add_action( 'admin_init', 'white_options_capability' );

/**
 * theme options tab in appearance
*/
if( function_exists( 'acf_add_options_page' ) && current_user_can( 'theme_options_view' ) ) {
	acf_add_options_page();
}

/**
 * Acf theme functions placeholders
 */
if ( ! class_exists( 'acf' ) && ! is_admin() ) {
	function get_field_reference( $field_name, $post_id ) {
		return '';
	}

	function get_field_objects( $post_id = false, $options = array() ) {
		return false;
	}

	function get_fields( $post_id = false ) {
		return false;
	}

	function get_field( $field_key, $post_id = false, $format_value = true ) {
		return false;
	}

	function get_field_object( $field_key, $post_id = false, $options = array() ) {
		return false;
	}

	function the_field( $field_name, $post_id = false ) {
	}

	function have_rows( $field_name, $post_id = false ) {
		return false;
	}

	function the_row() {
	}

	function reset_rows( $hard_reset = false ) {
	}

	function has_sub_field( $field_name, $post_id = false ) {
		return false;
	}

	function get_sub_field( $field_name ) {
		return false;
	}

	function the_sub_field( $field_name ) {
	}

	function get_sub_field_object( $child_name ) {
		return false;
	}

	function acf_get_child_field_from_parent_field( $child_name, $parent ) {
		return false;
	}

	function register_field_group( $array ) {
	}

	function get_row_layout() {
		return false;
	}

	function acf_form_head() {
	}

	function acf_form( $options = array() ) {
	}

	function update_field( $field_key, $value, $post_id = false ) {
		return false;
	}

	function delete_field( $field_name, $post_id ) {
	}

	function create_field( $field ) {
	}

	function reset_the_repeater_field() {
	}

	function the_repeater_field( $field_name, $post_id = false ) {
		return false;
	}

	function the_flexible_field( $field_name, $post_id = false ) {
		return false;
	}

	function acf_filter_post_id( $post_id ) {
		return $post_id;
	}
}

/**
 * Custom date archive
 */
function get_date_archive_link() {
	if ( get_option( 'eg_date_archive_link_type' ) == "year" ) {
		$res = get_year_link( get_the_date( "Y" ) );
	} elseif ( get_option( 'eg_date_archive_link_type' ) == "day" ) {
		$res = get_day_link( get_the_date( "Y" ), get_the_date( "m" ), get_the_date( "d" ) );
	} else {
		$res = get_month_link( get_the_date( "Y" ), get_the_date( "m" ) );
	}

	return $res;
}

/**
 * Get rid of tags on posts.
 */
function white_unregister_tags() {
	unregister_taxonomy_for_object_type( 'post_tag', 'post' );
	unregister_taxonomy_for_object_type( 'category', 'post' );
}

add_action( 'init', 'white_unregister_tags' );

/**
 * Disable wp search
 *
 * @param $query
 * @param bool $error
 */
function white_filter_query( $query, $error = true ) {

	if ( ! is_admin() && is_search() ) {
		$query->is_search       = false;
		$query->query_vars['s'] = false;
		$query->query['s']      = false;

		// to error
		if ( $error == true ) {
			$query->is_404 = true;
		}
	}
}

add_action( 'parse_query', 'white_filter_query' );

