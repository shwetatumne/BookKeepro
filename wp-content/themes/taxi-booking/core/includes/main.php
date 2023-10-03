<?php

add_action( 'admin_menu', 'taxi_booking_getting_started' );
function taxi_booking_getting_started() {
	add_theme_page( esc_html__('Get Started', 'taxi-booking'), esc_html__('Get Started', 'taxi-booking'), 'edit_theme_options', 'taxi-booking-guide-page', 'taxi_booking_test_guide');
}

function taxi_booking_admin_enqueue_scripts() {
	wp_enqueue_style( 'taxi-booking-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'taxi_booking_admin_enqueue_scripts' );

if ( ! defined( 'TAXI_BOOKING_DOCS_FREE' ) ) {
define('TAXI_BOOKING_DOCS_FREE',__('https://www.misbahwp.com/docs/taxi-booking-free-docs/','taxi-booking'));
}
if ( ! defined( 'TAXI_BOOKING_DOCS_PRO' ) ) {
define('TAXI_BOOKING_DOCS_PRO',__('https://www.misbahwp.com/docs/taxi-booking-pro-docs','taxi-booking'));
}
if ( ! defined( 'TAXI_BOOKING_BUY_NOW' ) ) {
define('TAXI_BOOKING_BUY_NOW',__('https://www.misbahwp.com/themes/taxi-wordpress-theme/','taxi-booking'));
}
if ( ! defined( 'TAXI_BOOKING_SUPPORT_FREE' ) ) {
define('TAXI_BOOKING_SUPPORT_FREE',__('https://wordpress.org/support/theme/taxi-booking','taxi-booking'));
}
if ( ! defined( 'TAXI_BOOKING_REVIEW_FREE' ) ) {
define('TAXI_BOOKING_REVIEW_FREE',__('https://wordpress.org/support/theme/taxi-booking/reviews/#new-post','taxi-booking'));
}
if ( ! defined( 'TAXI_BOOKING_DEMO_PRO' ) ) {
define('TAXI_BOOKING_DEMO_PRO',__('https://www.misbahwp.com/demo/taxi-booking/','taxi-booking'));
}
if( ! defined( 'TAXI_BOOKING_THEME_BUNDLE' ) ) {
define('TAXI_BOOKING_THEME_BUNDLE',__('https://www.misbahwp.com/themes/wordpress-bundle/','taxi-booking'));
}

function taxi_booking_test_guide() { ?>
	<?php $taxi_booking_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( TAXI_BOOKING_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'taxi-booking' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'taxi-booking' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( TAXI_BOOKING_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'taxi-booking' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( TAXI_BOOKING_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'taxi-booking' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','taxi-booking'); ?><?php echo esc_html( $taxi_booking_theme ); ?>  <span><?php esc_html_e('Version: ', 'taxi-booking'); ?><?php echo esc_html($taxi_booking_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $taxi_booking_theme->get_screenshot() ); ?>" />
				<div id="description-inside">
					<?php
						$taxi_booking_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $taxi_booking_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'taxi-booking' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','taxi-booking'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( TAXI_BOOKING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'taxi-booking' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( TAXI_BOOKING_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'taxi-booking' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( TAXI_BOOKING_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'taxi-booking' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'taxi-booking' ); ?></h3>
				<div class="inside theme-bundle">
					<p class="offer"><?php esc_html_e('Get 50+ Perfect WordPress Theme In A Single Package at just $79."','taxi-booking'); ?></p>
					<p class="coupon"><?php esc_html_e('Exclusive Offer !! Get Our Theme Pack of 60+ WordPress Themes At 10% Off','taxi-booking'); ?><span class="coupon-code"><?php esc_html_e('"Themespack10"','taxi-booking'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( TAXI_BOOKING_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'taxi-booking' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','taxi-booking'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','taxi-booking'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','taxi-booking'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','taxi-booking'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
