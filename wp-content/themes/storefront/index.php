<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 * 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<hero>
			<div class="hero-title">
				<h1>Pas de Rush <span>Dans la ruche</span></h1>
				<h3>Ton nouvel allié : la balance connectée</h3>
				<p>Avec la balance connectée Miecolo, plus de stress, elle s’occupe de surveiller tes abeilles et te prévient au moindre danger.</p>
				<a href="/miecolo/boutique" class="cta-1">Accéder à la boutique</a>
			</div>

			<div class="hero-images">
				<img src="wp-content\themes\storefront\assets\images\apiculteurHeader.png" alt="">
				<a href="#"><img src="wp-content\themes\storefront\assets\images\icons\btnGame.svg" alt="code promo"></a>
			</div>
		</hero>

		<section class="section-presentation">
			<img src="wp-content\themes\storefront\assets\images\illuRucheDecomposee.png" alt="">
			<div class="presentation-title">
				<h2>Premiers pas</h2>
				<h3>Un outil en toute simplicité</h3>
				<p>La balance connectée Miecolo est très simple d’utilisation : il suffit de l’installer sous la ruche, la mettre en marche et le tour est joué ! Pas besoin de mettre des piles car elle est autonome en énergie grâce à son panneau solaire intégré !</br></br>Vous n’avez plus qu’à installer l’application Miecolo pour récolter vos données et surveiller vos abeilles !</p>
			</div>
		</section>

		<section class="section-features">
			<div class="feature-title">
				<h2>Elle s’occupe de tout</h2>
				<h3>Tes abeilles te remercieront</h3>
			</div>
			<div class="features">
				<div class="feature">
					<img src="wp-content\themes\storefront\assets\images\icons\location.svg" alt="">
					<div class="feature-title">
						<p><b>Antivol</b></p>
						<p>L’installation d’un antivol (ou tracker) offre une garantie de protection par une alerte et la possibilité de localiser la ruche en temps réel.</p>
					</div>
				</div>

				<div class="feature">
					<img src="wp-content\themes\storefront\assets\images\icons\drop.svg" alt="">
					<div class="feature-title">
						<p><b>Humidité</b></p>
						<p>Le taux d’humidité dans une ruche nous apporte un indice sur la qualité de vie à l'intérieur. Une ruche bien ventilée est une ruche en bonne santé.</p>					
					</div>
				</div>

				<div class="feature">
					<img src="wp-content\themes\storefront\assets\images\icons\temperature.svg" alt="">
					<div class="feature-title">
						<p><b>Température</b></p>
						<p>La température transmet des informations précises sur l'activité de l'essaim. Par exemple une miellée en cours ou un vol nuptial de la reine.</p>
					</div>
				</div>

				<div class="feature">
					<img src="wp-content\themes\storefront\assets\images\icons\weight.svg" alt="">
					<div class="feature-title">
						<p><b>Poids</b></p>
						<p>Cette mesure permet de connaître l’évolution de la production de miel et d’anticiper les événements apicoles comme l’essaimage et l'état des réserves.</p>
					</div>
				</div>
			</div>

			<a href="/miecolo/boutique" class="cta-1">Accéder à la boutique</a>
		</section>

		<section class="section-game">
			<h2>Rush Simulator</h2>
			<div class="visuel-game">
				<div class="bulles">
					<div class="bulle">
						<p><img class="bulleHG" src="http://localhost/miecolo/wp-content/uploads/2023/03/bulle.svg" alt=""><b>Gère ton rucher de la meilleure </br>manière possible</b></p>
					</div>
					<div class="bulle">
						<p><img class="bulleBG" src="http://localhost/miecolo/wp-content/uploads/2023/03/bulle.svg" alt=""><b>Protège tes abeilles de tous </br>les dangers !</b></p>
					</div>
				</div>
				<img src="wp-content\themes\storefront\assets\images\illuRucheFermee.png" class="game-presentation" alt="">
				<div class="bulles">
					<div class="bulle">
						<p><img class="bulleHD" src="http://localhost/miecolo/wp-content/uploads/2023/03/bulle.svg" alt=""><b>Récolte un maximum de miel dans </br>le temps imparti !</b></p>
					</div>
					<div class="bulle">
						<p><img class="bulleBD"src="http://localhost/miecolo/wp-content/uploads/2023/03/bulle.svg" alt=""><b>Place à la détente grâce </br>aux balances connectées</b></p>
					</div>
				</div>
			</div>

			<a href="#" class="cta-1">Jouer</a>
			<h2>30% de réduction</br><span>à gagner !</span></h2>
		</section>

		<section class="section-store">
			<div class="store-title">
				<h2>Nos offres</h2>
				<h3>Balance individuelle ou en lot ? À toi de choisir !</h3>
			</div>

			<div>
				<div class="cards">
					<figure>
						<img src="wp-content\themes\storefront\assets\images\ruchePrincipale.png" alt="">
						<figcaption>
							<h3>La balance connectée</h3>
							<p>Pour adopter son premier compagnon de route apicole technologique</p>

							<div class="discover-store">
								<p><b>Découvrir les ruches</b></p>
								<a href="/miecolo/boutique"><img src="wp-content\themes\storefront\assets\images\icons\btnArrow.svg" alt=""></a>
							</div>
						</figcaption>
					</figure>
					<figure>
						<img src="wp-content\themes\storefront\assets\images\packRucher1.png" alt="">
						<figcaption>
							<h3>Le pack rucher</h3>
							<p>Pour commencer une collection ou pour les apiculteurs déjà solides sur leurs appuis</p>

							<div class="discover-store">
								<p><b>Découvrir les packs</b></p>
								<a href="/miecolo/boutique"><img src="wp-content\themes\storefront\assets\images\icons\btnArrow.svg" alt=""></a>
							</div>
						</figcaption>
					</figure>
				</div>
			</div>
		</section>

	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
