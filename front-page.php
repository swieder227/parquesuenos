<?php
/**
 * Home Page
 *
 * @package parque
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--home">
			<a class="header-special-btn" href="https://parque.webconnex.com/NewYearsEve?utm_source=parquedelossuenos&utm_medium=Website&utm_campaign=ParqueButtonClicks"></a>
		</div>

		<main id="main" class="site-main parque-text-color--white" role="main">

		<div class="casa-row casa-row--nopad" id="home-intro">
			<div class="casa-col--bg"></div>
			<div class="casa-col--text casa-col--100p">
				<div class="two-col-layout two-col-layout--flex-center clear">
					<div class="two-col-layout__left">
						<h1 class="parque-h1 font-lecker margin-0 margin--bot-neg">Welcome</h1>
						<p class="parque-body">to Parque de los Sueños on Isla Mujeres, the island’s most exciting Ocean Adventure Park. Explore and enjoy the gorgeous water, anchored by an expanded sun deck, wooden pier, and a full array of facilities and gear. Nature and adventure come together for a truly unique experience that everyone can appreciate and&nbsp;enjoy.</p>
					</div>
					<div class="two-col-layout__right">
						<ul>
							<li><span class="parque-body">Natural Wildlife and Pristine Waters</span></li>
							<li><span class="parque-body">Kayaks, Paddle Boards, and Snorkel Gear</span></li>
							<li><span class="parque-body">Pools, Hammocks, and Sun Deck</span></li>
							<li><span class="parque-body">Showers, Lockers, and Towels</span></li>
							<li><span class="parque-body">Restaurant and Snack Menu</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row clear" id="home-adventure">
			<div class="casa-col--bg casa-col--55p"></div>
			<div class="casa-col--text casa-col--45p casa-col--right casa-col--orange-light casa-col--scratch-orange-light">
				<h1 class="parque-h1"><span class="font-lecker">Ocean</span> <span class="font-uppercase">&nbsp;ADVENTURE</span></h1>
				<p class="parque-body">Immerse yourself in the sparkling sapphire waters off of Isla Mujeres and explore the abundant wildlife of the Caribbean Sea. Snorkel, kayak, and paddle board your way through some of the most pristine water in the world. Life jackets, equipment, and gear all included.</p>
				<div class="alignright parque-body font-uppercase learnmore-link"><a href="<?php echo get_permalink(get_page_by_title( 'Activities' )->ID) ?>">See Activities</a></div>
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row clear" id="home-fun">
			<div class="casa-col--bg casa-col--55p casa-col--right"></div>
			<div class="casa-col--text casa-col--45p casa-col--orange-dark casa-col--scratch-orange-dark">
				<h1 class="parque-h1"><span class="font-lecker">Fun in the</span> <span class="font-uppercase">&nbsp;SUN</span></h1>
				<p class="parque-body">With three dazzling pools (one adults-only, one kids-only and one for all ages), four water slides, two climbing walls, a rope swing, and the thrilling SkyWave, the Mayan Splashdown Zip line there is a no shortage of fun and excitement to be had at Parque de los Sueños.</p>
				<div class="alignright parque-body font-uppercase learnmore-link"><a href="<?php echo get_permalink(get_page_by_title( 'Tickets' )->ID) ?>">Ticket Info</a></div>
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row clear" id="home-luxury">
			<div class="casa-col--bg casa-col--55p"></div>
			<div class="casa-col--text casa-col--45p casa-col--right casa-col--blue-dark casa-col--scratch-blue">
				<h1 class="parque-h1"><span class="font-lecker">Pool-Side</span> <span class="font-uppercase">&nbsp;LUXURY</span></h1>
				<p class="parque-body">Our spacious, adults-only pool boasts the best view on the island. Complete with a swim-up bar and tables for dining service, you can enjoy anything from our all-day menu as you sip your favorite cerveza, margarita or mojito. An oasis for those looking to experience paradise at their own pace.</p>
				<div class="alignright parque-body font-uppercase learnmore-link"><a href="<?php echo get_permalink(get_page_by_title( 'Dining' )->ID) ?>">Dining Options</a></div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
