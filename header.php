<?php
/**
 * The header for the theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package calsv4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php $ga_tracking = get_theme_mod("uw-madison-wp-2015_ga_id");  if($ga_tracking) { ?>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', '<?php echo $ga_tracking ?>', 'auto');
	ga('send', 'pageview');

	</script>

	<?php } ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'calsv4' ); ?></a>

	<header id="masthead" class="site-header">

		<div id="uw-bar">
			<a id="uw-madison-link" href="https://wisc.edu">
				University <span class="lowercase-text">of</span> Wisconsin-Madison
			</a>

			<div id="uw-bar-right-content">
				<button id="search-button">
					<svg width="19px" aria-label="Open Search" viewBox="0 0 19 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
							<g id="Desktop-HD-Alt" sketch:type="MSArtboardGroup" transform="translate(-1242.000000, -34.000000)" fill="#FFFFFF">
								<g id="satellite-nav" sketch:type="MSLayerGroup" transform="translate(1141.000000, 26.000000)">
									<g id="1427843142_common_search_lookup_" transform="translate(101.000000, 8.000000)" sketch:type="MSShapeGroup">
										<g id="miu">
											<g id="common_search_lookup_glyph">
												<path d="M13.3667388,11.5346894 C14.1956945,10.3458308 14.6818182,8.90014012 14.6818182,7.34090909 C14.6818182,3.28663675 11.3951814,0 7.34090909,0 C3.28663675,0 0,3.28663675 0,7.34090909 C0,11.3951814 3.28663675,14.6818182 7.34090909,14.6818182 C8.89990029,14.6818182 10.3453862,14.195844 11.5341409,13.3671211 L11.5346339,13.3666833 L16.9786009,18.8106502 C17.0795394,18.9115888 17.2400871,18.9146947 17.3437279,18.8110538 L18.8110538,17.3437279 C18.9117694,17.2430123 18.9070875,17.0750381 18.8106502,16.9786009 L13.3667388,11.5346894 L13.3667388,11.5346894 Z M7.34090909,12.9545455 C10.441235,12.9545455 12.9545455,10.441235 12.9545455,7.34090909 C12.9545455,4.24058318 10.441235,1.72727273 7.34090909,1.72727273 C4.24058318,1.72727273 1.72727273,4.24058318 1.72727273,7.34090909 C1.72727273,10.441235 4.24058318,12.9545455 7.34090909,12.9545455 L7.34090909,12.9545455 Z" id="search-icon"></path>
											</g>
										</g>
									</g>
								</g>
							</g>
						</g>
					</svg>
				</button>

			</div>
		</div>

		<div id="search-display">
			<div class="search-form-container">
			<?php get_search_form( true ); ?>
			</div>
			<button id="search-close-button">
				<svg width="1.6em" viewBox="0 0 805 1024" version="1.1" role="img" focusable="false" aria-labelledby="Close Search">
				<title id="dynid5db9a1589bd523.80573379">close</title>
				<path class="path1" d="M741.714 755.429q0 22.857-16 38.857l-77.714 77.714q-16 16-38.857 16t-38.857-16l-168-168-168 168q-16 16-38.857 16t-38.857-16l-77.714-77.714q-16-16-16-38.857t16-38.857l168-168-168-168q-16-16-16-38.857t16-38.857l77.714-77.714q16-16 38.857-16t38.857 16l168 168 168-168q16-16 38.857-16t38.857 16l77.714 77.714q16 16 16 38.857t-16 38.857l-168 168 168 168q16 16 16 38.857z"></path>
				</svg>
			</button>
		</div>

		<div class="container-in-header">
			<div class="container-in-header-content">
				<div class="container-in-header" id="site-name-bar">
					<div class="container-in-header-content">
						<a class="site-branding-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<div class="site-branding">
								<?php
								if (the_custom_logo()) {
									the_custom_logo();
								}
								else {
									?>
									<img src="<?php echo get_template_directory_uri(); ?>/resources/assets/images/uw-crest-web.svg" alt="UW Crest" id="uw-crest">
									<?php
								} ?>
								<div class="site-title-description-group">
									<?php
									if ( is_front_page() && is_home() ) :
										?>
										<span class="site-title"><?php bloginfo( 'name' ); ?></h1>
										<?php
									else :
										?>
										<span class="site-title"><?php bloginfo( 'name' ); ?></span>
										<?php
									endif;
									$calsv4_description = get_bloginfo( 'description', 'display' );
									if ( $calsv4_description || is_customize_preview() ) :
										?>
										<p class="site-description"><?php echo $calsv4_description; /* WPCS: xss ok. */ ?></p>
									<?php endif; ?>
								</div>
							</div><!-- .site-branding -->
						</a>
					</div>
				</div>

				<nav role="navigation" id="mobile-nav-links-container">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'mobile-menu',
						) );
					?>
				</nav>

				<nav role="navigation" class="mobile-nav-button-container">
							<button id="mobile-nav-button" aria-controls="primary-menu" aria-expanded="false">
								<div class="hamburger-div" id="hamburger-1"></div>
								<div class="hamburger-div" id="hamburger-2"></div>
								<div class="hamburger-div" id="hamburger-3"></div>
							</button>
				</nav>

				<div class="container-in-header" id="main-navigation-container">
					<nav id="site-main-navigation" class="container-in-header-content" role="navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
