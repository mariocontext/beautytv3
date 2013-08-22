<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#" >
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1" />

	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>


</head>
<!-- using Foxy Child header -->
<body <?php body_class(); ?>>
	<div id="body-area">
		<div class="container">
			<header id="main-header" class="clearfix">

				<div id="primary-header-info">
				<?php $logo = ( $user_logo = et_get_option( 'foxy_logo' ) ) && '' != $user_logo ? $user_logo : $template_directory_uri . '/images/logo.png'; ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo"/></a>
				<p id="slogan"><?php bloginfo( 'description' ); ?></p>
				</div><!-- primary-header-info -->

				<div id="secondary-header-info">

					<?php do_action('icl_language_selector'); ?>
					<p class="contact_no">
					<?php _e('<br />Call Today for a<br />FREE Consultation<br />', 'foxychild'); ?>
					</p>

				</div><!-- secondary-header-info"-->

				<div class="small-screen-quick-jump-buttons">

					<a href="tel:+1866-846-2588" class="big-button biggreen">Call Us</a>
					<a href="http://www.beautytv.us/location/" class="big-button biggreen">Map</a>
					<a href="http://www.beautytv.us/contact-us/" class="big-button biggreen">Contact Us</a>

				</div><!-- small-screen-quick-jump-buttons -->

				<nav id="top-navigation">
				<?php
					$menuClass = 'nav';
					if ( 'on' == et_get_option( 'foxy_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
					$primaryNav = '';
					if ( function_exists( 'wp_nav_menu' ) ) {
						$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
					}
					if ( '' == $primaryNav ) { ?>
					<ul class="<?php echo esc_attr( $menuClass ); ?>">
						<?php if ( 'on' == et_get_option( 'foxy_home_link' ) ) { ?>
							<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home','Foxy' ); ?></a></li>
						<?php }; ?>

						<?php show_page_menu( $menuClass, false, false ); ?>
						<?php show_categories_menu( $menuClass, false ); ?>
					</ul>
					<?php }
					else echo( $primaryNav );
				?>
				</nav>


				<a id="back-to-top"></a>

				<?php do_action( 'et_header_top' ); ?>
			</header> <!-- #main-header -->