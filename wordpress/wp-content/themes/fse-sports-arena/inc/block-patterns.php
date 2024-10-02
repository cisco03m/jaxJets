<?php
/**
 * Block Patterns
 *
 * @package fse_sports_arena
 * @since 1.0
 */

function fse_sports_arena_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-sports-arena' => array( 'label' => esc_html__( 'FSE Sports Arena', 'fse-sports-arena' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-sports-arena' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_sports_arena_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_sports_arena_register_block_patterns', 9 );