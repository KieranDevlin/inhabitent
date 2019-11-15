<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-footer-main">
		<div class="business-info">
			<div class="footer-info">
				<h3>CONTACT INFO</h3>
				<ul class="list-styles">
					<li><span class="icon-styles"><i class="fas fa-envelope"></i></span><a href="mailto:info@inhabitent.com">info@inhabitent.com</a> </li>
					<li><span class="icon-styles"><i class="fas fa-phone-alt"></i></span><a href="tel:778-456-7891"> 778-456-7891</a></li>
					<li><span class="icon-styles"><i class="fab fa-facebook-square"></i></span><span class="icon-styles"><i class="fab fa-twitter-square"></i></span><span class="icon-styles"><i class="fab fa-google-plus-square"></i></span></li>
				</ul>

			</div>
			<div class="footer-info">
				<H3>BUSINESS HOURS</H3>
				<ul class="list-styles">
					<li><span class="bold-text">Monday-Friday: </span>9am to 5pm</li>
					<li><span class="bold-text">Saturday: </span>10am to 2pm</li>
					<li><span class="bold-text">Sunday: </span>Closed</li>

				</ul>
			</div>
		</div>
		<div class="logo-container">

			<a href="#"><img class="footer-logo" src="<?= get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent company logo"></a>
		</div>
	</div>


	<div class="site-info">

		<p> COPYRIGHT &copy; 2019 INHABITENT </p>
	</div>
	<!--.site-info-->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>