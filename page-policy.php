<?php
/**
 * Template Name: Policy Page
 *
 * The template for displaying policies
 *
 *
 * @package parque
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--home">
			
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div class="casa-row casa-row--nopad">
				<div class="casa-col--text casa-col--70p">
					<div class="parque-body--sm parque-text-color--bluedark body-text--policy">
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>

			<div class="border-wave"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
