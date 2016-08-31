<?php
/**
 * Template Name: Tickets Page
 *
 * @package parque
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--tickets">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-lecker active"><a href="#">Tickets</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

		<div class="border-wave"></div>

		<!-- TABLE 1 -->

		<div class="casa-row casa-row--nopad parque-text-color--blue">
			<div class="casa-col--text casa-col--100p">
				<p class="ticket-title font-uppercase margin--bot-neg">FULL DAY TICKET PRICES</p>
				<p class="ticket-sub margin-0">Everyday, rain or shine, from 10am to 5pm</p>
			</div>
		</div>
		<table class="tickets-table parque-body--light parque-text-color--blue">
			<tr>
				<td>
					<p class="parque-body">Children Under 90cm/36”</p>
				</td>
				<td>
					<p class="parque-body">Free</p>
				</td>
				<td class="ticket-hide-mobile">
					<p class="parque-body"></p>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td>
					<p class="parque-body">Single Day Adult Admission</p>
				</td>
				<td>
					<p class="parque-body"><?php echo get_field('full_adult') ?></p>
				</td>
				<td>
					<a class="parque-body font-lecker" href="https://parque.webconnex.com/tickets" target="_blank">Buy Now Save 10%</a>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td>
					<p class="parque-body">Single Day Under 12 Admission</p>
				</td>
				<td>
					<p class="parque-body"><?php echo get_field('full_under12') ?></p>
				</td>
				<td>
					<a class="parque-body font-lecker" href="https://parque.webconnex.com/tickets" target="_blank">Buy Now Save 10%</a>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td>
					<p class="parque-body margin--bot-neg">Senior</p>
					<small> (Guests 60 Years & Over - ID Required)</small>
				</td>
				<td>
					<p class="parque-body"><?php echo get_field('full_senior') ?></p>
				</td>
				<td>
					<a class="parque-body font-lecker" href="https://parque.webconnex.com/tickets" target="_blank">Buy Now Save 10%</a>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td>
					<p class="parque-body margin--bot-neg">Mexican National</p>
					<small>(Citizens of Mexico – ID Required)</small>
				</td>
				<td>
					<p class="parque-body"><?php echo get_field('full_mexican') ?></p>
				</td>
				<td>
					<a class="parque-body font-lecker" href="https://parque.webconnex.com/tickets" target="_blank">Buy Now Save 10%</a>
				</td>
			</tr>
		</table>


		<!-- TABLE 2 -->

		<div class="casa-row casa-row--nopad parque-text-color--blue">
			<div class="casa-col--text casa-col--100p">
				<p class="ticket-title font-uppercase margin--bot-neg">1/2 DAY TICKET PRICES</p>
				<p class="ticket-sub margin-0">Available from 1:30 to 5:00 pm ONLY</p>
			</div>
		</div>
		<table class="tickets-table parque-body--light parque-text-color--blue">
			<tr>
				<td>
					<p class="parque-body">Children Under 90cm/36”</p>
				</td>
				<td>
					<p class="parque-body">Free</p>
				</td>
				<td class="ticket-hide-mobile">
					<p class="parque-body"></p>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td>
					<p class="parque-body">Half Day General Admission</p>
				</td>
				<td>
					<p class="parque-body"><?php echo get_field('half_adult') ?></p>
				</td>
				<td>
					<a class="parque-body font-lecker" href="https://parque.webconnex.com/tickets" target="_blank">Buy Now Save 10%</a>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td>
					<p class="parque-body">Half Day Under 12 Admission </p>
				</td>
				<td>
					<p class="parque-body"><?php echo get_field('half_under12') ?></p>
				</td>
				<td>
					<a class="parque-body font-lecker" href="https://parque.webconnex.com/tickets" target="_blank">Buy Now Save 10%</a>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td>
					<p class="parque-body margin--bot-neg">Senior</p>
					<small>(Guests 60 Years &amp; Over - ID Required)</small>
				</td>
				<td>
					<p class="parque-body"><?php echo get_field('half_senior') ?></p>
				</td>
				<td>
					<a class="parque-body font-lecker" href="https://parque.webconnex.com/tickets" target="_blank">Buy Now Save 10%</a>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td>
					<p class="parque-body margin--bot-neg">Mexican National</p>
					<small>(Citizens of Mexico – ID Required)</small>
				</td>
				<td>
					<p class="parque-body"><?php echo get_field('half_mexican') ?></p>
				</td>
				<td>
					<a class="parque-body font-lecker" href="https://parque.webconnex.com/tickets" target="_blank">Buy Now Save 10%</a>
				</td>
			</tr>
		</table>
		<div class="casa-row casa-row--nopad parque-text-color--blue">
			<div class="casa-col--text casa-col--100p text-center padding--top-0">
				<p class="ticket-sub">Purchasing a full day pass online earns a 10% discount on these listed prices.<br> All ticket sales are final and nonrefundable.</p>
			</div>
		</div>



		<div class="border-wave"></div>

		<div class="casa-row clear" id="tickets-buy">
		    <div class="casa-col--bg casa-col--60p casa-col--right"></div>
		    <div class="casa-col--text casa-col--40p casa-col--extrapad casa-col--orange-dark casa-col--pattern-circle clear">
		        <a  href="https://parque.webconnex.com/tickets" target="_blank" class="font-no-underline"><h1 class="parque-XL text-center parque-text-color--white"><span class="font-lecker">Buy Now<br/>Save 10%</span></h1></a>
		    </div>
		</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
