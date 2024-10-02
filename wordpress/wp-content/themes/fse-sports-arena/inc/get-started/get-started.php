<?php
add_action( 'admin_menu', 'fse_sports_arena_getting_started' );
function fse_sports_arena_getting_started() {
	add_theme_page( esc_html__('Get Started', 'fse-sports-arena'), esc_html__('Get Started', 'fse-sports-arena'), 'edit_theme_options', 'fse-sports-arena-guide-page', 'fse_sports_arena_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function fse_sports_arena_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'fse_sports_arena_admin_theme_style');

//guidline for about theme
function fse_sports_arena_test_guide() { 
	//custom function about theme customizer
	$fse_sports_arena_return = add_query_arg( array()) ;
	$fse_sports_arena_theme = wp_get_theme( 'fse-sports-arena' );
?>
	<div class="wrapper-outer">
		<div class="intro">
			<h3><?php echo esc_html( $fse_sports_arena_theme->Name ); ?></h3>
			<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'fse-sports-arena' ); ?></p>
			<div class="banner-buttons">
				<a href="<?php echo esc_url( FSE_SPORTS_ARENA_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Theme Documentation', 'fse-sports-arena'); ?></a>
			</div>
		</div>
		<div class="left-main-box">
			<div class="about-wrapper">
				<div class="col-left">
					<p><?php echo esc_html( $fse_sports_arena_theme->get( 'Description' ) ); ?></p>
				</div>
				<div class="col-right">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
				</div>
			</div>
			<div class="support-wrapper">
				<div class="review-box">
					<i class="dashicons dashicons-star-filled"></i>
					<h4><?php esc_html_e('Leave Us A Review', 'fse-sports-arena'); ?></h4>
					<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'fse-sports-arena'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( FSE_SPORTS_ARENA_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'fse-sports-arena'); ?></a>
					</div>
				</div>
				<div class="support-box">
					<i class="dashicons dashicons-microphone"></i>
					<h4><?php esc_html_e('Need Help?', 'fse-sports-arena'); ?></h4>
					<p><?php esc_html_e('Go to our support forum to help you out in case of queries.', 'fse-sports-arena'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( FSE_SPORTS_ARENA_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'fse-sports-arena'); ?></a>
					</div>
				</div>
				<div class="editor-box">
					<i class="dashicons dashicons-admin-appearance"></i>
					<h4><?php esc_html_e('Theme Customization', 'fse-sports-arena'); ?></h4>
					<p><?php esc_html_e('Effortlessly modify and maintain your site using editor.', 'fse-sports-arena'); ?></p>
					<div class="support-button">
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'fse-sports-arena'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="right-main-box">
			<div class="pro-box">
				<i class="dashicons dashicons-cover-image"></i>
				<h4><?php esc_html_e('Go For Premium', 'fse-sports-arena'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Proceed for pro version of theme.', 'fse-sports-arena'); ?></p>
				<div class="pro-buttons">
					<a class="button button-primary doc-btn" href="<?php echo esc_url( FSE_SPORTS_ARENA_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'fse-sports-arena'); ?></a>
					<a class="button button-primary buy-btn" href="<?php echo esc_url( FSE_SPORTS_ARENA_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'fse-sports-arena'); ?></a>
					<a class="button button-primary demo-btn" href="<?php echo esc_url( FSE_SPORTS_ARENA_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Pro Demo', 'fse-sports-arena'); ?></a>
				</div>
				<ul class="pro-list">
					<li><?php esc_html_e('Responsive Design', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Demo Content Import', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Aditional plugins', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Background sliders', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Video popups', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('More Fonts and Colors', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Multiple templates', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Multiple front page sections', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Woocommerce support', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Premium support', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('SEO optimization', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Speed optimization', 'fse-sports-arena');?></li>
					<li><?php esc_html_e('Browser compatibility', 'fse-sports-arena');?></li>
			</div>
		</div>
	</div>
<?php } ?>