<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-content col-full">
			<div class="infos-footer">
				<h3>Informations</h3>
				<ul>
					<li>Politique de remboursement</li>
					<li>CGU & CGV</li>
					<li>Mentions légales</li>
					<li>Politique de confidentialité</li>
				</ul>
			</div>
			<div class="plan-footer">
				<h3>Plan du site</h3>
				<ul>
					<li>Accueil</li>
					<li>Boutique</li>
					<li>Panier</li>
					<li>Compte</li>
					<li>Jeu concours</li>
				</ul>
			</div>
			<div class="contact-footer">
				<h3>Contact</h3>
				<ul>
					<li>Tel : NUMERO</li>
					<li>Adresse : Bordeaux, 33000 France</li>
					<li>Email : contact@contact.com</li>
					<li>N° Siret : </li>
				</ul>
				<ul class="reseaux">
					<li><img src="wp-content\themes\storefront\assets\images\icons\insta.svg" alt=""></li>
					<li><img src="wp-content\themes\storefront\assets\images\icons\youtube.svg" alt=""></li>
					<li><img src="wp-content\themes\storefront\assets\images\icons\twitter.svg" alt=""></li>
					<li><img src="wp-content\themes\storefront\assets\images\icons\facebook.svg" alt=""></li>
				</ul>
			</div>
		</div>
		
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
