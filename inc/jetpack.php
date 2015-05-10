<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Pro Mineral Partners
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function pro_mineral_partners_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'pro_mineral_partners_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function pro_mineral_partners_jetpack_setup
add_action( 'after_setup_theme', 'pro_mineral_partners_jetpack_setup' );

function pro_mineral_partners_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function pro_mineral_partners_infinite_scroll_render