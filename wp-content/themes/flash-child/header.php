<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flash
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script>
if (screen && screen.width > 991) {
document.write('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.js""><\/script>');
}
</script>
</head>

<body <?php body_class(); ?>>

<?php
if ( get_theme_mod( 'flash_disable_preloader', '' ) != 1 ) : ?>
<div id="preloader-background">
	<div id="spinners">
		<div id="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<?php endif; ?>

<?php
/**
 * flash_before hook
 */
do_action( 'flash_before' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'flash' ); ?></a>

	<?php
	/**
	 * flash_before_header hook
	 */
	do_action( 'flash_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner">

		<div id="mynav" class="header-bottom navbar-fixed-top">
			<div class="container">

				<div class="logo col-md-1">
					<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
					<figure class="logo-image">
						<?php flash_the_custom_logo(); ?>
					</figure>
					<?php endif; ?>
				</div>

				<div class="col-md-10 site-navigation-container">
					<div id="site-navigation" class="main-navigation text-center" role="navigation">
						<div class="menu-toggle">
							<i class="fa fa-bars"></i>
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div><!-- #site-navigation -->					
				</div>

				<div class="header-search-container col-md-1">
					<div class="search-wrap">
						<div class="search-icon">
							<i class="fa fa-search"></i>
						</div>
						<div class="search-box">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</header><!-- #masthead -->
<!-- <script>
	$(window).scroll(function(){
        if ( $(this).scrollTop() ) {
            $('#mynav').addClass('nav-colored');
        } else {
            $('#mynav').removeClass('nav-colored');
        }
    })
</script> -->
	<?php
	/**
	 * flash_after_header hook
	 */
	do_action( 'flash_after_header' ); ?>

	<?php get_template_part( 'template-parts/header-media' ); ?>


	<?php
	/**
	 * flash_before_main hook
	 */
	do_action( 'flash_before_main' ); ?>

	<div id="content" class="site-content">
		
