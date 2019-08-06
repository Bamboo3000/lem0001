<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
		<footer class="footer">
			<a href="/" class="footer__logo">
				<object data="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" type="image/svg+xml" width="260" height="105">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Lemasomo logo black" width="260" height="105">
				</object>
			</a>
			<div class="container container-sml flex-cont">
				<div class="footer__item left">
					<p class="title">
						Contact
					</p>
					<hr>
					<p class="text">
						Lemasomo Sp. z o.o.<br/>
						<a href="tel:+48882837257">+48 882 837 257</a><br/>
						<a href="mailto:office@lemasomo.com">office@lemasomo.com</a>
					</p>
					<div class="socials">
						<a href="https://www.facebook.com/PinarelloPolska/" target="_blank" rel="noreferrer">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="https://www.instagram.com/lemasomo/" target="_blank" rel="noreferrer">
							<i class="fab fa-instagram"></i>
						</a>
					</div>
				</div>
				<div class="footer__item center">
					<p class="title">
						About us
					</p>
					<hr>
					<?php 
						wp_nav_menu( array( 
							'theme_location' => 'footer_one', 
							'container' =>	'nav',
						) ); 
					?>
				</div>
				<div class="footer__item right">
					<p class="title">
						Customer service
					</p>
					<hr>
					<?php 
						wp_nav_menu( array( 
							'theme_location' => 'footer_two', 
							'container' =>	'nav',
						) ); 
					?>
				</div>
			</div>
			<div class="container container-sml flex-cont lower">
				<div class="footer__item lower left">
					Copyright © Lemasomo <?= date("Y"); ?>
				</div>
				<div class="footer__item lower right">
					Made by <a href="https://www.sative.co.uk" target="_blank" rel="noreferrer"><strong>SATIVE</strong></a>
				</div>
			</div>
		</footer>
		<div id="wrapper__overlay"></div>
		<?php include ('woocommerce/cart/cart.php'); ?>
		<div id="cookieMessage">
			<div class="container">
				<div class="message">
					Lemasomo uses cookies to improve our website and your user experience. 
					<br/>
					By clicking any link or continuing to browse you are giving your consent to our
					<a href="/cookie-policy"><u>cookie-policy</u></a>.
				</div>
				<div class="agree" onclick="cookieAgree()">
					Accept
				</div>
			</div>
		</div>
	</div>
	<div class="search__container">
		<?= do_shortcode( '[wcas-search-form]' ); ?>
	</div>
	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/assets/js/app.js?v=1.2" defer></script>
	
</body>
</html>