<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site" style="padding: 0 2rem;">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<a href="/miecolo"><img src="http://localhost/miecolo/wp-content/uploads/2023/03/miecoloLogo.png" alt=""></a>
		<nav>
			<ul class="nav-items">
				<a href="#"><li>
					<img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\icons\iconGame.svg" alt="">
					<p>Jeu</p>
				</li></a>
				<a href="/miecolo/boutique"><li>
					<img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\icons\iconShop.svg" alt="">
					<p>Boutique</p>
				</li></a>
				<a href="/miecolo/panier"><li>
					<img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\icons\iconPanier.svg" alt="">
					<p>Panier</p>
				</li></a>
				<a href="/miecolo/mon-compte"><li>
					<img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\icons\iconCompte.svg" alt="">
					<p>Compte</p>
				</li></a>
			</ul>
		</nav>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
