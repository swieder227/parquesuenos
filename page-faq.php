<?php
/**
 * Template Name: FAQ Page
 *
 * @package parque
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div class="page-topimg page-topimg--faq">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-lecker"><a href="<?php echo get_permalink(get_page_by_title( 'Info' )->ID) ?>">Info</a></div>
					<div class="toptab font-lecker  active"><a href="#">F.A.Q.</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main parque-text-color--bluedark" role="main">

		<div class="border-wave"></div>

		<div class="casa-row casa-row--nopad clear">
			<div class="casa-col--col-form-left">
				<div class="casa-col--text casa-col--100p faq-yellow-container">
					<div>
						<span class="parque-body parque-body--bold">Q&nbsp;:&nbsp;</span><span class="parque-body-sm parque-body--light">Can I buy tickets online?</span>	
					</div>
					<div>
						<span class="parque-body parque-body--bold">A&nbsp;:&nbsp;</span><span class="parque-body-sm parque-body--light">Absolutely, you can <a class="parque-text-color--bluedark parque-body--bold font-underline" href="#" target="_blank">buy</a> your tickets in advance on this website.</span>
					</div>
				</div>
				<div class="casa-col--text casa-col--100p faq-yellow-container">
					<div>
						<span class="parque-body parque-body--bold">Q&nbsp;:&nbsp;</span><span class="parque-body-sm parque-body--light">Is there a limit to how often I can use the zip-line, water slides, or other equipment?</span>	
					</div>
					<div>
						<span class="parque-body parque-body--bold">A&nbsp;:&nbsp;</span><span class="parque-body-sm parque-body--light">There is no limit to use of the zip-line, rope swings, climbing walls, or water slides. We have over 24 kayaks and stand-up paddle boards. In the rare times that there are not enough kayaks or stand-up paddleboards a 30-minute usage time may be enforced.</span>
					</div>
				</div>
				<div class="casa-col--text casa-col--100p faq-yellow-container">
					<div>
						<span class="parque-body parque-body--bold">Q&nbsp;:&nbsp;</span><span class="parque-body-sm parque-body--light">What if I just want to use the pools, or kayaks? Can I rent those a la carte?</span>	
					</div>
					<div>
						<span class="parque-body parque-body--bold">A&nbsp;:&nbsp;</span><span class="parque-body-sm parque-body--light">We do not offer a la carte packaging at this time, our day passes allow you to use any and all of our facilities for the day.</span>
					</div>
				</div>
				<div class="casa-col--text casa-col--100p faq-yellow-container">
					<div>
						<span class="parque-body parque-body--bold">Q&nbsp;:&nbsp;</span><span class="parque-body-sm parque-body--light">Is it appropriate to tip?</span>	
					</div>
					<div>
						<span class="parque-body parque-body--bold">A&nbsp;:&nbsp;</span><span class="parque-body-sm parque-body--light">Yes, we encourage you to tip your waiters 15-20% and 20 to 50 pesos for park employees who assist with kayaks, paddleboards, or lifeguard.</span>
					</div>
				</div>
			</div>

			<div class="casa-col--col-form-right">
				<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ) ?>	
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row clear" id="faq-tickets">
		    <div class="casa-col--bg casa-col--70p"></div>
		    <div class="casa-col--text casa-col--40p casa-col--extrapad casa-col--right casa-col--blue-dark casa-col--scratch-blue">
		        <a  href="https://parque.webconnex.com/tickets" target="_blank" class="font-no-underline"><h1 class="parque-XL text-center parque-text-color--white"><span class="font-lecker">Buy<br/>Tickets</span></h1></a>
		    </div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
