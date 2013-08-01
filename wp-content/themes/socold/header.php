<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">
@font-face {
    font-family: 'bankgothicbold';
    src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/bankgothic_bold-webfont.eot');
    src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/bankgothic_bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/bankgothic_bold-webfont.woff') format('woff'),
         url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/bankgothic_bold-webfont.ttf') format('truetype'),
         url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/bankgothic_bold-webfont.svg#bankgothicbold') format('svg');
    font-weight: normal;
    font-style: normal;
}
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div class="headWrap">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php echo acf_image_output(get_field('header_logo', 'option'), '', ''); ?>
					</a>
				</h1>
				<nav id="site-navigation" class="navigation-main" role="navigation">
					<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', '_s' ); ?></a></div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'after' => '<span class="delimiter"> &amp;</span>' ) ); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->
	</div>

	<div id="main" class="site-main">
