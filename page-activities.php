<?php
/**
 * Template Name: Activities Page
 *
 * @package parque
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div class="page-topimg page-topimg--active">
		
			<div class="carousel-main carousel-main" data-slide-index="0">
			    <!-- Curtain -->
			    <div class="carousel-curtain js-carousel-curtain"></div>
			    <!-- Slides -->
			    <div class="carousel-item" data-slide-index="0"><div class="carousel-img"></div></div>
				<div class="carousel-item" data-slide-index="1"><div class="carousel-img"></div></div>
				<div class="carousel-item" data-slide-index="2"><div class="carousel-img"></div></div>
				<div class="carousel-item" data-slide-index="3"><div class="carousel-img"></div></div>
				<div class="carousel-item" data-slide-index="4"><div class="carousel-img"></div></div>
				<div class="carousel-item" data-slide-index="5"><div class="carousel-img"></div></div>
				
				<!-- not for carousel, but placed here for z-index  -->
				<div class="toptabs-contain">
					<div class="toptabs">
						<div class="toptab font-lecker active"><a href="#">Activities</a></div>
					</div>
				</div>

				<!-- Controls -->
			    <div class="carousel-controls">
				    <div class="carousel-controls-left">
					    <button class="carousel-btn" data-dir="_L"></button>
					    <!-- Dots -->
					    <div class="carousel-dots">
					    	<div class="carousel-dot active" data-slide-index="0"></div>
					    	<div class="carousel-dot" data-slide-index="1"></div>
					    	<div class="carousel-dot" data-slide-index="2"></div>
					    	<div class="carousel-dot" data-slide-index="3"></div>
					    	<div class="carousel-dot" data-slide-index="4"></div>
					    	<div class="carousel-dot" data-slide-index="5"></div>
				    	</div>
				    	<button class="carousel-btn" data-dir="_R"></button>
				    </div>
				    <div class="carousel-controls-right">
					    <button class="carousel-fullscreen js-carousel-gofull"></button>
					</div>  
			    </div>
			</div>
			

		</div>

		<main id="main" class="site-main parque-text-color--white" role="main">

		<div class="border-wave"></div>

		<div class="casa-row casa-row--nopad parque-text-color--blue" id="active-intro">
			<div class="casa-col--bg"></div>
			<div class="casa-col--text casa-col--100p">
				<h2 class="parque-h2 font-light parque-body--light">Day passes include unlimited access to our </h2>
				<div class="two-col-layout clear">
					<div class="two-col-layout__left">
						<ul>
							<li><span class="parque-body">Snorkeling</span></li>
							<li><span class="parque-body">Kayaking</span></li>
							<li><span class="parque-body">Paddle Boarding</span></li>
							<li><span class="parque-body">Water Slides</span></li>
							<li><span class="parque-body">Rope Swing</span></li>
							<li><span class="parque-body">Climbing Wall</span></li>
						</ul>
					</div>
					<div class="two-col-layout__right">
						<ul>
							<li><span class="parque-body">Family Pool</span></li>
							<li><span class="parque-body">Adult-Only Pool</span></li>
							<li><span class="parque-body">Mayan Splashdown Zip Line</span></li>
							<li><span class="parque-body">Swim-up Bar</span></li>
							<li><span class="parque-body">Restaurant</span></li>
							<li><span class="parque-body">Best View on the Island</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	

		<div class="casa-row clear" id="active-adventure">
			<div class="casa-col--bg casa-col--50p casa-col--right"></div>
			<div class="casa-col--text casa-col--50p casa-col--minh20 casa-col--blue-dark casa-col--scratch-blue">
				<h1 class="parque-h1"><span class="font-lecker">Thrilling</span> <span class="font-uppercase">ADVENTURE</span></h1>
				<p class="parque-body">Whether you are a child or an adult you inner kid will come out when you climb our <span class="parque-body--bold">rock walls</span>, leap on our <span class="parque-body--bold">rope swing</span> or skim down any of our <span class="parque-body--bold">four water slides</span>.</p>
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row clear" id="active-zipline">
			<div class="casa-col--bg casa-col--50p"></div>
			<div class="casa-col--text casa-col--50p casa-col--right casa-col--minh20 casa-col--orange-light casa-col--scratch-orange-light">
				<span class="parque-h1"><span class="font-lecker">Sky Wave</span></span>
				<br>
				<span class="parque-h3 parque-body--bold font-uppercase">MAYAN SPLASH DOWN ZIP&nbsp;LINE</span>
				<p class="parque-body">No trip to Isla Mujeres is complete until you take up the challenge offered by our unique zip-line rollercoaster. The SkyWave will allow you to glide through the air before dipping for a thrilling splashdown. Sky and water come together at Parque de los Sueños for an incredible adventure.</p>
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row clear" id="active-explore">
			<div class="casa-col--bg casa-col--50p casa-col--right"></div>
			<div class="casa-col--text casa-col--50p casa-col--minh20 casa-col--orange-dark casa-col--scratch-orange-dark">  
				<h1 class="parque-h1"><span class="font-lecker">Exciting</span> <span class="font-uppercase">EXPLORATION</span></h1>
				<p class="parque-body">Discover the abundant sea life of the Caribbean as you navigate the perfect waters off our shore. You can <span class="parque-body--bold">snorkel</span> and enjoy a robust ecology of fish and plant life that will dazzle adventurers of all ages, or launch one of our <span class="parque-body--bold">kayaks</span> and take it all in at your leisure. <span class="parque-body--bold">Stand-Up Paddleboards</span> are available as well to those explorers looking for more of a challenge.</p>
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row clear" id="active-pools">
			<div class="casa-col--bg casa-col--50p"></div>
			<div class="casa-col--text casa-col--50p casa-col--right casa-col--minh20 casa-col--blue-dark casa-col--scratch-blue">
				<h1 class="parque-h1"><span class="font-lecker">Cascading</span> <span class="font-uppercase">POOLs</span></h1>
				<p class="parque-body">Our three tiered swimming pools cascade down to provide a fresh water respite with an amazing view. Our adult’s only pool includes a swim-up bar, in-pool tables, and submerged seating to enjoy appetizers, cocktails, and other amenities. Perched further uphill are two additional pools for children and teenagers.</p>
			</div>
		</div>

		<div class="border-wave"></div>

		<div class="casa-row casa-row--nopad parque-text-color--blue" id="active-intro">
			<div class="casa-col--bg"></div>
			<div class="casa-col--text casa-col--100p">
				<h1 class="parque-h1"><span class="font-lecker">Safety</span> <span class="font-uppercase">First</span></h1>
				<p class="parque-body">Parque de los Sueños has first aid kits and fire suppression devices throughout the park. Our modern kitchen facilities are built to the highest standards and utilize hygienic practices normally found in developed cities.
				<br>
				<br>
				When open our pools and activities are manned by park staff, including lifeguards. Safety is partnership between the park and guest and we ask that you refrain from running around, diving into, or jumping from the pools and waterfalls.</p>
			</div>
		</div>	

		<div class="border-wave"></div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php wp_enqueue_script( 'parque-rooms-carousel', get_template_directory_uri() . '/js/carousel.js', array(), '20150627', true ); ?>

<?php get_footer(); ?>
