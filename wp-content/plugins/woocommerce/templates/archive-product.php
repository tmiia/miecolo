<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<!-- <header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"></h1>
	<?php endif; ?>
</header> -->

<section class="produits">
	<h2>Les balances connectées</h2>
	<h3>Pour penser l’apiculture sans stress pour les apiculteurs débutants et les confirmés</h3>
	<div class="cards">
		<figure>
			<img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\ruchePrincipale.png" alt="">
			<figcaption>
				<h3>La balance principale</h3>
				<p>Balance connectée et autonome en énergie + abonnement de 3€ HT/ mois</p>

				<div class="discover-store">
					<p><b>265 € HT</b></p>
					<a href="/miecolo/boutique/balance-principale"><img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\icons\btnArrow.svg" alt=""></a>
				</div>
			</figcaption>
		</figure>
		<figure>
			<img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\rucheSecondaire.png" alt="">
			<figcaption>
				<h3>La balance secondaire</h3>
				<p>Balance connectée et autonome en énergie à coupler avec une balance principale</p>

				<div class="discover-store">
					<p><b>225 € HT</b></p>
					<a href="/miecolo/boutique/balance-secondaire"><img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\icons\btnArrow.svg" alt=""></a>
				</div>
			</figcaption>
		</figure>
	</div>

	<h2>Les packs complets</h2>
	<h3>Profite des tarifs avantageux des packs ruchers pour faire des économies !</h3>
	<div class="cards">
		<figure>
			<img src="http://localhost/miecolo/wp-content/uploads/2023/03/packRucher1.png" alt="">
			<figcaption>
				<h3>Pack rucher</h3>
				<p>1 balance principale et 2 balances secondaires + abonnement de 3€ HT/ mois</p>
				<div class="discover-store">
					<p><b>685 € HT</b></p>
					<a href="/miecolo/boutique/pack-rucher"><img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\icons\btnArrow.svg" alt=""></a>
				</div>
			</figcaption>
		</figure>
		<figure>
			<img src="http://localhost/miecolo/wp-content/uploads/2023/03/packRucher2-1.png" alt="">
			<figcaption>
				<h3>Pack double rucher</h3>
				<p>2 balances principales et 4 balances secondaires + abonnement de 6€ HT/ mois</p>
				<div class="discover-store">
					<p><b>1310 € HT</b></p>
					<a href="/miecolo/boutique/pack-double-rucher"><img src="http://localhost/miecolo/wp-content\themes\storefront\assets\images\icons\btnArrow.svg" alt=""></a>
				</div>
			</figcaption>
		</figure>
	</div>

	<a href="/miecolo" class="cta-1">Retour à l'accueil</a>
</section>



<?php

get_footer( 'shop' );
