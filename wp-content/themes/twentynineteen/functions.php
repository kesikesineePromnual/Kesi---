<?php declare( strict_types=1 );
/**
 * Adds a random image to user upon registration.
 *
 * @param int $user_id
 */



function tt_user_logged_in( $user_login, $user ) {
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	update_user_meta( $user->ID, 'last_user_agent', $user_agent );
	
}

add_action( 'wp_login', 'tt_user_logged_in', 10, 2 );
function tt_user_last(){
	$last_user = get_the_author_meta('last_user_agent');
	return $last_user;
} /*add-shortcode to any template*/
add_shortcode('tt_user_logged_in','tt_user_last');



