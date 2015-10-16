<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package pixcode
 * @subpackage ebicalho
 * @since ebicalho 1.0
 */
?>

<section class="footer-sitemap">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-with-line"><p>
					<img src="<?php bloginfo('template_url'); ?>/img/logoEbicalhoNova2.jpg" alt="LottaLeben" height="60px" >
				</p></h3>
			</div>
		</div>
		<div class="row">
			<?php if ( ! dynamic_sidebar( 'footer-widget-zone' ) ) {} ?>


			
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<p class="padding-top">© Copyright 2015 Ebicalho Rodriguez - Todos os direitos reservados</p>
			</div>
			<div class="col-sm-4">
				<ul class="list-inline links social-media-right">
					<li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="http://google.com/+" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="http://xing.com" target="_blank"><i class="fa fa-xing"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<!-- Google Maps -->
	<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo('template_url'); ?>/assets/js/library.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/smooth-scroll.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.nav.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/isotope.pkgd.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/site.js"></script>

	<script>
		smoothScroll.init({
			speed: 500,
			easing: 'easeInOutCubic',
			updateURL: true,
			offset: 0,
			callback: function ( toggle, anchor ) {}
		});

		$(document).ready(function(){
			var filtro1 = $("#firstfilter a");
			filtro1.click(function(){
			$("#secondfilter").css("display","inline-block");
			});
			$('#firstfilter .button-group').on('click', 'a', function() {
				$('.filters a.is-checked').removeClass('is-checked');
				$(this).addClass('is-checked');

			});
			$('#secondfilter .button-group').on('click', 'a', function() {
				$('.filters a.is-checked').removeClass('is-checked');
				$(this).addClass('is-checked');
			});


		});





	</script>
</body>
</html>
