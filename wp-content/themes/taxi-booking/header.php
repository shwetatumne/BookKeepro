<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'taxi-booking' ); ?></a>

<?php if ( get_theme_mod('taxi_booking_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'taxi-booking' ); ?></h1>
    </div>
<?php endif; ?>

<div class="topheader py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
				<?php $taxi_booking_settings = get_theme_mod( 'taxi_booking_social_links_settings' ); ?>
				<div class="social-links text-center text-md-left">
					<?php if ( is_array($taxi_booking_settings) || is_object($taxi_booking_settings) ){ ?>
						<span class="mr-2"><?php esc_html_e('Connect With Us - ','taxi-booking'); ?></span>
					    	<?php foreach( $taxi_booking_settings as $taxi_booking_setting ) { ?>
						        <a href="<?php echo esc_url( $taxi_booking_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $taxi_booking_setting['link_text'] ); ?> mr-3"></i>
						        </a>
					    	<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 align-self-center">
				<?php $taxi_booking_settings = get_theme_mod( 'taxi_booking_extra_links_settings' ); ?>
				<div class="extra-links text-center text-md-right">
					<?php if ( is_array($taxi_booking_settings) || is_object($taxi_booking_settings) ){ ?>
				    	<?php foreach( $taxi_booking_settings as $taxi_booking_setting ) { ?>
					        <a href="<?php echo esc_url( $taxi_booking_setting['link_url'] ); ?>" class="mr-3"><?php echo esc_html( $taxi_booking_setting['link_text'] ); ?></a>
				    	<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="<?php if( get_theme_mod( 'taxi_booking_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
	<header id="site-navigation" class="header text-center text-md-left py-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
					<div class="logo">
			    		<div class="logo-image">
			    			<?php echo the_custom_logo(); ?>
				    	</div>
				    	<div class="logo-content text-center text-lg-left">
					    	<?php
					    		if ( get_theme_mod('taxi_booking_display_header_title', true) == true ) :
						      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      			echo esc_attr(get_bloginfo('name'));
						      		echo '</a>';
						      	endif;

						      	if ( get_theme_mod('taxi_booking_display_header_text', false) == true ) :
					      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
					      		endif;
				    		?>
						</div>
					</div>
			   	</div>
				<div class="col-lg-6 col-md-9 col-sm-9 align-self-center">
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'taxi-booking' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
					<?php if ( get_theme_mod('taxi_booking_header_hire_us_txt') || get_theme_mod('taxi_booking_header_hire_us_lnk') ) : ?>
					<p class="slider-button text-md-right text-center my-3 my-md-0"><a href="<?php echo esc_url( get_theme_mod('taxi_booking_header_hire_us_lnk' ) ); ?>"><?php echo esc_html( get_theme_mod('taxi_booking_header_hire_us_txt' ) ); ?></a></p>
					<?php endif; ?>
		       	</div>
		   	</div>
		</div>
	</header>
</div>
