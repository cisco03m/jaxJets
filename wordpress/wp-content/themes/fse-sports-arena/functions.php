<?php
/**
 * FSE Sports Arena functions and definitions
 *
 * @package fse_sports_arena
 * @since 1.0
 */

if ( ! function_exists( 'fse_sports_arena_support' ) ) :
	function fse_sports_arena_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'fse_sports_arena_support' );

if ( ! function_exists( 'fse_sports_arena_styles' ) ) :
	function fse_sports_arena_styles() {
		// Register theme stylesheet.
		$fse_sports_arena_theme_version = wp_get_theme()->get( 'Version' );

		$fse_sports_arena_version_string = is_string( $fse_sports_arena_theme_version ) ? $fse_sports_arena_theme_version : false;
		wp_enqueue_style(
			'fse-sports-arena-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_sports_arena_version_string
		);

		wp_enqueue_script( 'fse-sports-arena-custom-script', get_theme_file_uri( '/assets/custom-script.js' ), array( 'jquery' ), true );
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_sports_arena_styles' );

/* Theme Credit link */
define('FSE_SPORTS_ARENA_BUY_NOW',__('https://www.cretathemes.com/products/sports-arena-wordpress-theme','fse-sports-arena'));
define('FSE_SPORTS_ARENA_PRO_DEMO',__('https://pattern.cretathemes.com/fse-sports-arena/','fse-sports-arena'));
define('FSE_SPORTS_ARENA_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-sports-arena/','fse-sports-arena'));
define('FSE_SPORTS_ARENA_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-sports-arena/','fse-sports-arena'));
define('FSE_SPORTS_ARENA_SUPPORT',__('https://wordpress.org/support/theme/fse-sports-arena/','fse-sports-arena'));
define('FSE_SPORTS_ARENA_REVIEW',__('https://wordpress.org/support/theme/fse-sports-arena/reviews/#new-post','fse-sports-arena'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function fse_sports_arena_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'fse_sports_arena_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_fse-sports-arena-guide-page' ) { ?>

	    <div class="notice notice-success">
	        <h1><?php esc_html_e('Hey, Thank you for installing FSE Sports Arena Theme!', 'fse-sports-arena'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=fse-sports-arena-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'fse-sports-arena'); ?></a> <a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'fse-sports-arena'); ?></a></p>
	        <p class="dismiss-link"><strong><a href="?fse_sports_arena_admin_notice=1"><?php esc_html_e( 'Dismiss', 'fse-sports-arena' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'fse_sports_arena_admin_notice' );

if( ! function_exists( 'fse_sports_arena_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function fse_sports_arena_update_admin_notice(){
    if ( isset( $_GET['fse_sports_arena_admin_notice'] ) && $_GET['fse_sports_arena_admin_notice'] = '1' ) {
        update_option( 'fse_sports_arena_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'fse_sports_arena_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'fse_sports_arena_getstart_setup_options');
function fse_sports_arena_getstart_setup_options () {
    update_option('fse_sports_arena_admin_notice', FALSE );
}