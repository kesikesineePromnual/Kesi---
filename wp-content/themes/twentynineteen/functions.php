<?php declare( strict_types=1 );
/**
 * Adds a random image to user upon registration.
 *
 * @param int $user_id
 */



// function tt_user_logged_in( $user_login, $user ) {
// 	$user_agent = $_SERVER['HTTP_USER_AGENT'];
// 	update_user_meta( $user->ID, 'last_user_agent', $user_agent );
	
// }

// add_action( 'wp_login', 'tt_user_logged_in', 10, 2 );
// function tt_user_last(){
// 	$last_user = get_the_author_meta('last_user_agent');
// 	return $last_user;
// } /*add-shortcode to any template*/
// add_shortcode('tt_user_logged_in','tt_user_last');



function tt_user_register($user_login, $user ) {

	$photo_id = rand( 1, 10000 );

	$curl = curl_init();
	curl_setopt_array( $curl, [
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL            => 'https://jsonplaceholder.typicode.com/photos/' . $photo_id,
	] );
	$response = curl_exec( $curl );
	curl_close( $curl );

	$data = json_decode( $response,true );

	update_user_meta( $user->ID, 'register_image', $data[url] );
}

add_action( 'wp_login', 'tt_user_register', 10, 2 );




if ( ! function_exists( 'twentynineteen_setup' ) ) :
	
	
	function twentynineteen_setup() {
		
		set_post_thumbnail_size( 1568, 9999 );

		
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );



/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
