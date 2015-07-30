<?php
/**
 * Template Name: Photos Page
 *
 * @package parque
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div class="page-topimg page-topimg--photos">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-lecker active"><a href="#">Photos</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

		<div class="border-wave"></div>

		<?php echo do_shortcode( '[unitegallery gallery_main]' ) ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
