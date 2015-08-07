<?php
/**
 * Template Name: Info Page
 *
 * @package parque
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div class="page-topimg page-topimg--info">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-lecker active"><a href="#">Info</a></div>
					<div class="toptab font-lecker"><a href="<?php echo get_permalink(get_page_by_title( 'FAQ' )->ID) ?>">F.A.Q.</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main parque-text-color--bluedark" role="main">

		<div class="border-wave"></div>

		<div class="casa-row casa-row--nopad clear">
			<div class="casa-col--col-form-left">
				<div class="casa-col--text casa-col--100p">
					<h4 class="parque-h4 parque-body--bold">Parque Promise</h4>
					<p class="parque-body--sm parquee-body--light">At Parque de los Sueños we have a vision that everyone should be able to enjoy Isla Mujeres and the natural beauty it offers, especially the children of the island. We are committed to continue fundraising and donating to the Little Yellow School House (the only special-needs facility on the island). Enriching both the community and preserving the natural splendor of our local environment are the top priorities of our park and our locally-hired staff.</p>
				</div>

				<div class="casa-col--text casa-col--100p">
					<h4 class="parque-h4 parque-body--bold">Facilities</h4>
					<p class="parque-body--sm parquee-body--light">The modern facilities at Parque de los Sueños allow you to enjoy the numerous amenities of the Isla Mujeres shore in style. Aside from activities, equipment, pools, restaurant, and incredible views, Parque de los Sueños also includes showers, clean restrooms, disability-access, sun chairs and loungers, towels, and everything you need to have fun in the sun.</p>
				</div>

				<div class="casa-col--text casa-col--100p">
					<h4 class="parque-h4 parque-body--bold">Isla Mujeres</h4>
					<p class="parque-body--sm parquee-body--light">Isla Mujeres is a tropical island located off the coast of Quintana Roo and Cancun. It has a distinct community of over 16,000 people with a rich Mayan heritage. Authentic shopping, dining, and natural activities can be enjoyed throughout the island. The island also sports some of the most pristine beaches and waters in the entire Caribbean.</p>
				</div>

				<div class="casa-col--text casa-col--100p">
					<h4 class="parque-h4 parque-body--bold">Planning Your Trip</h4>
					<p class="parque-body--sm parquee-body--light">You can reach Parque de los Sueños by golf cart or taxi. Taxi fare from the ferry terminal is set at 88 pesos. The park is located on the Cancun side of the island near the southern point between Punta Sur and Isla Mujeres Palace. Golf cart parking is available on the upper lot next to the street or on the turnoff to Maria’s Kan-Kin.</p>
					Download our helpful map of Isla Mujeres <a class="parque-text-color--bluedark parque-body--bold font-underline" href="http://parque.staging.sethwieder.com/wp-content/themes/parquesuenos/pdf/Isla-Mujeres-Map-ParquedelosSuenos.pdf">here</a>.
				</div>

				<div class="casa-col--text casa-col--100p">
					<h4 class="parque-h4 parque-body--bold">Hours of Operation</h4>
					<p class="parque-body--sm parquee-body--light">Parque de los Sueños operates everyday, rain or shine, from 10am to 5pm for activities. Brunch is served from 8am to 4pm daily. Our fine dining venue, Reves, starts serving at 5pm until 10pm.</p>
				</div>

				<div class="casa-col--text casa-col--100p">
					<h4 class="parque-h4 parque-body--bold">Events at Parque</h4>
					<p class="parque-body--sm parquee-body--light">Parque de los Sueños is available for private events and parties. Gorgeous waters, a modern facility, and great service make it the perfect locale on the island for any function. Please contact <a class="parque-text-color--bluedark" href="mailto:reservations@casasuenos.com" target="_blank">reservations@casasuenos.com</a> to inquire about day rentals, event services, and custom proposals.</p>
				</div>	
			</div>

			<div class="casa-col--col-form-right">
				<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ) ?>	
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row clear" id="info-tickets">
		    <div class="casa-col--bg casa-col--70p"></div>
		    <div class="casa-col--text casa-col--40p casa-col--extrapad casa-col--right casa-col--blue-dark casa-col--scratch-blue">
		        <a  href="https://parque.webconnex.com/tickets" target="_blank" class="font-no-underline"><h1 class="parque-XL text-center parque-text-color--white"><span class="font-lecker">Buy Now<br/>Save 10%</span></h1></a>
		    </div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
