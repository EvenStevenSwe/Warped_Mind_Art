<?php
/*
Template Name: varukorg
*/
get_header();?>

	<div class="wma-textruta">
		<div class="wma-text">
			<h2>

				<?php echo do_shortcode('[woocommerce_cart]');  ?>


			</h2>
		</div> <!-- wma-text -->
	</div> <!-- wma-textruta -->

<?php get_footer();