<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package parque
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
			<ul class="clear">
				<li>Parque de los Sueños</li>
				<li>Isla Mujeres, Mexico</li>
				<li>US Toll free 877-372-3993</li>
				<li>Mexico 998-888-0370</li>
				<li><a target="_blank" href="mailto:reservations@casasuenos.com" class="font-underline">Reservations@casasuenos.com</a></li>
				<li><a target="_blank" href="<?php echo get_permalink(get_page_by_title( 'Privacy Policy' )->ID) ?>">Privacy Policy</a></li>
				<li class="fb-ico"><a target="_blank" href="https://www.facebook.com/ParqueSuenos"><img src="http://casasuenos.com/wp-content/themes/casasuenos/imgs/ico-facebook.png" alt="Facebook"></a></li>
			</ul>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59047003-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
