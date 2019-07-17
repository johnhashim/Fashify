<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fashify
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'fashify' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">

				<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo">
					<?php fashify_the_custom_logo(); ?>
				</div>
				<?php endif; ?>

				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>

			</div><!-- .site-branding -->

			<div class="social-menu">
				<?php if ( has_nav_menu( 'social' ) ) {
					wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'menu-social', 'container_id' => 'menu-social', 'container_class' => 'social-links', 'link_before' => '<span class="screen-reader-text">',  'link_after'   => '</span>'  ) ); 
				} ?>
			</div>

		</div>

	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">

			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'fashify' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

		</div>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
<div class="container">
<div class="ads">
<style>
.ads{
	height: auto;
    padding: 9px 5px;
    margin: auto;
    box-shadow: 0px 0px 5px #777;
    background: #fff;
    overflow: hidden;
	border: 1px solid #eee;
    border-radius: 4px;
}

</style>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 970by250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:250px"
     data-ad-client="ca-pub-7616051391644176"
     data-ad-slot="7650038623"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>