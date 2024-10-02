<?php
/**
 * Block Styles
 *
 * @package fse_sports_arena
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_sports_arena_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-sports-arena-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-sports-arena' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-sports-arena-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-sports-arena' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-sports-arena-button',
				'label'        => esc_html__( 'Plain', 'fse-sports-arena' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-sports-arena-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-sports-arena' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-sports-arena-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-sports-arena' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-sports-arena-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-sports-arena' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-sports-arena-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-sports-arena' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-sports-arena-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-sports-arena' ),
			)
		);
	}
	add_action( 'init', 'fse_sports_arena_register_block_styles' );
}
